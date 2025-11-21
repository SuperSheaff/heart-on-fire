<?php
    // General.
    $componentId        = get_sub_field('component_team_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_team_class');
    $enableComponent    = get_sub_field('component_team_enable');
    $globalComponent    = get_sub_field('component_team_global_component');

    // Settings.
    $heading            = heartonfire_get_the_field_values($globalComponent, 'team', 'title');
    $team               = heartonfire_get_the_field_values($globalComponent, 'team', 'team_repeater');

?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-team <?php echo $componentClass; ?>">
        <div class="hof-container">
            <div class="hof-section-padding">
                <?php if ($heading) : ?>
                    <h2 class="h1 hof-color-brown text-left mb-5 pb-5">
                        <?php echo $heading; ?>
                    </h2>
                <?php endif; ?>
                <div class="row">
                    <?php foreach ($team as $key => $team_member) : ?>
                        <div class="col-12 col-lg-4">
                            <div class="d-flex justify-content-between">
                                <div class="hof-team--name my-auto">
                                    <p class="mb-0" style="font-size: 24px;"><?php echo $team_member['name']; ?></p>
                                </div>
                                <div class="hof-team--name">
                                    <p class="text-right mb-0"><?php echo $team_member['role_1']; ?></p>    
                                    <p class="text-right mb-0"><?php echo $team_member['role_2']; ?></p>    
                                </div>
                            </div>
                            <p><?php echo $team_member['bio']; ?></p>
                            <img src="<?php echo $team_member['image']; ?>" alt="<?php echo $heading; ?>" class="img-fluid">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
