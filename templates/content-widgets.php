<?php
/**
 * Displays the sidebar widget area
 *
 * @package WordPress
 * @subpackage HeartOnFire
 * @since HeartOnFire 1.0.0
 */

if (is_active_sidebar('sidebar-1')) : ?>
    <aside class="widget-area hof-sidebar__widget-area" role="complementary"
    aria-label="<?php esc_attr_e('Sidebar', 'heartonfire'); ?>">
        <?php
        if (is_active_sidebar('sidebar-1')) {
            dynamic_sidebar('sidebar-1');
        }
        ?>
    </aside><!-- .widget-area -->

<?php endif; ?>
