<?php

/**
 * Custom post type for Global Components
 */
function custom_global_components_post_type() {
    // Set UI labels for Global Components Type
    $labels = array(
        'name'                => _x('Components', 'Post Type General Name', 'heartonfire'),
        'singular_name'       => _x('Component', 'Post Type Singular Name', 'heartonfire'),
        'menu_name'           => __('Components', 'heartonfire'),
        'parent_item_colon'   => __('Parent Component', 'heartonfire'),
        'all_items'           => __('All Components', 'heartonfire'),
        'view_item'           => __('View Component', 'heartonfire'),
        'add_new_item'        => __('Add New Component', 'heartonfire'),
        'add_new'             => __('Add New', 'heartonfire'),
        'edit_item'           => __('Edit Component', 'heartonfire'),
        'update_item'         => __('Update Component', 'heartonfire'),
        'search_items'        => __('Search Component', 'heartonfire'),
        'not_found'           => __('Not Found', 'heartonfire'),
        'not_found_in_trash'  => __('Not found in Trash', 'heartonfire'),
    );

    // Set other options for Global Component type
    $args = array(
        'label'               => __('global-component', 'heartonfire'),
        'description'         => __('Global Component', 'heartonfire'),
        'labels'              => $labels,
        'supports'            => array('title'),
        'hierarchical'        => false,
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => false,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'publicly_queryable'  => false,
        'capability_type'     => 'post',
        'rewrite'             => false
    );

    register_post_type('global-component', $args);
}

/**
 * Add new column for global component
 * @param array
 * @return array
 */
function heartonfire_set_custom_column_global_component($columns)
{
    // set date column to last
    $date = $columns['date'];
    unset($columns['date']);

    // create new column
    $columns['component'] = __('Component', 'heartonfire');

    // set date back
    $columns['date'] = $date;
    return $columns;
}
add_filter('manage_global-component_posts_columns', 'heartonfire_set_custom_column_global_component');

/**
 * Set value for column
 * @param string
 * @param int
 * @return void
 */
function heartonfire_set_custom_column_global_component_value($column, $post_id)
{
    switch ($column) {
        case 'component' :
            echo get_field('select_global_component', $post_id);
            break;
    }
}
add_action('manage_global-component_posts_custom_column' , 'heartonfire_set_custom_column_global_component_value', 10, 2);

/**
 * Set sortable
 * @param array
 * @return array
 */
function heartonfire_set_custom_column_global_component_sortable($columns)
{
    $columns['component'] = 'component';
    return $columns;
}
add_filter('manage_edit-global-component_sortable_columns', 'heartonfire_set_custom_column_global_component_sortable');

/**
 * Sort column
 * @param object
 * @return void
 */
function heartonfire_sort_custom_global_component_query($query)
{
    $postType   = $query->get('post_type');
    $orderby    = $query->get('orderby');

    if ($postType == 'global-component' && $orderby == 'component') {
        $meta_query = array(
            'relation' => 'OR',
            array(
                'key' => 'select_global_component',
                'compare' => 'NOT EXISTS', // see note above
            ),
            array(
                'key' => 'select_global_component',
            ),
        );
        $query->set('meta_query', $meta_query);
        $query->set('orderby', 'meta_value');
    }
}
add_action('pre_get_posts', 'heartonfire_sort_custom_global_component_query');
