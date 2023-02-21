<?php
    // General.
    $componentId        = get_sub_field('component_general_content_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_general_content_class');
    $enableComponent    = get_sub_field('component_general_content_enable');
    $globalComponent    = get_sub_field('component_general_content_global_component');

    //Settings.
    $content            = heartonfire_get_the_field_values($globalComponent, 'general_content', 'content');
    $layout             = heartonfire_get_the_field_values($globalComponent, 'general_content', 'layout');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-general-content <?php echo $componentClass; ?>">
        <div class="container">
            <div class="row">
                <div class="<?php echo $layout; ?> mx-auto hof-color-dark-green">
                    <?php if ($content) : ?>
                        <?php echo $content; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
