<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>医院テンプレート3 | お知らせ一覧</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/bootstrap-reboot.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/animsition.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css" />
  </head>

  <body>
    <div id="main-wrapper" class="news-sl-wrapper animsition">
      <header id="header" class="p-header">
        <div class="mobile-container">
          <div class="logo__img">
            <a cclass="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
              <div class="logo"></div>
            </a>
          </div>
          <div class="mobile-button">
            <button class="mobile-menu__btn">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
        <!-- /.mobile-container -->
        <div class="pc-container">
          <div class="logo__img">
            <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
              <div class="logo-pc logo"></div>
            </a>
          </div>
          <nav class="pc-nav">
            <ul class="pc-nav-list">
              <li class="pc-nav-item">
                <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/')); ?>"
                  ><span>ホーム</span></a
                >
              </li>
              <li class="pc-nav-item">
                <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/about')); ?>"
                  ><span>当院について</span></a
                >
              </li>
              <li class="pc-nav-item">
                <a
                  class="pc-nav-link animsition-link"
                  href="<?php echo esc_url( home_url('/treatment')); ?>"
                  ><span>診療について</span></a
                >
              </li>
              <li class="pc-nav-item">
                <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>"
                  ><span>医師紹介</span></a
                >
              </li>
              <li class="pc-nav-item">
                <a
                  class="pc-nav-link animsition-link reserve-btn"
                  href="<?php echo esc_url( home_url('/faq')); ?>"
                  ><span>よくあるご質問</span></a
                >
              </li>
              <li class="pc-nav-item">
                <a
                  class="pc-nav-link animsition-link reserve-btn"
                  href="<?php echo esc_url( home_url('/recruit')); ?>"
                  ><span>採用情報</span></a
                >
              </li>
            </ul>
          </nav>
        </div>
        <!-- /.pc-container -->
        <nav class="sp-navbtn">
          <ul class="sp-navbtn__container">
            <li>
              <a href="tel:092-686-7954"><i class="icon-tel"></i></a>
            </li>
            <li>
              <a target="_blank" href="https://epark.jp/dentistry/"
                ><i class="icon-net"></i
              ></a>
            </li>
            <li>
              <a href="https://goo.gl/maps/CyWuFwBDtuB9U6Ld7" target="_blank"
                ><i class="icon-map"></i
              ></a>
            </li>
          </ul>
        </nav>
        <!-- /.sp-navbtn -->
      </header>
      <!-- /.header -->
      <div class="c-top-view">
        <img src="<?php echo get_template_directory_uri(); ?>/images/home/clinic__1@pc.jpg" alt="" />
      </div>
      <!-- /.c-top-view -->
      <section class="c-news">
        <div class="c-container">
          <h2 class="c-news__title clip-text left">
            <p class="contents-title">NEWS</p>
            <p class="contents-subtitle">お知らせ</p>
          </h2>
          <ul class="c-news__list">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
              <li class="c-news__item">
                <a href="<?php the_permalink() ;?>" class="c-news__link animsition-link">
                  <span class="c-news__date"><?php echo get_the_date(); ?></span>
                  <?php the_post_thumbnail('thumbnail'); ?>
                  <p class="c-news__tit"><?php the_title(); ?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <?php endif; ?>
          </ul>
          <!-- pagenesion -->
        <?php if( function_exists ("the_pagination") ) the_pagination(); ?>
        </div>
      </section>
      <!-- /.news-top -->
      <footer id="footer" class="p-footer">
        <div class="p-footer__inner">
          <div class="p-footer__block01">
            <div class="p-footer__sec01">
              <p class="p-footer-clinic-name">RivRound医院</p>
              <p class="p-footer-address">
                福岡県福岡市博多区博多駅前3-27-25第二岡部ビル9F<br />Tel：092-686-7954<br
                  class="sp"
                />
              </p>
            </div>
          </div>
          <div class="p-footer__block02">
            <ul class="p-footer__nav">
              <li class="gnav01">
                <a class="c-txt-sm animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">ホーム</a>
              </li>
              <li class="gnav02">
                <a class="c-txt-sm animsition-link" href="<?php echo esc_url( home_url('/about')); ?>"
                  >当院について</a
                >
              </li>
              <li class="gnav02">
                <a
                  class="c-txt-sm animsition-link"
                  href="<?php echo esc_url( home_url('/treatment')); ?>"
                  >診療について</a
                >
              </li>
              <li class="gnav02">
                <a class="c-txt-sm animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>"
                  >医師紹介</a
                >
              </li>
              <li class="gnav06">
                <a class="c-txt-sm animsition-link" href="<?php echo esc_url( home_url('/faq')); ?>"
                  >よくあるご質問</a
                >
              </li>
              <li class="gnav06">
                <a class="c-txt-sm animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>"
                  >採用情報</a
                >
              </li>
            </ul>
            <small class="copyright">© RivRound.inc</small>
          </div>
        </div>
      </footer>
      <!-- /.footer -->
      <div class="mobile-menu">
        <nav class="mobile-menu__nav">
          <ul class="mobile-menu__list">
            <li class="mobile-menu__item">
              <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">ホーム</a>
            </li>
            <li class="mobile-menu__item">
              <a class="animsition-link" href="<?php echo esc_url( home_url('/about')); ?>"
                >当医院について</a
              >
            </li>
            <li class="mobile-menu__item">
              <a class="animsition-link" href="<?php echo esc_url( home_url('/treatment')); ?>"
                >診療について</a
              >
            </li>
            <li class="mobile-menu__item">
              <a class="animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>">医師紹介</a>
            </li>
            <li class="mobile-menu__item">
              <a class="animsition-link" href="<?php echo esc_url( home_url('/faq')); ?>">よくあるご質問</a>
            </li>
            <li class="mobile-menu__item">
              <a class="animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>"
                >採用情報</a
              >
            </li>
          </ul>
          <div class="reserve-btn-wrap">
            <div class="reserve-btn-tel">
              <h4>電話予約はこちら</h4>
              <div class="reserve-btn">
                <a href="tel:092-686-7954"><span>092-686-7954</span></a>
              </div>
            </div>
            <div class="reserve-btn-net">
              <h4>ネット予約はこちら</h4>
              <div class="reserve-btn">
                <a href="https://beauty.hotpepper.jp/" target="_blank"
                  ><span>ONLINE RESERVE</span></a
                >
              </div>
            </div>
          </div>
        </nav>
      </div>
      <!-- /.mobile-menu -->
    </div>
    <!-- /.main-wrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/c-main.js"></script>
  </body>
</html>
