<?php
    // General.
    $componentId        = get_sub_field('component_image_split_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_image_split_class');
    $enableComponent    = get_sub_field('component_image_split_enable');
    $globalComponent    = get_sub_field('component_image_split_global_component');

    //Settings.
    $imageOne           = heartonfire_get_the_field_values($globalComponent, 'image_split', 'image_one');
    $imageTwo           = heartonfire_get_the_field_values($globalComponent, 'image_split', 'image_two');
 
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-image-split <?php echo $componentClass; ?>">
        <div class="px-3 px-lg-4 pb-3 pb-lg-4">
            <div class="d-flex flex-column flex-lg-row">
                <img src="<?php echo $imageOne; ?>" class="hof-image-split--img mb-3 mb-lg-0">
                <img src="<?php echo $imageTwo; ?>" class="hof-image-split--img">
            </div>
        </div>
    </section>
<?php endif; ?>
