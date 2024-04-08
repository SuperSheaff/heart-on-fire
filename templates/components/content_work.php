<?php
    // General.
    $componentId        = get_sub_field('component_content_work_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_content_work_class');
    $enableComponent    = get_sub_field('component_content_work_enable');
    $globalComponent    = get_sub_field('component_content_work_global_component');

    //Settings.
    $content            = heartonfire_get_the_field_values($globalComponent, 'content_work', 'content');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-content-work <?php echo $componentClass; ?>">
        <div class="hof-section-padding">
            <div class="row">
                <div class="col-lg-8 col-xl-5 offset-lg-3 offset-xl-6 hof-color-brown">
                    <?php if ($content) : ?>
                        <?php echo $content; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
