<?php
    // General.
    $componentId        = get_sub_field('component_testimonials_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_testimonials_class');
    $enableComponent    = get_sub_field('component_testimonials_enable');
    $globalComponent    = get_sub_field('component_testimonials_global_component');

    //Settings.
    $tagline            = heartonfire_get_the_field_values($globalComponent, 'testimonials', 'tagline');
    $testimonials       = heartonfire_get_the_field_values($globalComponent, 'testimonials', 'testimonials_repeater');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-testimonials <?php echo $componentClass; ?>">
        <div class="hof-section-padding">
            <div class="owl-carousel hof-testimonial-carousel">
                <?php foreach ($testimonials as $key => $testimonial) :
                    $testimonialBigText     = $testimonial['big_text'];
                    $testimonialSmallText   = $testimonial['small_text'];
                    $testimonialName        = $testimonial['name'];
                    $testimonialCompany     = $testimonial['company'];
                    ?>
                    <div class="hof-testimonial-carousel--item p-4 hof-color-brown hof-bg-white">
                        <div class="row">
                            <div class="mb-4 mb-xl-0 col-xl-8">
                                <?php if ($tagline) : ?>
                                    <p class="hof-tagline">
                                        <?php echo $tagline; ?>
                                    </p>
                                <?php endif; ?>
                                <h2 class="h1 mb-0">
                                    <?php echo $testimonialBigText; ?>
                                </h2>
                            </div>
                            <div class="col-lg-4 col-xl-3 offset-xl-1 mt-xl-auto">
                                <p><?php echo $testimonialSmallText; ?></p>
                                <strong class="mb-0"><?php echo $testimonialName; ?></strong>
                                <p class="mb-0"><?php echo $testimonialCompany; ?></p>
                            </div>
                        </div>  
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
