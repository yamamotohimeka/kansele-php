<?php 
  $title = '女の子一覧';
  $templete = 'girls';
  $path = './';
  include $path .'components/header.php'; 
?>

<main class="main girls">
  <div class="container main-container">

    <h2 class="h2-title">
      <div class="h2-text">
        <p>Cast</p>
      </div>
      <img src="<?php echo $path; ?>assets/images/h2-cast.png" alt="">
    </h2>



    <nav class="girls__nav">
      <ul class="girls__nav__list">
        <?php include $path .'components/girlCard.php';?>
      </ul>
    </nav>
  </div>
</main>
<?php include $path .'components/footer.php';?>