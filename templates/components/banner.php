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
    $image              = heartonfire_get_the_field_values($globalComponent, 'banner', 'image');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-banner py-0 <?php echo $componentClass; ?>">
        <div class="hof-banner--height">

            <div class="container hof-color-dark-green mb-auto my-lg-auto">
                <?php if ($heading) : ?>
                    <h1>
                        <?php echo $heading; ?>
                    </h1>
                <?php endif; ?>
                <?php if ($subheading) : ?>
                    <h2 class="mb-4">
                        <?php echo $subheading; ?>
                    </h2>
                <?php endif; ?>
                <?php if ($cta) : ?>
                    <a href="<?php echo $cta['url']; ?>" class="hof-btn-dark-green--outline" target="<?php echo $cta['target']; ?>">
                        <?php echo $cta['title']; ?>
                    </a>
                <?php endif; ?>
            </div>

            <?php if ($image) : ?>
                <img src="<?php echo $image; ?>" alt="Hero Image" class="hof-banner--image">
            <?php endif; ?>
            
        </div>
    </section>
<?php endif; ?>
