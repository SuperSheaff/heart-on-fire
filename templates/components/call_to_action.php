<?php
    // General.
    $componentId        = get_sub_field('component_call_to_action_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_call_to_action_class');
    $enableComponent    = get_sub_field('component_call_to_action_enable');
    $globalComponent    = get_sub_field('component_call_to_action_global_component');

    //Settings.
    $heading            = heartonfire_get_the_field_values($globalComponent, 'call_to_action', 'heading');
    $primaryCta         = heartonfire_get_the_field_values($globalComponent, 'call_to_action', 'primary_cta');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-cta-bar <?php echo $componentClass; ?>">

        <div class="hof-section-padding text-center">

            <div class="mb-4">
                <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-heart.svg'); ?>
            </div>

            <?php if ($heading) : ?>
                <h3 class="hof-cta-bar__heading hof-color-brown">
                    <?php echo $heading; ?>
                </h3>
            <?php endif; ?>

            <?php if ($primaryCta) : ?>
                <a href="<?php echo $primaryCta['url']; ?>" class="hof-btn-brown--outline" target="<?php echo $primaryCta['target']; ?>">
                    <?php echo $primaryCta['title']; ?>
                </a>
            <?php endif; ?>
        </div>

    </section>
<?php endif; ?>
