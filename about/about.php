<?php
 /* Template Name: about
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>医院テンプレート2 | 当院について</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/animsition.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&family=Overpass:wght@100;300&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/bootstrap-reboot.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css" />
</head>

<body>
  <div id="main-wrapper" class="about-wrapper animsition">
    <header id="header" class="p-header">
      <div class="mobile-container">
        <div class=" logo__img">
          <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">
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
          <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
            <div class="logo-pc logo"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/')); ?>"><span>ホーム</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/treatment')); ?>"><span>診療について</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>"><span>医師紹介</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link " href="<?php echo esc_url( home_url('/faq')); ?>"><span>よくあるご質問</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link " href="<?php echo esc_url( home_url('news')); ?>"><span>お知らせ</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link " href="<?php echo esc_url( home_url('/recruit')); ?>"><span>採用情報</span></a>
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
    <div class="about-contents">
      <div id="about" class="c-about">
        <section class="director">
          <div class="c-container appear up">
            <h2 class="page-ttl-under clip-js1 top">当院について</h2>
            <div class="director__message-area item">
              <div class="director__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/staff__1@sp.jpg" alt="" />
              </div>
              <div class="director__desc">
                <h3 class="c-txt-md">「あって良かった」から、<br>「ないと困る」診療所へ
                </h3>
                <p class="c-txt-sm">
                  耳鼻咽喉科疾患は、症状を何度も繰り返したり、症状が長く続くこともあります。また、お子様からご年配の方まで幅広い年齢層の方が対象となります。それ故、それぞれの患者様に合った治療方針や治療方法を十分に説明し、同意をえた上で行うことが大切であると考えています。
                  当院のコンセプト“健康を育み、ゆたかな未来へ”には、みなさんの健康意識を高め、より多くの方を健康的に保つことで、次世代のゆたかなまちづくりに貢献したいという想いが込められています。
                </p>
                <div class="director__name">
                  <span class="c-txt-sm">院長 :</span> 利部 翔太
                  <span class="c-txt-sm">（リブ ショウタ）</span>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="promise">
          <div class="promise__inner">
            <h2 class="promise__title appear up">
              <span class="item">RivRound医院が<br class="view-pc">大切にしている3つの約束</span>
              <p class="item">患者さんと健康を<br class="view-pc">“共に真剣に”向き合うために</p>
            </h2>
            <div class="promise__block appear up">
              <div class="promise__img cover-slide">
                <img class="img-zoom" src="<?php echo get_template_directory_uri(); ?>/images/home/medical__2.jpg" alt="">
              </div>
              <div class="promise__desc item">
                <h3 class="num-tit">
                  <i>1</i>
                  <span>耳鼻咽喉科の専門医として</span>
                </h3>
                <div class="description">
                  <p class="c-txt-sm">
                    当クリニックでは、専門医の強みを活かして早期発見、早期治療につながる内視鏡検査や超音波検査を行うことができます。また、CTやMRIなども、診察室で画像を見ながら、わかりやすく結果を説明することができます。
                    <brs>万一、紹介が必要となった際でも、疾患に合わせて信頼できる医療機関をご紹介しています。
                      わからないことやご不安がありましたらご相談ください。
                  </p>
                </div>
              </div>
            </div>
            <div class="promise__block appear up">
              <div class="promise__img cover-slide">
                <img class="img-zoom" src="<?php echo get_template_directory_uri(); ?>/images/home/room.jpg" alt="">
              </div>
              <div class="promise__desc item">
                <h3 class="num-tit">
                  <i>2</i>
                  <span>周りが気にならない“個室診療室”</span>
                </h3>
                <div class="description">
                  <p class="c-txt-sm">
                    診療室は全室個室となっており、プライバシーの保護に配慮しております。周囲の目を気にせず、ご自身の診療だけに専念していただけます。お連れの方も一緒に診療室に入り、説明をお聞きいただくことももちろん可能です。
                  </p>
                </div>

              </div>
            </div>
            <div class="promise__block appear up">
              <div class="promise__img cover-slide">
                <img class="img-zoom" src="<?php echo get_template_directory_uri(); ?>/images/home/counseling.jpg" alt="">
              </div>
              <div class="promise__desc item">
                <h3 class="num-tit">
                  <i>3</i>
                  <span>皆様のかかりつけ医として</span>
                </h3>
                <div class="description">
                  <p class="c-txt-sm">
                    感冒やワクチン接種などの一般的な内科診療のほか、健康長寿の妨げになる生活習慣病（高血圧や高脂血症、骨粗しょう症など）を早期に発見し、大病にならないよう継続的に診療を行います。
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="clinic">
          <div class="c-container">
            <div class="clinic__block">
              <h3 class="clip-js left">院内紹介</h3>
              <ul class="clinic-info-list appear up">
                <!-- 01 -->
                <li class="info01 item">
                  <span class="c-txt-sm">受付</span>
                  <div class="clinic-info-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/reception@pc.jpg" alt="" />
                  </div>
                  <p class="clinic-info-text">
                    スタッフ一同、明るい笑顔で皆様をお迎えいたします。親切・丁寧な対応を心掛けています。
                  </p>
                </li>
                <!-- 02 -->
                <li class="info01 item">
                  <span class="c-txt-sm">待合室</span>
                  <div class="clinic-info-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/clinic__1@pc.jpg" alt="" />
                  </div>
                  <p class="clinic-info-text item">
                    ゆっくりお待ちいただけるよう、常に清潔に保っています。
                  </p>
                </li>
                <!-- 03 -->
                <li class="info02 item">
                  <span class="c-txt-sm">診療室</span>
                  <p class="clinic-info-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/room.jpg" alt="" />
                  </p>
                  <p class="clinic-info-text">
                    リラックスした気持ちで診療を受けていただけるよう、スペースを広くとり、快適なチェアをご用意しております。モニターも見ながら、治療内容についてわかりやすくご説明いたします。
                  </p>
                </li>
                <!-- 04 -->
                <li class="info02 item">
                  <span class="c-txt-sm">エントランス</span>
                  <p class="clinic-info-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/car-space.jpg" alt="" />
                  </p>
                  <p class="clinic-info-text">
                    RivRound医院の駐車場です。<br />店舗前の50m程隣に3台停められます。
                  </p>
                </li>
                <!-- 05 -->
                <li class="info03 item">
                  <span class="c-txt-sm">キッズコーナー</span>
                  <p class="clinic-info-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/kid-space.jpg" alt="" />
                  </p>
                  <p class="clinic-info-text">
                    お子様連れのお母様・お父様にも気軽に医院にきていただきたいという思いから、キッズコーナーをご用意しております。
                  </p>
                </li>
                <!-- 06 -->
                <li class="info03 item">
                  <span class="c-txt-sm">滅菌器</span>
                  <p class="clinic-info-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/img-machine5@2x.jpg" alt="" />
                  </p>
                  <p class="clinic-info-text">
                    治療時に使う器具や器材が不衛生であると、それらを介して院内感染の危険が高まります。患者様により安全な治療を受けていただきたいという思いから、ヨーロッパ基準をクリアしたクラスB滅菌器を使用し、最大限に感染予防対策に力を入れております。
                  </p>
                </li>
                <!-- 07 -->
                <li class="info04 item">
                  <span class="c-txt-sm">CT</span>
                  <p class="clinic-info-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/ct.jpg" alt="" />
                  </p>
                  <p class="clinic-info-text">
                    CTは、立体的(3次元的)な画像診断が可能です。従来のレントゲンよりも詳しい情報を得られるので、治療の正確性・安全性を高めます。
                  </p>
                </li>
                <!-- 08 -->
                <li class="info04 item">
                  <span class="c-txt-sm">赤外線CC
                    <br>カメラ</span>
                  <p class="clinic-info-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/img-point4@2x.jpg" alt="" />
                  </p>
                  <p class="clinic-info-text">
                    めまいの際に出現する『眼振』という異常な眼球運動を画像で確認することができます。
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </section>
      </div>
      <!-- /.c-about -->
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
    </div>
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
            <li class="gnav01"><a class="c-txt-sm animsition-link" href="/">ホーム</a></li>
            <li class="gnav02"><a class="c-txt-sm animsition-link" href="<?php echo esc_url( home_url('/treatment')); ?>">診療について</a></li>
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
    <!-- /about-contents -->
    <div class="mobile-menu">
      <nav class="mobile-menu__nav">
        <ul class="mobile-menu__list">
          <li class="mobile-menu__item"><a class="animsition-link" href="/">ホーム</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/treatment')); ?>">診療について</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>">医師紹介</a></li>
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