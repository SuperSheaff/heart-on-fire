<?php
    // General.
    $componentId        = get_sub_field('component_call_to_action_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_call_to_action_class');
    $enableComponent    = get_sub_field('component_call_to_action_enable');
    $globalComponent    = get_sub_field('component_call_to_action_global_component');

    //Settings.
    $primaryCta         = heartonfire_get_the_field_values($globalComponent, 'call_to_action', 'primary_cta');
    $image              = heartonfire_get_the_field_values($globalComponent, 'call_to_action', 'image');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-cta-bar <?php echo $componentClass; ?>">
        <div class="hof-container">
            <div class="hof-section-padding text-center position-relative">

                <img src="<?php echo $image; ?>" class="hof-cta-bar--img hof-img-crop position-relative">

                <?php if ($primaryCta) : ?>
                    <a href="<?php echo $primaryCta['url']; ?>" class="hof-cta-bar--btn hof-btn-brown" target="<?php echo $primaryCta['target']; ?>">
                        <?php echo $primaryCta['title']; ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
