<?php
    // General.
    $componentId        = get_sub_field('component_banner_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_banner_class');
    $enableComponent    = get_sub_field('component_banner_enable');
    $globalComponent    = get_sub_field('component_banner_global_component');

    //Settings.
    $heading            = heartonfire_get_the_field_values($globalComponent, 'banner', 'heading');
    $subheading         = heartonfire_get_the_field_values($globalComponent, 'banner', 'subheading');
    $cta                = heartonfire_get_the_field_values($globalComponent, 'banner', 'cta');
    $imageDesktop       = heartonfire_get_the_field_values($globalComponent, 'banner', 'image_desktop');
    $imageMobile        = heartonfire_get_the_field_values($globalComponent, 'banner', 'image_mobile');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-banner <?php echo $componentClass; ?>">
        <div class="hof-banner--row position-relative">

            <div class="hof-banner--img-col px-0">
                <?php if ($imageDesktop) : ?>
                    <img src="<?php echo $imageDesktop; ?>" alt="Hero Image - Desktop" class="hof-banner--image-desktop">
                <?php endif; ?>

                <?php if ($imageMobile) : ?>
                    <img src="<?php echo $imageMobile; ?>" alt="Hero Image - Mobile" class="hof-banner--image-mobile">
                <?php endif; ?>

            </div>

            <div class="hof-banner--text-col col-xl-6 offset-xl-1 hof-color-brown my-xl-auto">
                <?php if ($heading) : ?>
                    <h1 class="mb-4">
                        <?php echo $heading; ?>
                    </h1>
                <?php endif; ?>
                <?php if ($subheading) : ?>
                    <h5 class="mb-4">
                        <?php echo $subheading; ?>
                    </h5>
                <?php endif; ?>
                <?php if ($cta) : ?>
                    <a href="<?php echo $cta['url']; ?>" class="hof-btn-brown--outline" target="<?php echo $cta['target']; ?>">
                        <?php echo $cta['title']; ?>
                    </a>
                <?php endif; ?>
            </div>
            
        </div>
    </section>
<?php endif; ?>
