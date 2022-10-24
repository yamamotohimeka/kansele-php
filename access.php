<?php  
$title = 'アクセス';
$templete = 'access';
$path = './';
include $path .'components/header.php'; 
?>

<main class="access main">
  <div class="container">
    <h2 class="h2-title">
      <div class="h2-text">
        <p>Access</p>
      </div>
      <img src="<?php echo $path; ?>assets/images/h2-access.png" alt="">
    </h2>

    <nav class="access__nav">
      <ul class="access__nav__list">
        <?php include $path .'components/mapList.php';?>
      </ul>
    </nav>
  </div>
</main>
<?php include $path .'components/footer.php';?>