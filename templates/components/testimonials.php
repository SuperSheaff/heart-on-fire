<?php
    // General.
    $componentId        = get_sub_field('component_testimonials_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_testimonials_class');
    $enableComponent    = get_sub_field('component_testimonials_enable');
    $globalComponent    = get_sub_field('component_testimonials_global_component');

    //Settings.
    $heading            = heartonfire_get_the_field_values($globalComponent, 'testimonials', 'heading');
    $testimonials       = heartonfire_get_the_field_values($globalComponent, 'testimonials', 'testimonials_repeater');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-testimonials hof-color-dark-green <?php echo $componentClass; ?>">
        <div class="container">
            <?php if ($heading) : ?>
                <h2 class="hof-testimonials--heading text-left h1">
                    <?php echo $heading; ?>
                </h2>
            <?php endif; ?>

            <div class="owl-carousel hof-testimonial-carousel">
                <?php foreach ($testimonials as $key => $testimonial) :
                    $testimonialImage   = $testimonial['image'];
                    $testimonialContent = $testimonial['content'];
                    $testimonialName    = $testimonial['name'];
                    $testimonialRole    = $testimonial['role'];
                    ?>

                    <div class="hof-testimonial-carousel--item">
                        <div class="row">
                            <div class="col-lg-3 offset-lg-1 mb-3 mb-lg-0 order-lg-2">
                                <img src="<?php echo $testimonialImage; ?>" alt="<?php echo $testimonialName; ?>" class="img-fluid">
                            </div>
                            <div class="col-lg-7 order-lg-1 text-left">
                                <div class="hof-testimonial-carousel--name"><?php echo $testimonialName; ?></div>
                                <div class="hof-testimonial-carousel--role mb-3">
                                    <em><?php echo $testimonialRole; ?></em>
                                </div>
                                <div class="hof-testimonial-carousel--content"><?php echo $testimonialContent; ?></div>
                            </div>
                        </div>  
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
