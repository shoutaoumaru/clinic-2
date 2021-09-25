<?php
 /* Template Name: staff
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>医師紹介 | 医院テンプレート2</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/animsition.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&family=Overpass:wght@100;300&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/bootstrap-reboot.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css" />
</head>

<body>
  <div id="main-wrapper" class="staff-wrapper animsition">
    <header id="header" class="p-header">
      <div class="mobile-container">
        <div class=" logo__img">
          <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
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
        <div class=" logo__img">
          <a href="/">
            <div class="logo-pc logo"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/')); ?>"><span>ホーム</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/about')); ?>"><span>当院について</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/treatment')); ?>"><span>診療について</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/faq')); ?>"><span>よくあるご質問</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('news')); ?>"><span>お知らせ</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>"><span>採用情報</span></a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.pc-container -->
      <nav class="sp-navbtn">
        <ul class="sp-navbtn__container">
          <li><a href="tel:092-686-7954"><i class="icon-tel"></i></a></li>
          <li><a target="_blank" href="https://epark.jp/dentistry/"><i class="icon-net"></i></a></li>
          <li><a href="https://goo.gl/maps/CyWuFwBDtuB9U6Ld7" target="_blank"><i class="icon-map"></i></a></li>
        </ul>
      </nav>
      <!-- /.sp-navbtn -->
    </header>
    <!-- /.header -->
    <div id="staff" class="staff">
      <div class="c-container">
        <h2 class="page-ttl-under clip-js1 top">医師紹介
        </h2>
        <div class="page-lead-box appear up">
          <p class="item">地元の皆様の<br />かかりつけ医として</p>
        </div>
        <div class="staff__linst appear up">
          <h3 class="page-sub-ttl item">
            <span class="jpn">医師</span>
            <span class="c-txt-md">DOCTOR</span>
          </h3>
          <div class="staff__block item">
            <figure class="doctor__photo"><img src="<?php echo get_template_directory_uri(); ?>/images/home/staff__1@sp.jpg"></figure>
            <div class="staff__profile">
              <div class="staff__name">
                <h3>院長</h3>
                <h4>利部 翔太</h4>
              </div>
              <div class="staff__item">
                <h5>出身</h5>
                <p>福岡県福岡市</p>
              </div>
              <div class="staff__item">
                <h5>担当</h5>
                <p>一般治療全般</p>
              </div>
              <div class="staff__item">
                <h5>経歴</h5>
                <ul>
                  <li>東京医科大学医学部卒業</li>
                  <li>東京医科大学付属病院耳鼻咽喉科</li>
                  <li>医療法人RivRoundセンター勤務</li>
                </ul>
              </div>
              <div class="staff__item">
                <h5>資格</h5>
                <ul>
                  <li>日本耳鼻咽喉科学会認定専門医</li>
                  <li>日本耳鼻咽喉科学会補聴器相談医</li>
                  <li>厚生労働省認定補聴器適合判定医</li>
                  <li>身体障害者福祉法15条指定医</li>
                </ul>
              </div>
            </div>
          </div>
          <h3 class="page-sub-ttl item">
            <span class="jpn">看護師</span>
            <span class="c-txt-md">STAFF</span>
          </h3>
          <div class="staff__block item">
            <figure class="doctor__photo"><img src="<?php echo get_template_directory_uri(); ?>/images/home/staff__2@sp.jpg"></figure>
            <div class="staff__profile">
              <div class="staff__name">
                <h3>看護師</h3>
                <h4>利部 美紀</h4>
              </div>
              <div class="staff__item">
                <h5>出身</h5>
                <p>福岡県北九州市</p>
              </div>
              <div class="staff__item">
                <h5>経歴</h5>
                <p>福岡大学看護科</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.staff -->
    <section id="information" class="p-information">
      <div class="c-container appear up">
        <div class="p-information__block item">
          <div class="p-information__left">
            <h2 class="sec-title">
              <span class="c-txt-xs">INFORMATION</span>
              <span class="c-txt-md">診療時間</span>
            </h2>
            <div class="p-information__tel">
              <p class="tel-num"><span>TEL. </span><a href="tel:092-686-7954">092-686-7954</a></p>
            </div>
          </div>
          <div class="p-information__right">
            <div class="p-information__open">
              <table class="p-information__open__table">
                <tbody>
                  <tr>
                    <th class="th-hour-ttl">診療時間</th>
                    <th class="th-week01">月</th>
                    <th class="th-week02">火</th>
                    <th class="th-week03">水</th>
                    <th class="th-week04">木</th>
                    <th class="th-week05">金</th>
                    <th class="th-week06">土</th>
                    <th class="th-week07">日・祝</th>
                  </tr>
                  <!-- 01 -->
                  <tr>
                    <th>9:00-12:00</th>
                    <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-circle.svg" alt="" class="opening-tbl-circle"></td>
                    <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-circle.svg" alt="" class="opening-tbl-circle"></td>
                    <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-circle.svg" alt="" class="opening-tbl-circle"></td>
                    <td><img src="https://www.haru-shika.jp/wp/wp-content/themes/haru/images/hour-slash.svg" alt=""
                        class="opening-tbl-slash"></td>
                    <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-circle.svg" alt="" class="opening-tbl-circle"></td>
                    <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-circle.svg" alt="" class="opening-tbl-circle"></td>
                    <td><img src="https://www.haru-shika.jp/wp/wp-content/themes/haru/images/hour-slash.svg" alt=""
                        class="opening-tbl-slash"></td>
                  </tr>
                  <!-- 02 -->
                  <tr>
                    <th>15:00-19:00</th>
                    <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-circle.svg" alt="" class="opening-tbl-circle"></td>
                    <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-circle.svg" alt="" class="opening-tbl-circle"></td>
                    <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-circle.svg" alt="" class="opening-tbl-circle"></td>
                    <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-slash.svg" alt="" class="opening-tbl-slash"></td>
                    <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-circle.svg" alt="" class="opening-tbl-circle"></td>
                    <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-slash.svg" alt="" class="opening-tbl-triangle"></td>
                    <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-slash.svg" alt="" class="opening-tbl-slash"></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="p-information__text">
              <p><img src="<?php echo get_template_directory_uri(); ?>/images/hour-triangle.svg" alt=""><span>15:00～18:00</span></p>
              <p>休診日　木曜・日曜・祝日</p>
              <p>祝日がある週の木曜日は診療いたします。</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.p-information -->
    <footer id="footer" class="p-footer">
      <div class="p-footer__inner">
        <div class="p-footer__block01">
          <div class="p-footer__sec01">
            <p class="p-footer-clinic-name">RivRound医院</p>
            <p class="p-footer-address">福岡県福岡市博多区博多駅前3-27-25第二岡部ビル9F<br>Tel：092-686-7954<br class="sp"></p>
          </div>
        </div>
        <div class="p-footer__block02">
          <ul class="p-footer__nav">
            <li class="gnav01"><a class="animsition-link c-txt-sm" href=" <?php echo esc_url( home_url('/')); ?>">ホーム</a></li>
            <li class="gnav02"><a class="animsition-link c-txt-sm" href="<?php echo esc_url( home_url('/about')); ?>">当院について</a></li>
            <li class="gnav02"><a class="animsition-link c-txt-sm" href="<?php echo esc_url( home_url('/treatment')); ?>">診療について</a></li>
            <li class="gnav04"><a class="animsition-link c-txt-sm" href="<?php echo esc_url( home_url('news')); ?>">お知らせ</a></li>
            <li class="gnav06"><a class="animsition-link c-txt-sm" href="<?php echo esc_url( home_url('/faq')); ?>">よくあるご質問</a></li>
            <li class="gnav06"><a class="animsition-link c-txt-sm" href="<?php echo esc_url( home_url('/recruit')); ?>">採用情報</a></li>
          </ul>
          <small class="copyright">© RivRound.inc</small>
        </div>
      </div>
    </footer>
    <!-- /.footer -->
    <div class="mobile-menu">
      <nav class="mobile-menu__nav">
        <ul class="mobile-menu__list">
          <li class="mobile-menu__item"><a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">ホーム</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/about')); ?>">当医院について</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/treatment')); ?>">診療について</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('news')); ?>">お知らせ</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/faq')); ?>">よくあるご質問</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>">採用情報</a></li>
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
              <a href="https://beauty.hotpepper.jp/" target="_blank"><span>ONLINE RESERVE</span></a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!-- /.mobile-menu -->
  </div>
  <!-- /#main-wrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/text-animation.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/c-main.js"></script>
</body>

</html>