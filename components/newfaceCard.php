<?php require(dirname(__FILE__)."/../hooks/girls.php");?>
<?php foreach($girls as $girl):?>

<?php if ($girl['newface']): ?>

<li class="newfaceCard">
  <div class="store-label">
    <p><?php echo $girl['store'];?></p>
  </div>


  <div class="newfaceCard-img">
    <img src="<?php echo $path; ?>/assets/images/girl<?php echo $girl['img'];?>.jpg"
      alt="関西セレクションの女の子の画像">
  </div>
  <div class="newfaceCard-info">
    <p class="newfaceCard-name">
      <?php echo $girl['name'];?> (<?php echo $girl['age'];?>)
    </p>

    <p class="newfaceCard-size">
      T<?php echo $girl['tall'];?>/B<?php echo $girl['bust'];?>.W<?php echo $girl['waist'];?>.H<?php echo $girl['height'];?>
    </p>
  </div>
</li>

<?php endif; ?>
<?php endforeach;?>