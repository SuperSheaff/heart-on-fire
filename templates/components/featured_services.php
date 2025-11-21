<?php
    // General.
    $componentId        = get_sub_field('component_featured_services_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_featured_services_class');
    $enableComponent    = get_sub_field('component_featured_services_enable');
    $globalComponent    = get_sub_field('component_featured_services_global_component');

    // Settings.
    $tagline            = heartonfire_get_the_field_values($globalComponent, 'featured_services', 'tagline');
    $services           = heartonfire_get_the_field_values($globalComponent, 'featured_services', 'services_repeater');

?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-featured-services hof-bg-blue <?php echo $componentClass; ?>">
        <div class="hof-container">
            <div class="hof-section-padding">

                <?php if ($tagline) : ?>
                    <p class="hof-tagline hof-color-brown text-right mb-5 pb-5">
                        <?php echo $tagline; ?>
                    </p>
                <?php endif; ?>

                <div>
                    <?php foreach ($services as $key => $service) : ?>
                        <h3 class="hof-featured-services--name h1 mb-0">
                            <?php echo $service['name']; ?>
                        </h3>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
