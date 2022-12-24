<?php
    // General.
    $componentId        = get_sub_field('component_services_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_services_class');
    $enableComponent    = get_sub_field('component_services_enable');
    $globalComponent    = get_sub_field('component_services_global_component');

    //Settings.
    $heading            = heartonfire_get_the_field_values($globalComponent, 'services', 'heading');
    $content            = heartonfire_get_the_field_values($globalComponent, 'services', 'content');
    $services           = heartonfire_get_the_field_values($globalComponent, 'services', 'services_repeater');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-services <?php echo $componentClass; ?>">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 hof-color-dark-green">

                    <?php if ($heading) : ?>
                        <h1 class="hof-services--heading">
                            <?php echo $heading; ?>
                        </h1>
                    <?php endif; ?>

                    <?php if ($content) : ?>
                        <div class="hof-services--content">
                            <?php echo $content; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="hof-services <?php echo $componentClass; ?> hof-bg-dark-green">
        <div class="container">
            <div class="row">

                <?php foreach ($services as $key => $service) :
                    $serviceName    = $service['name'];
                    $serviceContent = $service['content'];
                    ?>

                    <div class="col-lg-5 <?php if ($key % 2 != 0) { echo 'offset-lg-2'; } ?> hof-services--service">    
                        <div class="hof-services--service-name"><?php echo $serviceName; ?></div>
                        <div class="hof-services--service-content"><?php echo $serviceContent; ?></div>
                    </div>

                <?php endforeach; ?>
            </div>

        </div>
    </section>
<?php endif; ?>
