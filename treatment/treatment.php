<?php
 /* Template Name: treatment
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>医院テンプレート2 | 診療について</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/animsition.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&family=Overpass:wght@100;300&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/bootstrap-reboot.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css" />
</head>

<body>
  <div id="main-wrapper" class="treatment-wrapper animsition">
    <header id="header" class="p-header">
      <div class="mobile-container">
        <div class=" logo__img">
          <a href=" <?php echo esc_url( home_url('/')); ?>">
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
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>"><span>医師紹介</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link reserve-btn" href="<?php echo esc_url( home_url('/faq')); ?>"><span>よくあるご質問</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link reserve-btn" href="<?php echo esc_url( home_url('news')); ?>"><span>お知らせ</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link reserve-btn" href="<?php echo esc_url( home_url('/recruit')); ?>"><span>採用情報</span></a>
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
    <div class="treatment-contents">
      <div id="treatment" class="treatment">
        <div class="c-container appear up">
          <h2 class="page-ttl-under clip-js1 top">診療について</h2>
          <div class="treatment__block item">
            <div class="page-lead-box">
              “患者様の納得”のための、
              わかりやすく明確な治療方針の提示
            </div>
          </div>
          <section class="first item ">
            <h3 class="page-sub-ttl">
              <span class="jpn">当院の診療科目</span>
              <span class="c-txt-md">TREATMENT</span>
            </h3>
          </section>
          <ul class="treatment__list item">
            <!-- 01 -->
            <li class="treatment__item item">
              <div class="img-side">
                <div class="treatment-ttl">
                  <span>一般内科</span>
                </div>
                <div class="treatment-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/counseling-2.jpg" alt="" />
                </div>
              </div>
              <div class="text-side">
                <p class="c-txt-sm">
                  ざっと診察して薬を処方するのではなく、今の症状がなぜ起きているのかを分かりやすく患者様にお伝えをし、症状がよくなった後も出来るかぎり再発しないように予防策を丁寧にお伝えしていきます。その場しのぎの治療ではなく、しっかりとご自身の健康に向き合いメインテナンスをしていく。それが私たちが取り組む予防医療です。
                </p>
              </div>
            </li>
            <!-- 02 -->
            <li class="treatment__item item">
              <div class="img-side">
                <div class="treatment-ttl">耳鼻咽喉科</div>
                <div class="treatment-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/counseling.jpg" alt="" />
                </div>
              </div>
              <div class="text-side">
                <p class="c-txt-sm">
                  耳鼻咽喉科というのは、命にかかわるような疾患を扱うわけではないのですが、「聞こえにくい」「のどが痛くてご飯が食べられない」というのは、患者さまの生活の質にかかわる大事な部分だと思うんです。とくに聞こえに関しては、少し処置をしたりちょっとしたアドバイスをしたりするだけで、ガラッと生活がしやすくなることもあります。患者さまの生活の質を少しでも改善することができる大切なものです。少しでも患者さまの生活が豊かになるよう、お手伝いができればと思います。
                </p>
              </div>
            </li>
            <!-- 03 -->
            <li class="treatment__item item">
              <div class="img-side">
                <div class="treatment-ttl">予防接種</div>
                <div class="treatment-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/clinic-vactin.jpg" alt="" />
                </div>
              </div>
              <div class="text-side">
                <p class="c-txt-sm">
                  感染症にかかると体の中で抗体などが作られ、新たに外から侵入する病原体を攻撃するしくみができます。このしくみを「免疫」といいます。免疫のしくみを利用したのが「ワクチン」です。ワクチンを接種することにより、あらかじめウイルスや細菌(病原体)に対する免疫(抵抗力)を作り出し、病気になりにくくするのです。まれに熱や発しんなどの副反応がみられますが、実際に感染症にかかるよりも症状が軽いことや、まわりの人にうつすことがない、という利点があります。
                </p>
              </div>
            </li>
            <!-- 04 -->
            <li class="treatment__item item">
              <div class="img-side">
                <div class="treatment-ttl">各種検診</div>
                <div class="treatment-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/rentogen.jpg" alt="" />
                </div>
              </div>
              <div class=" text-side">
                <p class="c-txt-sm">
                  どんなに良い治療を施したとしても、それを維持する方法を知らない、あるいは実践しなければいずれ不具合が生じてしまいます。治療の繰り返しにならないよう、予防を軸とした診療の流れに沿って治療を進めていきます。
                </p>
              </div>
            </li>
            <!-- 05 -->
            <li class="treatment__item item">
              <div class="img-side">
                <div class="treatment-ttl">CT検査、内視鏡検査</div>
                <div class="treatment-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/ct.jpg" alt="" />
                </div>
              </div>
              <div class="text-side">
                <p class="c-txt-sm">
                  レントゲンよりもより詳細な情報が得られる、みみ・はな用のCT検査を予約なしに10分程度の短時間で行うことができます。<br>また内視鏡検査は刺激の少ない径3.3㎜の細いファイバースコープと異物摘出や
                  組織検査も可能な鉗子付きファイバースコープの両方を導入しています
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- /.treatment -->
      <section id="information" class="p-information">
        <div class="c-container">
          <div class="p-information__block">
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
    </div>
    <!-- /.treatment-contents -->
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
            <li class="gnav01"><a class="c-txt-sm animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">ホーム</a></li>
            <li class="gnav02"><a class="c-txt-sm animsition-link" href="<?php echo esc_url( home_url('/about')); ?>">当院について</a></li>
            <li class="gnav03"><a class="c-txt-sm" href="<?php echo esc_url( home_url('/staff')); ?>">医師紹介</a></li>
            <li class="gnav06"><a class="c-txt-sm animsition-link" href="<?php echo esc_url( home_url('/faq')); ?>">よくあるご質問</a></li>
            <li class="gnav06"><a class="c-txt-sm animsition-link" href="<?php echo esc_url( home_url('news')); ?>">お知らせ</a></li>
            <li class="gnav06"><a class="c-txt-sm animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>">採用情報</a></li>
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
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>">医師紹介</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/faq')); ?>">よくあるご質問</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('news')); ?>">お知らせ</a></li>
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