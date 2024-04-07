<?php
    // General.
    $componentId        = get_sub_field('component_values_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_values_class');
    $enableComponent    = get_sub_field('component_values_enable');
    $globalComponent    = get_sub_field('component_values_global_component');

    //Settings.
    $heading            = heartonfire_get_the_field_values($globalComponent, 'values', 'heading');
    $icons              = heartonfire_get_the_field_values($globalComponent, 'values', 'values_repeater');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-values <?php echo $componentClass; ?>">
        <div class="hof-section-padding">

            <div class="row">
                <div class="col-12 col-lg-6">
                    <?php if ($heading) : ?>
                        <h2 class="hof-color-brown text-center text-lg-left">
                            <?php echo $heading; ?>
                        </h2>
                    <?php endif; ?>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="row">
                        <?php foreach ($icons as $key => $icon) :
                            $iconImage      = $icon['image'];
                            $iconTitle      = $icon['title'];
                            $iconContent    = $icon['content'];
                            ?>
                            <div class="col-lg-6 mx-auto mb-3 d-flex flex-column text-center text-lg-left">    
                                <img src="<?php echo $iconImage; ?>" alt="<?php echo $iconTitle; ?>" class="hof-values--icon mx-auto ml-md-0 mb-3">
                                <h5 class="hof-color-brown mb-3 mb-xl-4"><?php echo $iconTitle; ?></h5>
                                <div class="hof-values--content hof-color-brown">
                                    <?php echo $iconContent; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php endif; ?>
