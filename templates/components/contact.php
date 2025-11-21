<?php
    // General.
    $componentId        = get_sub_field('component_contact_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_contact_class');
    $enableComponent    = get_sub_field('component_contact_enable');
    $globalComponent    = get_sub_field('component_contact_global_component');

    //Settings.
    $heading            = heartonfire_get_the_field_values($globalComponent, 'contact', 'heading');
    $content            = heartonfire_get_the_field_values($globalComponent, 'contact', 'content');
    $shortcode          = heartonfire_get_the_field_values($globalComponent, 'contact', 'shortcode');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-contact 
        <?php 
            if (is_page('contact')) {
                echo 'hof-bg-dark-brown ';
            } else {
                echo 'hof-bg-blue' ;
            }
        ?>
        <?php echo $componentClass; ?>">
        <?php 
            if (is_page('contact')) {
        ?>
        <div class="hof-navigation-offset"></div>
        <?php 
            }
        ?>
        <div class="hof-container">
            <div class="p-3 p-xl-4">
                <div class="p-3 p-xl-4">
                    <div class="row">

                        <div class="col-md-6 <?php 
                                if (is_page('contact')) {
                                    echo 'hof-color-white ';
                                } else {
                                    echo 'hof-color-brown' ;
                                }
                            ?>">
                            <div class="hof-tagline  mb-3">
                                [Get in touch]
                            </div>
                            <?php if ($heading) : ?>
                                <h1 class="hof-contact__heading">
                                    <?php echo $heading; ?>
                                </h1>
                            <?php endif; ?>

                            <div class="hof-contact__content mb-3 mb-xl-4">
                                <?php if ($content) : ?>
                                    <?php echo $content; ?>
                                <?php endif; ?>
                            </div>

                            <div class="hof-tagline  mb-0">General Enquiries</div>
                            <a href="mailto:hello@byablo.com.au" class="<?php 
                                if (is_page('contact')) {
                                    echo 'hof-color-white ';
                                } else {
                                    echo 'hof-color-brown' ;
                                }
                            ?>">hello@byablo.com.au</a>
                            <p class="">0407 853 635</p>

                            <div class="hof-tagline  mb-0">Client Application</div>
                            <p class="">Please fill out the questionnaire</p>

                            <div class="hof-tagline  mb-0">Location</div>
                            <p class="">Brisbane, Queensland</p>
                        </div>

                        <div class="col-md-6 col-xl-5 offset-xl-1 <?php 
                                if (!is_page('contact')) {
                                    echo 'hof-form-light ';
                                }
                            ?>">
                            <?php echo do_shortcode($shortcode); ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
