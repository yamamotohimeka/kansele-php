<?php
  $title = '関西セレクション';
  $templete = 'top';
  $path = './';
  include $path .'components/header.php';
?>
<main class="main top">
  <div class="container">

    <div class=" swiper top__swiper">
      <div class="swiper-wrapper top__swiper-wrap">
        <div class="swiper-slide">
          <img src="<?php echo $path; ?>assets/images/banner-slide1.png" alt="関西セレクションのバナー">
        </div>
        <div class="swiper-slide">
          <img src="<?php echo $path; ?>assets/images/banner-slide2.png" alt="関西セレクションのバナー">
        </div>
        <div class="swiper-slide">
          <img src="<?php echo $path; ?>assets/images/banner-slide3.png" alt="関西セレクションのバナー">
        </div>
        <div class="swiper-pagination"></div>
      </div>

      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>


    <h2 class="h2-title">
      <div class="h2-text">
        <p>Today's Schedule</p>
      </div>
      <img src="<?php echo $path; ?>assets/images/h2-sche.png" alt="">
    </h2>

    <div class="top__sche">
      <nav class="top__sche__nav">
        <ul class="top__sche__nav__list">
          <?php include $path .'components/girlCard.php';?>
        </ul>
      </nav>
    </div>


    <div class="top__newface top__newface-bg">
      <div class="container">
        <h2 class="h2-title">
          <div class="h2-text">
            <p>New Face</p>
          </div>
          <img src="<?php echo $path; ?>assets/images/h2-newface.png" alt="">
        </h2>
        <nav class="top__newface__nav">
          <ul class="top__newface__nav__list">
            <?php include $path .'components/newfaceCard.php';?>
          </ul>
        </nav>

        <div class="top__newface-button">
          <a href="<?php echo $path; ?>girls">
            <p>女の子をもっと見る</p>
          </a>
        </div>
      </div>
    </div>


    <h2 class="h2-title">
      <div class="h2-text">
        <p>Pick Up</p>
      </div>
      <img src="<?php echo $path; ?>assets/images/h2-pick.png" alt="">
    </h2>

    <div class="top__pickup">
      <nav class="top__pickup__nav">
        <ul class="top__pickup__nav__list">
          <?php include $path .'components/pickupCard.php';?>
        </ul>
      </nav>
    </div>
  </div>

  <div class="top__kuchikomi">
    <div class="container">

      <h2 class="h2-title">
        <div class="h2-text">
          <p>kuchikomi</p>
        </div>
        <img src="<?php echo $path; ?>assets/images/h2-kuchikomi.png" alt="">
      </h2>

      <div class=" swiper top__kuchikomi__swiper flex">
        <div class="swiper-wrapper kuchikomi___swiper-wrap">
          <?php include $path .'components/kuchikomiCard.php';?>
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>


    </div>
  </div>

  <h2 class="h2-title">
    <div class="h2-text">
      <p>Concept</p>
    </div>
    <img src="<?php echo $path; ?>assets/images/h2-concept.png" alt="">
  </h2>

  <div class="container">
    <div class="top__concept">
      <div class="top__concept-text">
        <p>当店は”普通の素人女性”をコンセプトにしているため、とても若い女の子が多いお店です。<br>
          業界未経験、風俗経験がとても浅い10代の女の子が多く所属しています。<br>
          慣れと曇りがなく素直な性格で同年代よりも年上男性が好きなタイプを集めております。<br>
          初々しいのはもちろん、エッチな事に興味津々ではあるが、まだ性に開花していない未開発な女の子が大勢です。<br>
          初デートで胸がドキドキしながらアナタと一緒に向かう初ホテル…<br>
          アナタ次第で何色にでも染まる純粋無垢な彼女とドキドキワクワクするような時間をお楽しみ頂く…<br>
          それが<span>「関西セレクション」</span>です。</p>
      </div>
    </div>

  </div>

  </div>

  </div>
</main>
<?php include $path .'components/footer.php';?>