<?php
    // General.
    $componentId        = get_sub_field('component_team_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_team_class');
    $enableComponent    = get_sub_field('component_team_enable');
    $globalComponent    = get_sub_field('component_team_global_component');

    //Settings.
    $teamMembers        = heartonfire_get_the_field_values($globalComponent, 'team', 'team_repeater');
    $bgColor            = heartonfire_get_the_field_values($globalComponent, 'team', 'background_color');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-team <?php echo $bgColor; ?> <?php echo $componentClass; ?>">
        <div class="container">
            <div class="row">
                <?php foreach ($teamMembers as $key => $team) :
                    $teamImage      = $team['image'];
                    $teamName       = $team['name'];
                    $teamTitle      = $team['title'];
                    $teamContent    = $team['content'];
                    ?>
                    <div class="col-md-5 mx-auto mb-3 hof-color-dark-green">    
                        <img src="<?php echo $teamImage; ?>" alt="<?php echo $teamName; ?>" class="img-fluid mb-3">
                        <h2 class="mx-auto mb-0 ff-p90"><?php echo $teamName; ?></h3>
                        <h2 class="mx-auto mb-4 ff-p90"><em><?php echo $teamTitle; ?></em></h3>
                        <div class="hof-team--content h5 mx-auto">
                            <?php echo $teamContent; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
