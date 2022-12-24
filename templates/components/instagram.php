<?php
    // General.
    $componentId        = get_sub_field('component_instagram_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_instagram_class');
    $enableComponent    = get_sub_field('component_cta_enable');
    $globalComponent    = get_sub_field('component_instagram_global_component');

    //Settings.
    $heading            = heartonfire_get_the_field_values($globalComponent, 'instagram', 'heading');
    $content            = heartonfire_get_the_field_values($globalComponent, 'instagram', 'content');
    $primaryCta         = heartonfire_get_the_field_values($globalComponent, 'instagram', 'primary_cta');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-instagram text-center <?php echo $componentClass; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="d-flex justify-content-center mb-4">
                        <?php if ($heading) : ?>
                            <h2 class="my-auto mr-3">
                                <?php echo $heading; ?>
                            </h2>
                        <?php endif; ?>
                        <?php if ($primaryCta) : ?>
                            <a href="<?php echo $primaryCta['url']; ?>" class="hof-btn-dark-green--outline" target="<?php echo $primaryCta['target']; ?>">
                                <?php echo $primaryCta['title']; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <?php if ($content) : ?>
                        <div class="hof-cta-bar__content">
                            <?php echo $content; ?>
                        </div>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
