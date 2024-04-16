<?php
    // General.
    $componentId        = get_sub_field('component_image_split_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_image_split_class');
    $enableComponent    = get_sub_field('component_image_split_enable');
    $globalComponent    = get_sub_field('component_image_split_global_component');

    //Settings.
    $imageOne           = heartonfire_get_the_field_values($globalComponent, 'image_split', 'image_one');
    $choiceOne          = heartonfire_get_the_field_values($globalComponent, 'image_split', 'choice_one');
    $imageTwo           = heartonfire_get_the_field_values($globalComponent, 'image_split', 'image_two');
    $choiceTwo          = heartonfire_get_the_field_values($globalComponent, 'image_split', 'choice_two');
 
    $imageOneClass      = '';
    $imageTwoClass      = '';
    $sectionClass       = '';

    switch ($choiceOne . ' ' . $choiceTwo) {

        case 'desktop desktop':
            $sectionClass   = 'd-none d-lg-block';
            break;

        case 'desktop both':
            $imageOneClass  = 'd-none d-lg-block';
            break;

        case 'desktop mobile':
            $imageOneClass  = 'd-none d-lg-block';
            $imageTwoClass  = 'd-lg-none';
            break;

        case 'mobile mobile':
            $sectionClass   = 'd-lg-none';
            break;
        
        case 'mobile both':
            $imageOneClass  = 'd-lg-none';
            break;

        case 'mobile desktop':
            $imageOneClass  = 'd-lg-none';
            $imageTwoClass  = 'd-none d-lg-block';
            break;

        case 'both mobile':
            $imageTwoClass  = 'd-lg-none';
            break;

        case 'both desktop':
            $imageTwoClass  = 'd-none d-lg-block';
            break;
    }
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-image-split <?php echo $componentClass; ?> <?php echo $sectionClass; ?>">
        <div class="px-3 px-lg-4 pb-3 pb-lg-4">
            <div class="d-flex flex-column flex-md-row">
                <img src="<?php echo $imageOne; ?>" class="hof-image-split--img mb-3 mb-lg-0 <?php echo $imageOneClass; ?>">
                <img src="<?php echo $imageTwo; ?>" class="hof-image-split--img <?php echo $imageTwoClass; ?>">
            </div>
        </div>
    </section>
<?php endif; ?>
