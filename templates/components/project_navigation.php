<?php
    // General.
    $componentId        = get_sub_field('component_project_navigation_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_project_navigation_class');
    $enableComponent    = get_sub_field('component_project_navigation_enable');
    $globalComponent    = get_sub_field('component_project_navigation_global_component');

    //Settings.
    $prev              = heartonfire_get_the_field_values($globalComponent, 'project_navigation', 'previous_page');
    $next              = heartonfire_get_the_field_values($globalComponent, 'project_navigation', 'next_page');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-project-navigation <?php echo $componentClass; ?>">
        <div class="px-3 px-lg-4 pb-3 pb-lg-4 pt-0">

            <div class="hof-bg-light-green p-3 p-lg-4">
                <div class="row">

                    <div class="col-md-6 text-left d-none d-md-flex">
                        <a href="<?php echo $prev; ?>">
                            <div class="d-flex">
                                <div class="mt-auto">
                                    <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-left.svg'); ?>
                                </div>
                                <div class="mr-auto">
                                    <div class="hof-tagline hof-color-brown">
                                        Previous Project
                                    </div>
                                    <h2 class="hof-color-brown mb-0">
                                        <?php echo get_the_title(url_to_postid($prev)); ?>
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 text-center text-md-right">
                        <a href="<?php echo $next; ?>">
                            <div class="d-flex">
                                <div class="mx-auto mr-md-0">
                                    <div class="hof-tagline hof-color-brown">
                                        Next Project
                                    </div>
                                    <h2 class="hof-color-brown mb-0">
                                        <?php echo get_the_title(url_to_postid($next)); ?>
                                    </h2>
                                </div>
                                <div class="mt-auto d-none d-md-block">
                                    <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-right.svg'); ?>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
