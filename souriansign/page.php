<?php
if(is_page('contact')){
    remove_filter('the_content','wpautop');
}
?>

<?php get_header(); ?>

<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>

<div class="sub-header">
    <div class="sub-cont">
        <h2 class="sub-title">
            <?php echo get_post_field( 'post_name', get_the_ID() ); ?><span><?php the_title(); ?></span>
        </h2>
        <?php get_template_part('breadcrumb'); ?>
    </div>
</div>

<main class="single">
    <?php the_content(); ?>
</main>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>