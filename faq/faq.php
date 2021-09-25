<?php
 /* Template Name: faq
 */
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>医院サンプル2 | よくあるご質問</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/animsition.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/bootstrap-reboot.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css" />
  </head>

  <body>
    <div class="main-wrapper animsition">
      <!-- /.mobile-container -->
      <header id="header" class="p-header">
        <div class="mobile-container">
          <div class="logo__img">
            <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?> ">
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
            <a href=" <?php echo esc_url( home_url('/')); ?>">
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
                <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('news')); ?>"><span>お知らせ</span></a
                >
              </li>
              <li class="pc-nav-item">
                <a
                  class="pc-nav-link animsition-link"
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
      <div class="faq-contents">
        <div class="c-container">
          <div class="faq">
            <div class="faq__inner">
              <h2 class="faq__title">
                <p class="c-title">よくあるご質問</p>
              </h2>
              <div class="c-txtarea01">
                <p class="c-txt-sm">
                  当院に今までにお寄せいただきましたご質問を掲載いたします。もし、お求めのご質問が見当たらないようでしたら、お気軽に当院までお問い合わせください。
                </p>
              </div>
              <dl class="faq__block">
                <div class="faq__item">
                  <dt class="js-accordion-title ac-title">
                    <span class="c-txt-md"
                      >診療時間を予約することは出来ますか？
                    </span>
                  </dt>
                  <dd class="ac-content">
                    <div class="m-description-article">
                      <p class="c-txt-md">
                        はい。定期的な受診に際し、可能な限りお待たせする時間を少なくするため、また適切な診療時間を確保するため、当院では予約制を採用させていただいております。初診の際しても、事前のご連絡でご予約をお取りすることができます。
                      </p>
                    </div>
                  </dd>
                </div>
                <div class="faq__item">
                  <dt class="js-accordion-title ac-title">
                    <span class="c-txt-md"
                      >今、困っているのですが、当日診てもらえますか？
                    </span>
                  </dt>
                  <dd class="ac-content">
                    <div class="m-description-article">
                      <p class="c-txt-md">
                        当院は予約制ですので、予約の方が優先になりますが、当日キャンセルにて空きが出る場合もございますので直接クリニックまでお問い合わせください。緊急性の高い処置が必要な場合は、優先して拝見いたします。
                      </p>
                    </div>
                  </dd>
                </div>
                <div class="faq__item">
                  <dt class="js-accordion-title ac-title">
                    <span class="c-txt-md">駐車場はありますか？ </span>
                  </dt>
                  <dd class="ac-content">
                    <div class="m-description-article">
                      <p class="c-txt-md">
                        はい。クリニック裏に10台分の駐車スペースがございます。駐輪場もございますので、お近くの方は自転車でもお越しいただけます。
                      </p>
                    </div>
                  </dd>
                </div>
                <div class="faq__item">
                  <dt class="js-accordion-title ac-title">
                    <span class="c-txt-md"
                      >クレジットカードは使えますか？
                    </span>
                  </dt>
                  <dd class="ac-content">
                    <div class="m-description-article">
                      <p class="c-txt-md">
                        保険診療は使えません。<br />自由診療のみお使え致します。
                      </p>
                    </div>
                  </dd>
                </div>
              </dl>
            </div>
          </div>
        </div>
      </div>
      <!-- /.fq-contents -->
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
                <a class="animsition-link c-txt-sm" href="/">ホーム</a>
              </li>
              <li class="gnav01">
                <a class="animsition-link c-txt-sm" href="<?php echo esc_url( home_url('/about')); ?>"
                  >当院について</a
                >
              </li>
              <li class="gnav02">
                <a
                  class="animsition-link c-txt-sm"
                  href="<?php echo esc_url( home_url('/treatment')); ?>"
                  >診療について</a
                >
              </li>
              <li class="gnav03">
                <a class="animsition-link c-txt-sm" href="<?php echo esc_url( home_url('/staff')); ?>"
                  >医師紹介</a
                >
              </li>
              <li class="gnav04">
                <a class="animsition-link c-txt-sm" href="<?php echo esc_url( home_url('news')); ?>"
                  >お知らせ</a
                >
              </li>
              <li class="gnav06">
                <a class="animsition-link c-txt-sm" href="<?php echo esc_url( home_url('/recruit')); ?>"
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
              <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">ホーム</a>
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
              <a class="animsition-link" href="<?php echo esc_url( home_url('news')); ?>">お知らせ</a>
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
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/accordion.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/c-main.js"></script>
  </body>
</html>
