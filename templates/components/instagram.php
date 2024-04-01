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

        <div class="container px-0">
            <div class="hof-instagram--container">

                <?php if ($heading) : ?>
                    <div class="hof-instagram--box-1">
                        <div class="hof-instagram--box-inner">
                            <div class="hof-instagram--heading m-auto">
                                <?php echo $heading; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>


                <?php if ($firstLink) : ?>
                    <div class="hof-instagram--box">
                        <div class="hof-instagram--box-inner">
                            <a href="<?php echo $firstLink['url']; ?>" class="" target="<?php echo $firstLink['target']; ?>">
                                <img src="<?php echo $firstImage; ?>" alt="<?php echo $firstLink['title']; ?>">
                            </a>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($secondLink) : ?>
                    <div class="hof-instagram--box">
                        <div class="hof-instagram--box-inner">
                            <a href="<?php echo $secondLink['url']; ?>" class="" target="<?php echo $secondLink['target']; ?>">
                                <img src="<?php echo $secondImage; ?>" alt="<?php echo $secondLink['title']; ?>">
                            </a>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($thirdLink) : ?>
                    <div class="hof-instagram--box">
                        <div class="hof-instagram--box-inner">
                            <a href="<?php echo $thirdLink['url']; ?>" class="" target="<?php echo $thirdLink['target']; ?>">
                                <img src="<?php echo $thirdImage; ?>" alt="<?php echo $thirdLink['title']; ?>">
                            </a>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($fourthLink) : ?>
                    <div class="hof-instagram--box">
                        <div class="hof-instagram--box-inner">
                            <a href="<?php echo $fourthLink['url']; ?>" class="" target="<?php echo $fourthLink['target']; ?>">
                                <img src="<?php echo $fourthImage; ?>" alt="<?php echo $fourthLink['title']; ?>">
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
                

            </div>
        </div>


    </section>
<?php endif; ?>
