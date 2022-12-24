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
    <section id="<?php echo $componentId; ?>" class="hof-testimonials <?php echo $componentClass; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-lg-auto hof-color-dark-green">

                    <?php if ($heading) : ?>
                        <h2 class="hof-testimonials--heading text-center h1">
                            <?php echo $heading; ?>
                        </h2>
                    <?php endif; ?>

                    <div class="owl-carousel hof-testimonial-carousel">
                        <?php foreach ($testimonials as $key => $testimonial) :
                            $testimonialContent = $testimonial['content'];
                            $testimonialName    = $testimonial['name'];
                            $testimonialRole    = $testimonial['role'];
                            ?>

                            <div class="hof-testimonial-carousel--item">    
                                <div class="hof-testimonial-carousel--content"><?php echo $testimonialContent; ?></div>
                                <div class="hof-testimonial-carousel--name"><?php echo $testimonialName; ?></div>
                                <div class="hof-testimonial-carousel--role"><?php echo $testimonialRole; ?></div>
                            </div>

                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
