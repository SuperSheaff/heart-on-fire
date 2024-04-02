<?php
    // General.
    $componentId        = get_sub_field('component_featured_services_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_featured_services_class');
    $enableComponent    = get_sub_field('component_featured_services_enable');
    $globalComponent    = get_sub_field('component_featured_services_global_component');

    // Settings.
    $tagline            = heartonfire_get_the_field_values($globalComponent, 'featured_services', 'tagline');

    // Links.
    $firstLink          = heartonfire_get_the_field_values($globalComponent, 'featured_services', 'first_link');
    $secondLink         = heartonfire_get_the_field_values($globalComponent, 'featured_services', 'second_link');
    $thirdLink          = heartonfire_get_the_field_values($globalComponent, 'featured_services', 'third_link');
    $fourthLink         = heartonfire_get_the_field_values($globalComponent, 'featured_services', 'fourth_link');

    // Images.
    $firstImage          = heartonfire_get_the_field_values($globalComponent, 'featured_services', 'first_image');
    $secondImage         = heartonfire_get_the_field_values($globalComponent, 'featured_services', 'second_image');
    $thirdImage          = heartonfire_get_the_field_values($globalComponent, 'featured_services', 'third_image');
    $fourthImage         = heartonfire_get_the_field_values($globalComponent, 'featured_services', 'fourth_image');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-featured-services <?php echo $componentClass; ?>">

        <div class="hof-section-padding">

            <?php if ($tagline) : ?>
                <p class="hof-tagline hof-color-brown text-center">
                    <?php echo $tagline; ?>
                </p>
            <?php endif; ?>

            <div class="row">

                <?php if ($firstLink) : ?>
                    <div class="col-12 col-md-4">
                        <a href="<?php echo $firstLink['url']; ?>" class="" target="<?php echo $firstLink['target']; ?>">
                            <div class="hof-featured-services__box">
                                <div class="hof-featured-services__box--title">
                                    <?php echo $firstLink['title']; ?>
                                </div>
                                <img class="hof-featured-services__box--img" src="<?php echo $firstImage; ?>" alt="<?php echo $firstLink['title']; ?>">
                            </div>
                        </a>
                    </div>
                <?php endif; ?>

                <?php if ($secondLink) : ?>
                    <div class="col-12 col-md-4">
                        <a href="<?php echo $secondLink['url']; ?>" class="" target="<?php echo $secondLink['target']; ?>">
                            <div class="hof-featured-services__box">
                                <div class="hof-featured-services__box--title">
                                    <?php echo $secondLink['title']; ?>
                                </div>
                                <img class="hof-featured-services__box--img" src="<?php echo $secondImage; ?>" alt="<?php echo $secondLink['title']; ?>">
                            </div>
                        </a>
                    </div>
                <?php endif; ?>

                <?php if ($thirdLink) : ?>
                    <div class="col-12 col-md-4">
                        <a href="<?php echo $thirdLink['url']; ?>" class="" target="<?php echo $thirdLink['target']; ?>">
                            <div class="hof-featured-services__box">
                                <div class="hof-featured-services__box--title">
                                    <?php echo $thirdLink['title']; ?>
                                </div>
                                <img class="hof-featured-services__box--img" src="<?php echo $thirdImage; ?>" alt="<?php echo $thirdLink['title']; ?>">
                            </div>
                        </a>
                    </div>
                <?php endif; ?>

            </div>

        </div>
    </section>
<?php endif; ?>
