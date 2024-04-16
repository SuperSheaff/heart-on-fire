<?php

    $primaryMenu        = heartonfire_generate_nav_menu('menu-primary');
    $socialMedia        = get_field('settings_social_media', 'options');

?>

<div class="hof-mobile-navigation">

    <?php /* Mobile Navigation - Upper*/ ?>
    <div class="hof-main-navigation hof-bg-brown">
        <div class="hof-container">
            <div class="hof-section-padding-x">
                <div class="d-flex justify-content-between">

                    <?php /* Mobile Navigation Logo */ ?>
                    <a href="<?php echo get_home_url(); ?>" class="my-auto hof-main-navigation--logo">
                        <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/logo/logo--white.svg'); ?>
                    </a>
                    
                    <?php /* Mobile Navigation Close */ ?>
                    <div class="hof-main-navigation--close <?php if (is_front_page() || is_page('contact')) { echo 'white'; } ?>">
                        <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-close.svg'); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php /* Mobile Navigation - Middle */ ?>
    <div class="hof-mobile-navigation__middle my-auto">
        <div class="hof-container">
            <div class="hof-section-padding-x d-flex flex-column">

                <?php foreach ($primaryMenu as $index => $item) : ?>
                    <a href="<?php echo $item['url']; ?>" class="hof-mobile-navigation__middle--link mx-lg-auto">
                        <?php echo $item['title']; ?>
                    </a>
                <?php endforeach; ?>
                
            </div>
        </div>
    </div>

    <?php /* Mobile Navigation - Lower */ ?>
    <div class="hof-mobile-navigation__lower hof-bg-brown">
        <div class="hof-container">
            <div class="hof-section-padding d-flex justify-content-around">
                        
                <?php if (! empty($socialMedia['settings_instagram'])) { ?>
                    <a href="<?php echo $socialMedia['settings_instagram']['url']; ?>" class=""
                        <?php echo ($socialMedia['settings_instagram']['target']) ? 'target="_blank"' : ''; ?>>
                        <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-instagram.svg'); ?>
                    </a>
                <?php } ?>
                <?php if (! empty($socialMedia['settings_facebook'])) { ?>
                    <a href="<?php echo $socialMedia['settings_facebook']['url']; ?>" class=""
                        <?php echo ($socialMedia['settings_facebook']['target']) ? 'target="_blank"' : ''; ?>>
                        <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-facebook.svg'); ?>
                    </a>
                <?php } ?>
                <?php if (! empty($socialMedia['settings_tiktok'])) { ?>
                    <a href="<?php echo $socialMedia['settings_tiktok']['url']; ?>" class=""
                        <?php echo ($socialMedia['settings_tiktok']['target']) ? 'target="_blank"' : ''; ?>>
                        <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-tiktok.svg'); ?>
                    </a>
                <?php } ?>
                <?php if (! empty($socialMedia['settings_linkedin'])) { ?>
                    <a href="<?php echo $socialMedia['settings_linkedin']['url']; ?>" class=""
                        <?php echo ($socialMedia['settings_linkedin']['target']) ? 'target="_blank"' : ''; ?>>
                        <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-linkedin.svg'); ?>
                    </a>
                <?php } ?>

            </div>
        </div>
        
    </div>
</div>
