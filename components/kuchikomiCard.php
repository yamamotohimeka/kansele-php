<?php require(dirname(__FILE__)."/../hooks/girls.php");?>
<?php foreach($girls as $girl):?>

<?php if ($girl['kuchikomi']): ?>

<div class="swiper-slide kuchikomiCard flex-low">

  <div class="kuchikomiCard-left">
    <div class="store-label">
      <p><?php echo $girl['store'];?></p>
    </div>
    <div class="kuchikomiCard-img">
      <img src="<?php echo $path; ?>/assets/images/girl<?php echo $girl['img'];?>.jpg" alt="関西セレクションの女の子の画像">
    </div>
  </div>

  <div class="kuchikomiCard-right">

    <div class="kuchikomiCard-info flex-low">
      <p class="kuchikomiCard-info-name">
        <?php echo $girl['name'];?> (<?php echo $girl['age'];?>)
      </p>
      <p class="kuchikomiCard-info-size">
        T<?php echo $girl['tall'];?>/B<?php echo $girl['bust'];?>.W<?php echo $girl['waist'];?>.H<?php echo $girl['height'];?>
      </p>
    </div>

    <div class="kuchikomiCard-review">
      <div class="kuchikomiCard-review-user flex-center">
        <img src="<?php echo $path; ?>assets/images/kuchikomi-user.png" alt="">
        <p><?php echo $girl['kuchikomi-name'];?></p>
      </div>
      <div class="kuchikomiCard-review-star">
        <p><?php echo $girl['kuchikomi-star'];?><span>
            <?php echo mb_strlen($girl['kuchikomi-star']);?>.0</span></p>
      </div>
    </div>

    <div class="kuchikomiCard-comment">
      <h3><?php echo $girl['kuchikomi-title'];?></h3>
      <p><?php echo $girl['kuchikomi-comment'];?></p>
    </div>
  </div>

</div>

<?php endif; ?>
<?php endforeach;?>