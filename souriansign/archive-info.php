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
    <ul class="info__list">
        <?php // ↓↓↓↓↓ パラメーター ↓↓↓↓↓ ?>
        <?php
                $args = array(
                    'post_type'      => 'info',
                    'posts_per_page' => 10,
                );
                $home_info = new WP_Query( $args );
                if($home_info->have_posts()):
            ?>
        <?php // ↑↑↑↑↑ パラメーター ↑↑↑↑↑ ?>
        <?php // ↓↓↓↓↓ 記事がある場合 ↓↓↓↓↓ ?>
        <? while($home_info->have_posts()):$home_info->the_post(); ?>
        <li class="info__list--item">
            <a href="<?php the_permalink(); ?>">
                <time><?php the_time("Y.m.d"); ?></time>
                <p class="title"><?php the_title(); ?></p>
                <div><?php the_excerpt(); ?></div>
            </a>
        </li>
        <?php endwhile; ?>
        <?php // ↑↑↑↑↑ 記事がある場合 ↑↑↑↑↑ ?>
        <?php // ↓↓↓↓↓ 記事がない場合 ↓↓↓↓↓ ?>
        <?php else: ?>
        <li class="info__list--item">記事はありません。</li>
        <?php endif; wp_reset_postdata(); ?>
        <?php // ↑↑↑↑↑ 記事がない場合 ↑↑↑↑↑ ?>
    </ul>
</main>

<?php get_footer(); ?>