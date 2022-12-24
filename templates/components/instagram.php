<?php
    // General.
    $componentId        = get_sub_field('component_instagram_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_instagram_class');
    $enableComponent    = get_sub_field('component_instagram_enable');
    $globalComponent    = get_sub_field('component_instagram_global_component');

    // Settings.
    $heading            = heartonfire_get_the_field_values($globalComponent, 'instagram', 'heading');

    // Links.
    $firstLink          = heartonfire_get_the_field_values($globalComponent, 'instagram', 'first_link');
    $secondLink         = heartonfire_get_the_field_values($globalComponent, 'instagram', 'second_link');
    $thirdLink          = heartonfire_get_the_field_values($globalComponent, 'instagram', 'third_link');
    $fourthLink         = heartonfire_get_the_field_values($globalComponent, 'instagram', 'fourth_link');

    // Images.
    $firstImage          = heartonfire_get_the_field_values($globalComponent, 'instagram', 'first_image');
    $secondImage         = heartonfire_get_the_field_values($globalComponent, 'instagram', 'second_image');
    $thirdImage          = heartonfire_get_the_field_values($globalComponent, 'instagram', 'third_image');
    $fourthImage         = heartonfire_get_the_field_values($globalComponent, 'instagram', 'fourth_image');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-instagram py-0 <?php echo $componentClass; ?>">


        <div class="hof-instagram--container">

            <div class="hof-instagram--box-1">
                <?php if ($heading) : ?>
                    <div class="hof-instagram--heading m-auto">
                        <?php echo $heading; ?>
                    </div>
                <?php endif; ?>
            </div>

            <?php if ($firstLink) : ?>
                <a href="<?php echo $firstLink['url']; ?>" class="" target="<?php echo $firstLink['target']; ?>">
                    <div class="hof-instagram--box">
                        <img src="<?php echo $firstImage; ?>" alt="<?php echo $firstLink['title']; ?>">
                    </div>
                </a>
            <?php endif; ?>

            <?php if ($secondLink) : ?>
                <a href="<?php echo $secondLink['url']; ?>" class="" target="<?php echo $secondLink['target']; ?>">
                    <div class="hof-instagram--box">
                        <img src="<?php echo $secondImage; ?>" alt="<?php echo $secondLink['title']; ?>">
                    </div>
                </a>
            <?php endif; ?>

            <?php if ($thirdLink) : ?>
                <a href="<?php echo $thirdLink['url']; ?>" class="" target="<?php echo $thirdLink['target']; ?>">
                    <div class="hof-instagram--box">
                        <img src="<?php echo $thirdImage; ?>" alt="<?php echo $thirdLink['title']; ?>">
                    </div>
                </a>
            <?php endif; ?>

            <?php if ($fourthLink) : ?>
                <a href="<?php echo $fourthLink['url']; ?>" class="" target="<?php echo $fourthLink['target']; ?>">
                    <div class="hof-instagram--box">
                        <img src="<?php echo $fourthImage; ?>" alt="<?php echo $fourthLink['title']; ?>">
                    </div>
                </a>
            <?php endif; ?>
            

        </div>


    </section>
<?php endif; ?>
