<?php
    // General.
    $componentId        = get_sub_field('component_services_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_services_class');
    $enableComponent    = get_sub_field('component_services_enable');
    $globalComponent    = get_sub_field('component_services_global_component');

    // Settings.
    $tagline            = heartonfire_get_the_field_values($globalComponent, 'services', 'tagline');
    $services           = heartonfire_get_the_field_values($globalComponent, 'services', 'services_repeater');
    $featuredServices   = heartonfire_get_the_field_values($globalComponent, 'services', 'services_featured_repeater');
?>

<?php if ($enableComponent): ?>
<section id="<?php echo esc_attr($componentId); ?>" class="hof-services <?php echo esc_attr($componentClass); ?>">
    <div class="hof-navigation-offset"></div>



    <?php if (!empty($services)) : ?>
        <?php $accordionId = $componentId . '_accordion'; ?>

        <div class="hof-section-padding">
            <?php if ($tagline) : ?>
                <p class="hof-tagline hof-color-brown text-center mb-5">
                    <?php echo esc_html($tagline); ?>
                </p>
            <?php endif; ?>
            <div class="accordion  pt-0" id="<?php echo esc_attr($accordionId); ?>">

                <?php foreach ($services as $key => $service) :

                    $serviceTitle   = $service['title'] ?? '';
                    $serviceContent = $service['content'] ?? '';

                    $headingId  = $accordionId . '_heading_' . $key;
                    $collapseId = $accordionId . '_collapse_' . $key;

                    $isFirst = ($key === 0);
                ?>
                    <div class="hof-accordion">
                        <div id="<?php echo esc_attr($headingId); ?>">
                            <h5 class="mb-0">
                                <button
                                    class="hof-color-dark-brown collapsed"
                                    data-toggle="collapse"
                                    data-target="#<?php echo esc_attr($collapseId); ?>"
                                    aria-expanded="<?php echo $isFirst ? 'true' : 'false'; ?>"
                                    aria-controls="<?php echo esc_attr($collapseId); ?>"
                                >
                                    <?php echo esc_html($serviceTitle); ?>
                                </button>
                            </h5>
                        </div>

                        <div
                            id="<?php echo esc_attr($collapseId); ?>"
                            class="collapse"
                            aria-labelledby="<?php echo esc_attr($headingId); ?>"
                            data-parent="#<?php echo esc_attr($accordionId); ?>"
                        >
                            <div>
                                <?php echo $serviceContent; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>

    <?php endif; ?>

    <?php if (!empty($featuredServices)) : ?>
        <div class="hof-featured-services-row">
            <div class="row">

                <?php foreach ($featuredServices as $featured) :

                    $featTitle = $featured['title'] ?? '';
                    $featImage = $featured['image'] ?? '';
                    $featLink  = $featured['link'] ?? null; // ACF link field (array)

                    $url    = is_array($featLink) && !empty($featLink['url']) ? $featLink['url'] : '';
                    $target = is_array($featLink) && !empty($featLink['target']) ? $featLink['target'] : '_self';
                ?>
                    <div class="col-md-4 mb-0 px-0">
                        <?php if ($url) : ?>
                            <a href="<?php echo esc_url($url); ?>"
                            target="<?php echo esc_attr($target); ?>"
                            class="hof-featured-service d-block position-relative">
                                <img src="<?php echo esc_url($featImage); ?>"
                                    alt="<?php echo esc_attr($featTitle); ?>"
                                    class="img-fluid w-100">
                                <?php if ($featTitle) : ?>
                                    <span class="hof-featured-service__title">
                                        <?php echo esc_html($featTitle); ?>
                                    </span>
                                <?php endif; ?>
                            </a>
                        <?php else : ?>
                            <div class="hof-featured-service d-block position-relative">
                                <img src="<?php echo esc_url($featImage); ?>"
                                    alt="<?php echo esc_attr($featTitle); ?>"
                                    class="img-fluid w-100">
                                <?php if ($featTitle) : ?>
                                    <span class="hof-featured-service__title">
                                        <?php echo esc_html($featTitle); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    <?php endif; ?>
</section>
<?php endif; ?>
