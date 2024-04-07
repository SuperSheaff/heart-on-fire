<?php
    // General.
    $componentId        = get_sub_field('component_icon_content_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_icon_content_class');
    $enableComponent    = get_sub_field('component_icon_content_enable');
    $globalComponent    = get_sub_field('component_icon_content_global_component');

    //Settings.
    $tagline            = heartonfire_get_the_field_values($globalComponent, 'icon_content', 'tagline');
    $icons              = heartonfire_get_the_field_values($globalComponent, 'icon_content', 'icon_content_repeater');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-icon-content <?php echo $componentClass; ?>">
        <div class="hof-section-padding">

            <?php if ($tagline) : ?>
                <p class="hof-tagline hof-color-brown text-center">
                    <?php echo $tagline; ?>
                </p>
            <?php endif; ?>

            <div class="row">
                <?php foreach ($icons as $key => $icon) :
                    $iconImage      = $icon['image'];
                    $iconTitle      = $icon['title'];
                    $iconContent    = $icon['content'];
                    ?>
                    <div class="col-md-6 col-lg-4 col-xl-3 mx-auto mb-3 d-flex flex-column text-center text-md-left">    
                        <img src="<?php echo $iconImage; ?>" alt="<?php echo $iconTitle; ?>" class="hof-icon-content--icon mx-auto ml-md-0 mb-3">
                        <h5 class="hof-color-brown mb-3 mb-xl-4"><?php echo $iconTitle; ?></h5>
                        <div class="hof-icon-content--content hof-color-brown">
                            <?php echo $iconContent; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
