<?php require(dirname(__FILE__)."/../hooks/girls.php");?>
<?php foreach($girls as $girl):?>

<?php if ($girl['pickup']): ?>

<li class="pickupCard">
  <div class="store-label">
    <p><?php echo $girl['store'];?></p>
  </div>

  <div class="pickupCard-img">
    <img src="<?php echo $path; ?>/assets/images/girl<?php echo $girl['img'];?>.jpg"
      alt="関西セレクションの女の子の画像">
  </div>

  <p class="pickupCard-name">
    <?php echo $girl['name'];?> (<?php echo $girl['age'];?>)
  </p>

  <p class="pickupCard-size">
    T<?php echo $girl['tall'];?>/B<?php echo $girl['bust'];?>.W<?php echo $girl['waist'];?>.H<?php echo $girl['height'];?>
  </p>
</li>

<?php endif; ?>
<?php endforeach;?>