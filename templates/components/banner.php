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
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-banner hof-bg-dark-brown <?php echo $componentClass; ?>">
        <div class="hof-container">
            <div class="hof-banner--row position-relative">
                <div class="hof-banner--text-col hof-banner--height hof-color-white d-flex pb-4 pb-xl-5">
                    <div class="mt-auto hof-section-padding">
                        <?php if ($heading) : ?>
                            <h1 class="mb-4 h2">
                                <?php echo $heading; ?>
                            </h1>
                        <?php endif; ?>
                        <?php if ($subheading) : ?>
                            <h5 class="mb-4">
                                <?php echo $subheading; ?>
                            </h5>
                        <?php endif; ?>
                        <?php if ($cta) : ?>
                            <a href="<?php echo $cta['url']; ?>" class="hof-btn-white--outline" target="<?php echo $cta['target']; ?>">
                                <?php echo $cta['title']; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
