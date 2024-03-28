<?php
    // General.
    $componentId        = get_sub_field('component_partners_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_partners_class');
    $enableComponent    = get_sub_field('component_partners_enable');
    $globalComponent    = get_sub_field('component_partners_global_component');

    //Settings.
    $tagline            = heartonfire_get_the_field_values($globalComponent, 'partners', 'tagline');
    $partners           = heartonfire_get_the_field_values($globalComponent, 'partners', 'partners_repeater');
?>

<?php if ($enableComponent): ?>
    
    <section id="<?php echo $componentId; ?>" class="hof-partners <?php echo $componentClass; ?>">
        <div class="container hof-bg-beige hof-padding">

            <?php if ($tagline) : ?>
                <p class="hof-tagline text-center mb-4">
                    <?php echo $tagline; ?>
                </p>
            <?php endif; ?>

            <div class="row">
                <?php foreach ($partners as $partner) :
                    $partnerImage    = $partner['image'];
                    ?>
                    <div class="hof-partners-logo-col col-3 mb-3">    
                        <img src="<?php echo $partnerImage; ?>" alt="Partner Logo" class="hof-partners--logo ">
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
<?php endif; ?>
