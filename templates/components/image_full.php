<?php
    // General.
    $componentId        = get_sub_field('component_image_full_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_image_full_class');
    $enableComponent    = get_sub_field('component_image_full_enable');
    $globalComponent    = get_sub_field('component_image_full_global_component');

    //Settings.
    $image              = heartonfire_get_the_field_values($globalComponent, 'image_full', 'image');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-image-full <?php echo $componentClass; ?>">
        <div class="px-3 px-lg-4 pb-3 pb-lg-4 pt-0">
            <img src="<?php echo $image; ?>" alt="<?php echo $heading; ?>" class="hof-image-full--img">
        </div>
    </section>
<?php endif; ?>
