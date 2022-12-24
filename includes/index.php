<?php

/**
 * Add global component functions.
 */
require get_template_directory() . '/includes/global-components.php';

/**
 * Adds ACF.
 */

require get_template_directory() . '/includes/acf.php';

/**
 * Adds general functions
 */
require get_template_directory() . '/includes/functions.php';

/**
 * Adds page functions.
 */
require get_template_directory() . '/includes/page.php';

/**
 * Adds settings functions
 */
require get_template_directory() . '/includes/settings.php';

/**
 * Adds site settings
 */
require get_template_directory() . '/includes/site-settings.php';

/**
 * Adds Custom post type: Global Components.
 */
require get_template_directory() . '/includes/post-types/global-components.php';

/**
 * Adds extra global components post type acf field for site.
 */
require get_template_directory() . '/includes/global-components-settings-acf.php';

/**
 * Logging.
 */
require get_template_directory() . '/includes/log/index.php';
