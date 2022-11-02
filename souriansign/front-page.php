<?php get_header(); ?>

<article>

    <section class="mainvisual">
        <h2 class="mainvisual__copy">Concevoir<br>Un Sourire<br><span class="jp">笑顔を、デザインする</span></h2>
        <div class="mainvisual__slide">
            <ul class="js-slider">
                <li><img src="<?php bloginfo('template_url'); ?>/images/img_main_01.jpg" alt="<?php bloginfo(" name"); ?>"></li>
                <li><img src="<?php bloginfo('template_url'); ?>/images/img_main_02.jpg" alt="<?php bloginfo(" name"); ?>"></li>
                <li><img src="<?php bloginfo('template_url'); ?>/images/img_main_03.jpg" alt="<?php bloginfo(" name"); ?>"></li>
            </ul>
        </div>
    </section>

    <section class="info">
        <h3 class="home-title">Information<span>お知らせ</span></h3>
        <ul class="info__list">
            <?php // ↓↓↓↓↓ パラメーター ↓↓↓↓↓ ?>
            <?php
                $args = array(
                    'post_type'      => 'info',
                    'posts_per_page' => 2,
                );
                $home_info = new WP_Query( $args );
                if($home_info->have_posts()):
            ?>
            <?php // ↑↑↑↑↑ パラメーター ↑↑↑↑↑ ?>
            <?php // ↓↓↓↓↓ 記事がある場合 ↓↓↓↓↓ ?>
            <? while($home_info->have_posts()):$home_info->the_post(); ?>
            <li class="info__list--item">
                <time><?php the_time("Y.m.d"); ?></time>
                <a href="<?php the_permalink(); ?>">
                    <p><?php the_title(); ?></p>
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

        <?php
            $news=get_term_by('slug','news','category');
            $news_link=get_term_link($news,'category');
        ?>
        <div class="btn__detail">
            <a href="/info/">
                <svg width="48" height="48">
                    <circle class="circle" cx="24" cy="24" r="22" />
                    <circle class="circle-hover" cx="24" cy="24" r="22" />
                </svg>
                <div class="text">DETAIL</div>
            </a>
        </div>
    </section>

    <section class="home-maincont">
        <div class="home-maincont__img"><img src="<?php bloginfo('template_url'); ?>/images/img_about.jpg" alt="<?php bloginfo(" name"); ?>"></div>
        <div class="home-maincont__wrap">
            <h3 class="home-title">About us<span>スリアンサインについて</span></h3>
            <div class="home-maincont__text">
                <p class="home-maincont__title">ひとを笑顔にすること<br>それが自分の笑顔につながる</p>
                <p>SOURIANSIGNとは、フランス語の「sourire」（笑顔）と英語の「design」をあわせた“笑顔を生み出す”という意味を込めた造語です。
                <p>「ひとを笑顔にしたい」</p>
                <p>これは、私の学生の頃からの夢のひとつであり、自分自身の基盤のようなものです。</p>
                <p>なかなか思うように過ごせないこの世の中に、私なりの形で「笑顔を増やしたい」と思い、SOURIANSIGNを立ち上げました。</p>
                <div class="btn__detail">
                    <a href="/about/">
                        <svg width="48" height="48">
                            <circle class="circle" cx="24" cy="24" r="22" />
                            <circle class="circle-hover" cx="24" cy="24" r="22" />
                        </svg>
                        <div class="text">DETAIL</div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php /*
    <section class="home-maincont">
        <div class="home-maincont__img"><img src="<?php bloginfo('template_url'); ?>/images/sample.png" alt="<?php bloginfo(" name"); ?>"></div>
    <div class="home-maincont__wrap">
        <h3 class="home-title">Projects of interest<span>注目の事業紹介</span></h3>
        <div class="home-maincont__text">
            <p class="home-maincont__title">ひとを笑顔にすること<br>それが自分の笑顔につながる</p>
            <p>スリアンサインの説明文。<br>
                スリアンサインの説明文。スリアンサインの説明文。<br>
                スリアンサインの説明文。スリアンサインの説明文。スリアンサインの説明文。</p>
            <div class="btn__detail">
                <a href="#">
                    <svg width="48" height="48">
                        <circle class="circle" cx="24" cy="24" r="22" />
                        <circle class="circle-hover" cx="24" cy="24" r="22" />
                    </svg>
                    <div class="text">DETAIL</div>
                </a>
            </div>
        </div>
    </div>
    </section>
    */ ?>

    <?php /*
    <section class="business">
        <h3 class="home-title-center">Business<span>事業内容</span></h3>
        <ul class="business__list">
            <li class="business__list--item talent">
                <a href="">
                    タレント
                </a>
            </li>
            <li class="business__list--item designer">
                <a href="">
                    デザイナー
                </a>
            </li>
            <li class="business__list--item personal">
                <a href="">
                    XXXXXX
                </a>
            </li>
            <li class="business__list--item other">
                <a href="">
                    XXXXXX
                </a>
            </li>
        </ul>
    </section>
    */ ?>


</article>

<?php get_footer(); ?>