<?php
    // General.
    $componentId        = get_sub_field('component_heart_on_fire_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_heart_on_fire_class');
    $enableComponent    = get_sub_field('component_heart_on_fire_enable');
    $globalComponent    = get_sub_field('component_heart_on_fire_global_component');

    //Settings.
    $heading            = heartonfire_get_the_field_values($globalComponent, 'heart_on_fire', 'heading');
    $content            = heartonfire_get_the_field_values($globalComponent, 'heart_on_fire', 'content');
    $image              = heartonfire_get_the_field_values($globalComponent, 'heart_on_fire', 'image');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-heart-on-fire <?php echo $componentClass; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 my-auto hof-color-dark-green">
                    <?php if ($heading) : ?>
                        <h2 class="hof-heart-on-fire__heading h1">
                            <?php echo $heading; ?>
                        </h2>
                    <?php endif; ?>
                    <div class="hof-heart-on-fire__content">
                        <?php if ($content) : ?>
                            <?php echo $content; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-4 my-auto">
                    <img src="<?php echo $image; ?>" alt="<?php echo $heading; ?>" class="hof-heart-on-fire--image w-100">
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
