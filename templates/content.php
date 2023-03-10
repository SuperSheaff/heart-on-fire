<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage HeartOnFire
 * @since HeartOnFire 1.0.0
 */

$settings_blog_style = get_field('settings_blog', 'option')['settings_blog_style'];

switch ($settings_blog_style) {
    case 'card-w-sidebar':
        $blogRowClass    = 'hof-blog__col-card-side';
        break;
    case 'card-wo-sidebar':
        $blogRowClass    = 'hof-blog__col-card-w-side';
        break;
    case 'list-w-sidebar':
        $blogRowClass    = '';
        break;
    case 'list-wo-sidebar':
        $blogRowClass    = '';
        break;
    default:
        $blogRowClass    = '';
}

?>
<div class="col-12 <?php echo $blogRowClass; ?>">
    <?php if (get_the_post_thumbnail_url()) { ?>
    <div class="hof-blog__thumbnail">
        <a href="<?php echo esc_url(get_permalink()); ?>" class="d-block position-relative">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
        </a>
    </div>
    <?php } ?>
    <h2 class="hof-blog__title">
        <a href="<?php echo esc_url(get_permalink()); ?>">
            <?php echo the_title(); ?>
        </a>
    </h2>
    <div class="hof-blog__meta">
        <a href="#" class="hof-blog__meta-date">
            <?php echo esc_html(get_the_modified_date()); ?>
        </a>,
        <a href="#" class="hof-blog__meta-author">
            <?php echo get_the_author(); ?>
        </a>
    </div>
    <div class="hof-blog__text">
        <p>
            <?php echo the_excerpt(); ?>
        </p>
    </div>
</div>
