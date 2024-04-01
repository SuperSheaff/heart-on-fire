<?php

    $primaryMenu        = heartonfire_generate_nav_menu('menu-primary');
    $socialMedia        = get_field('settings_social_media', 'options');

?>

<div class="hof-navigation d-flex flex-column">

    <?php /* Upper Navigation */ ?>
    <div class="hof-navigation__upper">
        <div class="hof-section-padding-x">
            <div class="d-flex justify-content-between">

                <?php /* Upper Nav Logo */ ?>
                <a href="<?php echo get_home_url(); ?>" class="my-auto hof-header__nav--logo">
                    <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/logo/logo--white.svg'); ?>
                </a>

                <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-close.svg'); ?>
                
            </div>
        </div>
    </div>

    <?php /* Middle Navigation */ ?>
    <div class="hof-navigation__middle my-auto">
        <div class="">
            <div class="d-flex flex-column">

                <?php foreach ($primaryMenu as $index => $item) : ?>
                    <a href="<?php echo $item['url']; ?>" class="hof-navigation__middle--link mx-lg-auto">
                        <?php echo $item['title']; ?>
                    </a>
                <?php endforeach; ?>
                
            </div>
        </div>
    </div>

    <?php /* Lower Navigation */ ?>
    <div class="hof-navigation__lower">
        <div class="container px-lg-0">
            <div class="d-flex justify-content-center">

                <?php if (! empty($socialMedia['settings_facebook'])) { ?>
                        <a href="<?php echo $socialMedia['settings_facebook']['url']; ?>" class="my-auto mx-3"
                        <?php echo ($socialMedia['settings_facebook']['target']) ? 'target="_blank"' : ''; ?>>
                        <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-facebook.svg'); ?>
                    </a>
                <?php } ?>
                <?php if (! empty($socialMedia['settings_instagram'])) { ?>
                    <a href="<?php echo $socialMedia['settings_instagram']['url']; ?>" class="my-auto mx-3"
                        <?php echo ($socialMedia['settings_instagram']['target']) ? 'target="_blank"' : ''; ?>>
                        <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-instagram.svg'); ?>
                    </a>
                <?php } ?>
                <?php if (! empty($socialMedia['settings_linkedin'])) { ?>
                    <a href="<?php echo $socialMedia['settings_linkedin']['url']; ?>" class="my-auto mx-3"
                        <?php echo ($socialMedia['settings_linkedin']['target']) ? 'target="_blank"' : ''; ?>>
                        <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-pinterest.svg'); ?>
                    </a>
                <?php } ?>
                <?php if (! empty($socialMedia['settings_twitter'])) { ?>
                    <a href="<?php echo $socialMedia['settings_twitter']['url']; ?>" class="my-auto mx-3"
                        <?php echo ($socialMedia['settings_twitter']['target']) ? 'target="_blank"' : ''; ?>>
                        <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-mail.svg'); ?>
                    </a>
                <?php } ?>

            </div>
        </div>
    </div>

</div>
