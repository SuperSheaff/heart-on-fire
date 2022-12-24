<?php
    // General.
    $componentId        = get_sub_field('component_call_to_action_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_call_to_action_class');
    $enableComponent    = get_sub_field('component_call_to_action_enable');
    $globalComponent    = get_sub_field('component_call_to_action_global_component');

    //Settings.
    $content            = heartonfire_get_the_field_values($globalComponent, 'call_to_action', 'content');
    $primaryCta         = heartonfire_get_the_field_values($globalComponent, 'call_to_action', 'primary_cta');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-cta-bar text-center <?php echo $componentClass; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <?php if ($content) : ?>
                        <div class="hof-cta-bar__content">
                            <?php echo $content; ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($primaryCta) : ?>
                        <a href="<?php echo $primaryCta['url']; ?>" class="hof-btn-dark-green--outline" target="<?php echo $primaryCta['target']; ?>">
                            <?php echo $primaryCta['title']; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
