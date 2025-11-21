<?php
    // General.
    $componentId        = get_sub_field('component_about_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_about_class');
    $enableComponent    = get_sub_field('component_about_enable');
    $globalComponent    = get_sub_field('component_about_global_component');

    //Settings.
    $heading            = heartonfire_get_the_field_values($globalComponent, 'about', 'heading');
    $content            = heartonfire_get_the_field_values($globalComponent, 'about', 'content');
    $cta                = heartonfire_get_the_field_values($globalComponent, 'about', 'cta');
    $image              = heartonfire_get_the_field_values($globalComponent, 'about', 'image');
 
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-about <?php echo $componentClass; ?>">
        <div class="hof-navigation-offset"></div>
        <div class="hof-container">
            <div class="hof-section-padding">
                <div class="row">
                    <div class="col-12 col-md-5 col-xl-4">
                        <div class="hof-navigation-offset"></div>
                        <div class="d-none d-lg-block hof-navigation-offset"></div>
                        <img src="<?php echo $image; ?>" alt="<?php echo $heading; ?>" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-6 col-xl-6 offset-md-1 offset-xl-2 text-center text-md-left d-flex flex-column">

                        <?php if ($heading) : ?>
                            <h3 class="h1 hof-color-brown">
                                <?php echo $heading; ?>
                            </h3>
                        <?php endif; ?>

                        <?php if ($content) : ?>
                            <?php echo $content; ?>
                        <?php endif; ?>

                        <?php if ($cta) : ?>
                            <a href="<?php echo $cta['url']; ?>" class="hof-btn-brown--outline mt-auto mr-auto" target="<?php echo $cta['target']; ?>">
                                <?php echo $cta['title']; ?>
                            </a>
                        <?php endif; ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
