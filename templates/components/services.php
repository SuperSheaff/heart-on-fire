<?php
    // General.
    $componentId        = get_sub_field('component_services_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_services_class');
    $enableComponent    = get_sub_field('component_services_enable');
    $globalComponent    = get_sub_field('component_services_global_component');

    //Settings.
    $tagline            = heartonfire_get_the_field_values($globalComponent, 'services', 'tagline');
    $services           = heartonfire_get_the_field_values($globalComponent, 'services', 'services_repeater');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-services <?php echo $componentClass; ?>">
        <div class="hof-navigation-offset"></div>

        <div class="hof-section-padding">
            <?php if ($tagline) : ?>
                <p class="hof-tagline hof-color-brown text-center">
                    <?php echo $tagline; ?>
                </p>
            <?php endif; ?>

            <h1 class="hof-color-brown text-center mb-0">
                <?php foreach ($services as $key => $service) : ?>
                    <span class="hof-services--name" data-slide="<?php echo $key; ?>">
                        <?php echo $service['name']; ?>
                        <?php if ($key <= (count($service))) { echo ','; } ?>
                    </span>
                <?php endforeach; ?>
            </h1>
        </div>

        <div class="owl-carousel hof-services-carousel">

            <?php foreach ($services as $key => $service) :
                $serviceName        = $service['name'];
                $serviceTitle       = $service['title'];
                $serviceContent     = $service['content'];
                $serviceImage       = $service['image'];
                $serviceCTA         = $service['cta'];
                ?>
                <div class="hof-services-carousel--item hof-color-white hof-bg-dark-green">

                    <div class="row">

                        <div class="mb-4 mb-xl-0 col-md-6">
                            <div class="p-3 p-lg-4 p-xl-5">
                                <p class="hof-tagline">
                                    <?php echo $serviceName; ?>
                                </p>
                                <h3 class="mb-0">
                                    <?php echo $serviceTitle; ?>
                                </h3>
                                <?php echo $serviceContent; ?>
                                <a href="<?php echo $serviceCTA['url']; ?>" class="hof-btn-white--outline mt-4" target="<?php echo $serviceCTA['target']; ?>">
                                    <?php echo $serviceCTA['title']; ?>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-5 offset-md-1 position-relative">
                            <img src="<?php echo $serviceImage; ?>" alt="<?php echo $serviceName; ?>" class="hof-services-carousel--img">
                        </div>
                    </div>  
                    
                </div>
            <?php endforeach; ?>

        </div>

        <div class="pb-3 pb-xl-4"></div>
    </section>
<?php endif; ?>
