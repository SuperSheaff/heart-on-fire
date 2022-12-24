<?php
    // General.
    $componentId        = get_sub_field('component_categories_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_categories_class');
    $enableComponent    = get_sub_field('component_categories_enable');
    $globalComponent    = get_sub_field('component_categories_global_component');

    //Settings.
    $categories         = heartonfire_get_the_field_values($globalComponent, 'categories', 'categories_repeater');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-categories d-none d-lg-block <?php echo $componentClass; ?>">

        <div class="container">
            <div class="hof-categories__parents d-flex justify-content-around">
                <?php foreach ($categories as $key => $category) :
                    $categoryTitle              = $category['title'];
                    $categoryNumberOfChildren   = count($category['category_item_repeater']);
                    ?>

                    <div class="hof-categories__parent <?php if ($key == 0) { echo 'active'; } ?>" data-key="<?php echo $key; ?>">    
                        <h2 class="my-auto mr-1"><?php echo $categoryTitle; ?></h2>
                        <p class="mb-auto"><?php echo $categoryNumberOfChildren; ?></p>
                    </div>

                <?php endforeach; ?>
            </div>
            <div class="hof-categories__children">
                <?php foreach ($categories as $key => $category) : ?>
                    <div class="hof-categories__child <?php if ($key == 0) { echo 'active'; } ?>" data-key="<?php echo $key; ?>">
                        <?php foreach ($category['category_item_repeater'] as $categoryItem) : ?>
                            <div class="hof-categories__child--item col-lg-3">
                                <div class="position-relative mb-3">
                                    <img src="<?php echo $categoryItem['image']; ?>" alt="<?php echo $categoryItem['title']; ?>">
                                    <div class="hof-categories__child--item-button">
                                        <a href="<?php echo $categoryItem['cta']['url']; ?>" class="hof-btn-white py-2 w-100" target="<?php echo $categoryItem['cta']['target']; ?>">
                                            Shop now
                                        </a>
                                    </div>
                                </div>
                                <h5><?php echo $categoryItem['title']; ?></h5>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- <div class="hof-container">
            <div class="hof-row">
                <div class="hof-col-full">
                    <div id="categories">
                        <?php
                        foreach ($categoriesItems as $key => $categoriesItem) :
                            $categoriesId = ! empty($categoriesItem['id']) ? $categoriesItem['id'] :
                            'categories-' . $key . '-' . rand();
                            if ($key == 0) :
                                $categoriesCollapse = '';
                                $categoriesShow = 'show';
                            else :
                                $categoriesCollapse = 'collapsed';
                                $categoriesShow = '';
                            endif;
                            ?>
                            <div class="hof-categories__card card">
                                <div id="headingOne" class="card-header hof-categories__card-header">
                                    <button class="hof-categories__card-btn btn btn-link <?php echo $categoriesCollapse; ?>"data-toggle="collapse" data-target="#<?php echo $categoriesId; ?>" aria-expanded="true" aria-controls="<?php echo $categoriesId; ?>">
                                        <?php echo $categoriesItem['title']; ?>
                                    </button>
                                    <div class="hof-categories__card-icon">
                                        <?php echo $categoriesIcon; ?>
                                    </div>
                                </div>
                                <div id="<?php echo $categoriesId; ?>" class="collapse <?php echo $categoriesShow; ?>" aria-labelledby="headingOne" data-parent="#categories">
                                    <div class="card-body hof-categories__card-body">
                                        <?php echo $categoriesItem['description']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
<?php endif; ?>
