<footer class="footer">

    <section class="footer__company">
        <div>
            <h3 class="home-title-black">Company<span>事業概要</span></h3>
            <p>SOURIANSIGN（スリアンサイン）は、2018年1月設立の東京の個人事務所です。<br>ホームページ制作、広告デザイン、タレントマネジメントなどをおこなっております。</p>
            <div class="btn__detail">
                <a href="/company/">
                    <svg width="48" height="48">
                        <circle class="circle" cx="24" cy="24" r="22" />
                        <circle class="circle-hover" cx="24" cy="24" r="22" />
                    </svg>
                    <div class="text">DETAIL</div>
                </a>
            </div>
        </div>
    </section>

    <section class="footer__contact">
        <div>
            <h3 class="home-title-white">Contact<span>お問い合わせ</span></h3>
            <p>お仕事のご依頼・ご相談はメールフォームよりお問い合わせください。<br>
                ご相談は無料で承っております。お気軽にお問い合わせください。</p>
            <div class="btn__detail--02">
                <a href="/contact/">
                    <svg width="48" height="48">
                        <circle class="circle" cx="24" cy="24" r="22" />
                        <circle class="circle-hover" cx="24" cy="24" r="22" />
                    </svg>
                    <div class="text">DETAIL</div>
                </a>
            </div>
        </div>
    </section>

    <section class="footer__nav">
        <h1 class="footer__nav--logo">
            <a href="/">
                <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo(" name"); ?>" width="276" height="24">
            </a>
        </h1>
        <ul class="footer__nav--sns">
            <li class="footer__nav--sns-item"><a href="https://twitter.com/__mahko" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
            <li class="footer__nav--sns-item"><a href="https://instagram.com/mahko.insta" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
            <li class="footer__nav--sns-item"><a href="https://www.youtube.com/channel/UCrUI7hZrik8Jwz1A_5dda1g" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
            <li class="footer__nav--sns-item"><a href="https://lin.ee/l29H7s4" target="_blank"><i class="fa-brands fa-line"></i></a></li>
            <li class="footer__nav--sns-item"><a href="https://store.line.me/stickershop/author/1633238/ja" target="_blank"><i class="fa-solid fa-stamp"></i></a></li>
        </ul>
        <nav>
            <ul class="footer__nav--list">
                <?php /*
                <li class="footer__nav--item"><a href="">デザイン事業</a></li>
                <li class="footer__nav--item"><a href="">タレント事業</a></li>
                <li class="footer__nav--item"><a href="">〇〇事業</a></li>
                <li class="footer__nav--item"><a href="">〇〇事業</a></li>
            */ ?>
            </ul>
            <ul class="footer__nav--list sub">
                <li class="footer__nav--item"><a href="/about/">スリアンサインについて</a></li>
                <?php /*
                <li class="footer__nav--item accordion">
                    <a href="javascript:void(0);" class="js-accordion">事業内容</a>
                    <ul class="js-accordion-cont">
                        <li class="footer__nav--item"><a href="">デザイン事業</a></li>
                        <li class="footer__nav--item"><a href="">タレント事業</a></li>
                        <li class="footer__nav--item"><a href="">〇〇事業</a></li>
                        <li class="footer__nav--item"><a href="">〇〇事業</a></li>
                    </ul>
                </li>
                    */ ?>
                <li class="footer__nav--item"><a href="/info/">最新情報</a></li>
                <li class="footer__nav--item"><a href="/company/">事業概要</a></li>
                <li class="footer__nav--item"><a href="/policy/">プライバシーポリシー</a></li>
                <?php //<li class="footer__nav--item"><a href="/sitemap/">サイトマップ</a></li> ?>
                <li class="footer__nav--item contact"><a href="/contact/">お問い合わせ</a></li>
            </ul>
        </nav>
        <p class="copyright">&copy; 2022 SOURIANSIGN</p>
    </section>

</footer>

<!-- script  -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/func.js?0326"></script>

<?php wp_footer(); ?>

</body>

</html>