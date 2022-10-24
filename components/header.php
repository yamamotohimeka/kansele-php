<?php 
$url = 'https://kansele.com/';

?>
<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo $title; ?> | 業界未経験多数の10代専門店！大阪 「関西セレクション」の公式WEBサイト</title>
  <meta name="description" content="業界未経験多数の10代専門店！大阪 「関西セレクション」の公式WEBサイト" />
  <link rel="canonical" href="/recruit/" />
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="関西セレクション" />
  <meta property="og:description" content="業界未経験多数の10代専門店！大阪 「関西セレクション」の公式WEBサイト" />
  <meta property="og:url" content="/" />
  <meta property="og:site_name" content="関西セレクション" />
  <meta property="og:image" content="<?php echo $path; ?>assets/images/OGP.png" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:image:type" content="image/png" />
  <meta name="twitter:card" content="summary_large_image" />


  <link rel="stylesheet" href="<?php echo $path; ?>assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="icon" href="<?php echo $path; ?>assets/images/favicon.ico" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Island+Moments&display=swap" rel="stylesheet">


  <?php if ($templete == 'policy' || $templete == 'rule'): ?>
  <meta name=" description" content="関西セレクション<?php echo $title; ?>のページです。業界未経験多数の10代専門店！大阪 「関西セレクション」の公式WEBサイト" />
  <?php elseif ($templete == 'beginners'): ?>
  <?php else: ?>
  <meta name="description" content="業界未経験多数の10代専門店！大阪 「関西セレクション」の公式WEBサイト" />
  <?php endif; ?>
</head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-421BZQSNW8"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
  dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-421BZQSNW8');
</script>
</head>


<body>
  <header class="header">
    <p class="header-bar">
      大阪　風俗　素人系　ホテルヘルス　関西セレクション
    </p>
    <div class="header-top">
      <div class="container">
        <div class="header-logo">
          <a href="<?php echo $path; ?>">
            <img src="<?php echo $path; ?>assets/images/header-logo.png" alt="関西セレクションのロゴ">
          </a>
        </div>
        <div class="header__label">
          <div class="header__label-tel">
            <a href="tel:0120-939-274">
              <img src="<?php echo $path; ?>assets/images/header-tel.png" alt="">
            </a>
          </div>
          <div class="header__label-hour">
            <img src="<?php echo $path; ?>assets/images/header-hour.png" alt="">
            <span>※24時以降はデリバリー対応</span>
          </div>
        </div>
        <div class="header__cosme">
          <img src="<?php echo $path; ?>assets/images/header-cosme.png" alt="">
        </div>
      </div>
    </div>

    <nav class="header__nav pc">
      <div class="container">
        <ul class="header__nav__list">
          <li class="header__nav__list-link">
            <a href="<?php echo $path; ?>">
              <p>Top</p>
              <p>トップ</p>
            </a>
          </li>
          <li class="header__nav__list-link">
            <a href="<?php echo $path; ?>girls">
              <p>Cast</p>
              <p>女の子一覧</p>
            </a>
          </li>
          <li class="header__nav__list-link">
            <a href="<?php echo $path; ?>schedule">
              <p>Schedule</p>
              <p>出勤情報</p>
            </a>
          </li>
          <li class="header__nav__list-link">
            <a href="<?php echo $path; ?>system">
              <p>System</p>
              <p>料金システム</p>
            </a>
          </li>
          <li class="header__nav__list-link">
            <a href="<?php echo $path; ?>access">
              <p>Access</p>
              <p>アクセス</p>
            </a>
          </li>
          <li class="header__nav__list-link">
            <a href="<?php echo $path; ?>recruit">
              <p>Recruit</p>
              <p>求人情報</p>
            </a>
          </li>
        </ul>
      </div>
    </nav>


    <div class="header__tabButton-bg tab">
    </div>

    <div class="header__tabButton tab">
      <span></span>
    </div>

    <nav class="header__tabNav tab">
      <div class="container">
        <ul class="header__tabNav__list">
          <li class="header__tabNav__list-link">
            <a href="<?php echo $path; ?>">
              <span>Top</span>
              トップ
            </a>
          </li>
          <li class="header__tabNav__list-link">
            <a href="<?php echo $path; ?>girls">
              <span>Cast</span>
              女の子一覧
            </a>
          </li>
          <li class="header__tabNav__list-link">
            <a href="<?php echo $path; ?>schedule">
              <span>Schedule</span>
              出勤情報
            </a>
          </li>
          <li class="header__tabNav__list-link">
            <a href="<?php echo $path; ?>system">
              <span>System</span>
              料金システム
            </a>
          </li>
          <li class="header__tabNav__list-link">
            <a href="<?php echo $path; ?>access">
              <span>Access</span>
              アクセス
            </a>
          </li>
          <li class="header__tabNav__list-link">
            <a href="<?php echo $path; ?>recruit">
              <span>Recruit</span>
              求人情報
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>