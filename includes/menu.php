<?php

    $mainLogoUrl        = get_field('settings_logo', 'options')['settings_logo_primary'] ?: get_stylesheet_directory_uri() . '/assets/src/image/logo/logo.png';
    $mobileLogoUrl      = get_stylesheet_directory_uri() . '/assets/src/image/icon/call-gray.svg';
    $menuCloseIconUrl   = get_stylesheet_directory_uri() . '/assets/dist/img/nav-close-icon.svg';
    $contactNumber      = ! empty(get_field('settings_contact', 'options')['settings_contact_number']) ? get_field('settings_contact', 'options')['settings_contact_number'] : '';
    $primaryMenu        = heartonfire_generate_nav_menu('menu-primary');

?>

<nav class="hof-nav">

    <?php /* Upper Nav */ ?>
    <div class="hof-nav__upper hof-bg-light-gray">
        <div class="container px-lg-0">
            <div class="d-flex justify-content-between">

                <?php /* Upper Nav Logo */ ?>
                <a href="<?php echo get_home_url(); ?>" class="my-auto hof-header__nav--logo">
                    <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/logo/logo.svg'); ?>
                </a>

                <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-burger.svg'); ?>
                
            </div>
        </div>
    </div>
</nav>
