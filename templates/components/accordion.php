<?php
    // General.
    $componentId     = get_sub_field('component_accordion_id') ?: 'random_' . rand();
    $componentClass  = get_sub_field('component_accordion_class');
    $enableComponent = get_sub_field('component_accordion_enable');
    $globalComponent = get_sub_field('component_accordion_global_component');

    //Settings.
    $heading            = heartonfire_get_the_field_values($globalComponent, 'accordion', 'heading');
    $accordionItems     = heartonfire_get_the_field_values($globalComponent, 'accordion', 'accordion_items');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-accordion <?php echo $componentClass; ?>">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-4 col-xl-3">
                    <?php if ($heading) : ?>
                        <h2>
                            <?php echo $heading; ?>
                        </h2>
                    <?php endif; ?>
                </div>

                <div class="col-lg-6 col-xl-7 offset-lg-2">
                    <div id="accordion">
                        <?php
                        foreach ($accordionItems as $key => $accordionItem) :
                            $accordionId = ! empty($accordionItem['id']) ? $accordionItem['id'] :
                            'accordion-' . $key . '-' . rand();
                            if ($key == 0) :
                                $accordionCollapse = '';
                                $accordionShow = 'show';
                            else :
                                $accordionCollapse = 'collapsed';
                                $accordionShow = '';
                            endif;
                            ?>
                            <div class="hof-accordion__item">
                                <div id="heading--<?php echo $key; ?>" class="">
                                    <div class="hof-accordion__item--header <?php echo $accordionCollapse; ?>"data-toggle="collapse" data-target="#<?php echo $accordionId; ?>" aria-expanded="true" aria-controls="<?php echo $accordionId; ?>">
                                        <span class="mr-auto my-auto">
                                            <?php echo $accordionItem['title']; ?>
                                        </span>
                                        <svg class="my-auto" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16 16V24M8 16H16H8ZM24 16H16H24ZM16 16V8V16Z" stroke="#264432" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                                <div id="<?php echo $accordionId; ?>" class="collapse <?php echo $accordionShow; ?>" aria-labelledby="heading--<?php echo $key; ?>" data-parent="#accordion">
                                    <div class="hof-accordion__item--content">
                                        <?php echo $accordionItem['description']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php endif; ?>
