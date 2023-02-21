<?php

/**
 * Add Google Map API to ACF
 * @param  array
 * @return array
 */
function heartonfire_acf_google_map_api($api)
{
    if ($api_google_map = get_field('settings_api_google_map', 'option')) {
        $api['key'] = $api_google_map;
    }
    return $api;
}
add_filter('acf/fields/google_map/api', 'heartonfire_acf_google_map_api');

/**
 * Initialize ACF Settings
 * @return void
 */
function heartonfire_acf_init()
{
    if ($api_google_map = get_field('settings_api_google_map', 'option')) {
        acf_update_setting('google_api_key', $api_google_map);
    }
}
add_action('acf/init', 'heartonfire_acf_init');


/**
 * Save ACF into JSON
 * @param  string
 * @return string
 */
function heartonfire_acf_json_save_folder($path)
{
    $path = get_template_directory() . '/includes/acf-json';
    return $path;
}

/**
 * Load ACF from JSON
 * @param  string
 * @return string
 */
function heartonfire_acf_json_load_folder($paths)
{
    unset($paths[0]);
    $paths[] = get_template_directory() . '/includes/acf-json';
    return $paths;
}

// If acf is installed
if (class_exists('acf')) {
    // Save ACF to jsons
    add_filter('acf/settings/save_json', 'heartonfire_acf_json_save_folder');

    // Load ACF from jsons
    add_filter('acf/settings/load_json', 'heartonfire_acf_json_load_folder');

    // Enable shortcode on wysiwyg
    add_filter('acf/format_value/type=wysiwyg', 'do_shortcode');

    // Add theme settings
    acf_add_options_page(
        array(
            'page_title'  => 'Site Settings',
            'menu_title'  => 'Site Settings',
            'menu_slug'   => 'site-settings',
            'capability'  => 'edit_posts',
            'redirect'    => false,
            'position'    => 2
        )
    );

    // Get available components fromt child themes
    $components = array();

    if (function_exists('heartonfire_acf_get_child_components')) {
        $components = heartonfire_acf_get_child_components();
    }

    // If components are empty
    if (empty($components) || count($components) <= 0) {
        $components = heartonfire_acf_get_components();
    }

    $componentFields = array();
    // Generate components
    foreach ($components as $component) {
        require locate_template('includes/components/' . $component . '.php');
        $componentFields = array_merge($componentFields, $fields);
    }
    require_once locate_template('includes/components/index.php');
}

/**
 * Get available default components
 * @return array
 */
function heartonfire_acf_get_components()
{
    // Available default components
    $components = array(
        'banner',
        'blog',
        'call-to-action',
        'contact',
        'general-content',
        'heart-on-fire',
        'image-content',
        'instagram',
        'services',
        'testimonials'
    );

    return $components;
}

/**
 * Add custom acf location rules types
 * @param  array
 * @return array
 */
function heartonfire_acf_location_rules_types($choices)
{
    $choices['Page']['visibility'] = 'Page Visibility';
    return $choices;
}
add_filter('acf/location/rule_types', 'heartonfire_acf_location_rules_types');

/**
 * Add custom acf location rules visibility
 * @param  array
 * @return array
 */
function heartonfire_acf_location_rules_values_visibility($choices)
{
    $choices['password'] = 'Password Protected';
    return $choices;
}
add_filter('acf/location/rule_values/visibility', 'heartonfire_acf_location_rules_values_visibility');

/**
 * Add custom acf location rules match visibility
 * @param  boolean
 * @param  array
 * @param  array
 * @return boolean
 */
function heartonfire_acf_location_rules_match_visibility($match, $rule, $options)
{
    global $post;
    $pw = $post->post_password;
    if (isset($pw)) {
        if (! empty($pw)) {
            $match = true;
        }
    } else {
        $match = false;
    }
    return $match;
}
add_filter('acf/location/rule_match/visibility', 'heartonfire_acf_location_rules_match_visibility', 10, 3);
