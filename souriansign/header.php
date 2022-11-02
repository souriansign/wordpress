<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>
        <?php wp_title(); ?>
    </title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- apple touch icon -->
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.jpg">

    <!-- favicon -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">

    <!-- OGP -->
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:title" content="<?php bloginfo(" name"); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/ogp.jpg">
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?php wp_title('|', true, 'right'); bloginfo('name'); ?>" />
    <meta property="og:locale" content="ja_JP" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@__mahko">
    <meta name="twitter:title" content="<?php bloginfo(" name"); ?>" />
    <meta name="twitter:description" content="<?php bloginfo('description'); ?>" />

    <!-- Webfont -->
    <script src="https://kit.fontawesome.com/968d645cf3.js" crossorigin="anonymous"></script>
    <script>
    (function(d) {
        var config = {
                kitId: 'ahx1aoq',
                scriptTimeout: 3000,
                async: true
            },
            h = d.documentElement,
            t = setTimeout(function() {
                h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
            }, config.scriptTimeout),
            tk = d.createElement("script"),
            f = false,
            s = d.getElementsByTagName("script")[0],
            a;
        h.className += " wf-loading";
        tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
        tk.async = true;
        tk.onload = tk.onreadystatechange = function() {
            a = this.readyState;
            if (f || a && a != "complete" && a != "loaded") return;
            f = true;
            clearTimeout(t);
            try {
                Typekit.load(config)
            } catch (e) {}
        };
        s.parentNode.insertBefore(tk, s)
    })(document);
    </script>
    <link rel="stylesheet" href="https://use.typekit.net/hbt5koz.css">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-63BZP7M2H0"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-63BZP7M2H0');
    </script>



    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <header class="header">
        <div class="header__wrap">
            <h1 class="header__logo">
                <a href="/">
                    <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo(" name"); ?>" width="276" height="24">
                </a>
            </h1>
            <div class="header__sp-nav">
                <button class="header__sp-btn js-menu-trigger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <nav class="js-menu-open">
                <ul class="header__gnavi">
                    <li class="header__gnavi--item"><a href="/about/">About</a></li>
                    <?php /*
                    <li class="header__gnavi--item mega-menu accordion">
                        <a href="javascript:void(0);" class="js-accordion">Business</a>
                        <dl class="mega-menu__cont js-accordion-cont">
                            <dt class="mega-menu__title"><a href="">デザイン事業</a></dt>
                            <dd class="mega-menu__item">
                                <a href="">リンク名_その１</a>
                                <a href="">リンク名_その１</a>
                                <a href="">リンク名_その１</a>
                            </dd>
                            <dt class="mega-menu__title"><a href="">デザイン事業</a></dt>
                            <dd class="mega-menu__item">
                                <a href="">リンク名_その１</a>
                                <a href="">リンク名_その１</a>
                                <a href="">リンク名_その１</a>
                            </dd>
                            <dt class="mega-menu__title"><a href="">デザイン事業</a></dt>
                            <dd class="mega-menu__item">
                                <a href="">リンク名_その１</a>
                                <a href="">リンク名_その１</a>
                                <a href="">リンク名_その１</a>
                            </dd>
                            <dt class="mega-menu__title"><a href="">タレント事業</a></dt>
                            <dd class="mega-menu__item">
                                <a href="">リンク名_その１</a>
                                <a href="">リンク名_その１</a>
                                <a href="">リンク名_その１</a>
                            </dd>
                        </dl>
                    </li>
                    */ ?>
                    <li class="header__gnavi--item"><a href="/company/">Company</a></li>
                    <li class="header__gnavi--item"><a href="/contact/">Contact</a></li>
                    <li class="header__gnavi--item sns"><a href="https://twitter.com/__mahko" target="_blank"><i class="fa-brands fa-twitter"></i> Twitter</a></li>
                    <li class="header__gnavi--item sns"><a href="https://instagram.com/mahko.insta" target="_blank"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                    <li class="header__gnavi--item sns"><a href="https://www.youtube.com/channel/UCrUI7hZrik8Jwz1A_5dda1g" target="_blank"><i class="fa-brands fa-youtube"></i> You Tube</a></li>
                    <li class="header__gnavi--item sns"><a href="https://lin.ee/l29H7s4" target="_blank"><i class="fa-brands fa-line"></i> LINE</a></li>
                    <li class="header__gnavi--item sns"><a href="https://store.line.me/stickershop/author/1633238/ja" target="_blank"><i class="fa-solid fa-stamp"></i> LINE STAMP</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="official-sns">
        <p class="official-sns__title">OFFICIAL SNS</p>
        <ul class="js-accordion-cont">
            <li class="official-sns__list--item"><a href="https://twitter.com/__mahko" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
            <li class="official-sns__list--item"><a href="https://instagram.com/mahko.insta" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
            <li class="official-sns__list--item"><a href="https://www.youtube.com/channel/UCrUI7hZrik8Jwz1A_5dda1g" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
            <li class="official-sns__list--item"><a href="https://lin.ee/l29H7s4" target="_blank"><i class="fa-brands fa-line"></i></a></li>
            <li class="official-sns__list--item"><a href="https://store.line.me/stickershop/author/1633238/ja" target="_blank"><i class="fa-solid fa-stamp"></i></a></li>
        </ul>
    </div>