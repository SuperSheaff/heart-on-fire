<?php
    // General.
    $componentId        = get_sub_field('component_icon_content_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_icon_content_class');
    $enableComponent    = get_sub_field('component_icon_content_enable');
    $globalComponent    = get_sub_field('component_icon_content_global_component');

    //Settings.
    $icons              = heartonfire_get_the_field_values($globalComponent, 'icon_content', 'icon_content_repeater');
    $bgColor            = heartonfire_get_the_field_values($globalComponent, 'icon_content', 'background_color');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-icon-content <?php echo $bgColor; ?> <?php echo $componentClass; ?>">
        <div class="container">
            <div class="row">
                <?php foreach ($icons as $key => $icon) :
                    $iconImage      = $icon['image'];
                    $iconTitle      = $icon['title'];
                    $iconContent    = $icon['content'];
                    ?>
                    <div class="col-md-6 col-lg-4 mb-3 d-flex flex-column text-center">    
                        <img src="<?php echo $image; ?>" alt="<?php echo $iconTitle; ?>" class="mx-auto mb-3">
                        <h3 class="mx-auto mb-3"><?php echo $iconTitle; ?></h3>
                        <div class="hof-icon-content--content mx-auto">
                            <?php echo $iconContent; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
