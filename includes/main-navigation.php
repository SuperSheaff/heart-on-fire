<?php

    $primaryMenu        = heartonfire_generate_nav_menu('menu-primary');

?>

<nav class="hof-main-navigation">
    <div class="hof-container">
        <div class="hof-section-padding-x">
            <div class="d-flex justify-content-between">

                <?php /* Main Navigation Logo */ ?>
                <a href="<?php echo get_home_url(); ?>" class="my-auto hof-main-navigation--logo">
                    <?php 
                        if (is_front_page() || is_page('contact') || is_404()) {
                            echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/logo/logo--white.svg');
                        } else {
                            echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/logo/logo.svg');
                        }
                    ?>
                </a>

                <?php /* Main Navigation Links (Desktop Only) */ ?>
                <div class="d-none d-xl-flex my-auto">
                    <?php foreach ($primaryMenu as $index => $item) : ?>
                        <a href="<?php echo $item['url']; ?>" class="hof-main-navigation--link <?php if (is_page('contact') || is_404()) { echo 'white'; } ?>">
                            <?php echo $item['title']; ?>
                        </a>
                    <?php endforeach; ?>
                </div>

                <?php /* Main Navigation Burger (Mobile Only) */ ?>
                <div class="hof-main-navigation--burger <?php if (is_front_page() || is_page('contact') || is_404()) { echo 'white'; } ?>">
                    <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-burger.svg'); ?>
                </div>

            </div>
        </div>
    </div>
</nav>
