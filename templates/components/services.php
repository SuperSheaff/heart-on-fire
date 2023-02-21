<?php
    // General.
    $componentId        = get_sub_field('component_services_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_services_class');
    $enableComponent    = get_sub_field('component_services_enable');
    $globalComponent    = get_sub_field('component_services_global_component');

    //Settings.
    $heading            = heartonfire_get_the_field_values($globalComponent, 'services', 'heading');
    $content            = heartonfire_get_the_field_values($globalComponent, 'services', 'content');
    $layout             = heartonfire_get_the_field_values($globalComponent, 'services', 'layout');
    $image              = heartonfire_get_the_field_values($globalComponent, 'services', 'image');
    $cta                = heartonfire_get_the_field_values($globalComponent, 'services', 'cta');
    $bgColor            = heartonfire_get_the_field_values($globalComponent, 'services', 'background_color');
    $services           = heartonfire_get_the_field_values($globalComponent, 'services', 'services_repeater');

    $imageColumnClass   = '';
    $contentColumnClass = '';

    switch ($layout) {
        case 'image-left':
            $imageColumnClass   = 'order-lg-1';
            $contentColumnClass = 'order-lg-2 offset-lg-1';
            break;

        case 'image-right':
            $imageColumnClass   = 'order-lg-2 offset-lg-1';
            $contentColumnClass = 'order-lg-1';
            break;
    }
?>

<?php if ($enableComponent): ?>
    
    <section id="<?php echo $componentId; ?>" class="hof-services hof-color-dark-green <?php echo $bgColor; ?> <?php echo $componentClass; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 <?php echo $imageColumnClass; ?> mb-4 mb-lg-0">
                    <img src="<?php echo $image; ?>" alt="<?php echo $heading; ?>" class="hof-services--image">
                </div>
                <div class="col-lg-6 <?php echo $contentColumnClass; ?> my-auto">
                    <div class="hof-services__content">
                        <?php if ($heading) : ?>
                            <h2 class="hof-services--heading">
                                <?php echo $heading; ?>
                            </h2>
                        <?php endif; ?>
                        <div class="mb-3 mb-lg-4">
                            <?php if ($content) : ?>
                                <?php echo $content; ?>
                            <?php endif; ?>
                        </div>
                        <div class="row">
                            <?php foreach ($services as $key => $service) :
                                $serviceName    = $service['name'];
                                $serviceContent = $service['content'];
                                ?>
                                <div class="col-lg-6 mb-3">    
                                    <p>
                                        <strong class="hof-services--service-name"><?php echo $serviceName; ?>: </strong>
                                        <?php echo $serviceContent; ?>
                                    </p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php if ($cta) : ?>
                            <a href="<?php echo $cta['url']; ?>" class="hof-btn-dark-green mt-4" target="<?php echo $cta['target']; ?>">
                                <?php echo $cta['title']; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
