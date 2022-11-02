<?php get_header(); ?>
<div class="sub-header">
    <div class="sub-cont">
        <h2 class="sub-title">
            Information<span>お知らせ</span>
        </h2>
        <?php get_template_part('breadcrumb'); ?>
    </div>
</div>

<main class="single">
    <?php if(have_posts()): ?>
    <?php while(have_posts()):the_post(); ?>

    <article>
        <time class="single__time"><?php the_time("Y.m.d"); ?></time>
        <h3 class="single__title"><?php the_title(); ?></h3>
        <div class="single__cont">
            <?php the_content(); ?>
        </div>
    </article>

    <div class="pager">
        <div><?php previous_post_link('%link', '<i class="fa-solid fa-angle-left"></i> PREV'); ?></div>
        <div class="pager__list"><a href="/info/"><i class="fa-solid fa-list"></i> LIST</a></div>
        <div><?php next_post_link('%link', 'NEXT <i class="fa-solid fa-angle-right"></i>'); ?></div>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>