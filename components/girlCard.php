<?php 
require(dirname(__FILE__)."/../hooks/girls.php");
foreach($girls as $girl):?>

<li class="
    girlCard
    <?php if ($templete !== 'girls'){ echo 'none'; } ?>
    <?php if($girl['sun']) echo 'Sun';?>
    <?php if($girl['mon']) echo 'Mon';?>
    <?php if($girl['tue']) echo 'Tue';?>
    <?php if($girl['wed']) echo 'Wed';?>
    <?php if($girl['thu']) echo 'Thu';?>
    <?php if($girl['fri']) echo 'Fri';?>
    <?php if($girl['sat']) echo 'Sat';?>
    ">
  <div class="store-label">
    <p><?php echo $girl['store'];?></p>
  </div>


  <div class="girlCard-img 
  <?php if($girl['premium']) echo $girl['premium-type'];?>">
    <img src="<?php echo $path; ?>/assets/images/girl<?php echo $girl['img'];?>.jpg" alt="関西セレクションの女の子の画像">
  </div>

  <p class="girlCard-name">
    <?php echo $girl['name'];?> (<?php echo $girl['age'];?>)
  </p>
  <p class="girlCard-size">
    T<?php echo $girl['tall'];?>/B<?php echo $girl['bust'];?>.W<?php echo $girl['waist'];?>.H<?php echo $girl['height'];?>
  </p>
  <?php if ($templete !== 'girls') :?>
  <p class="girlCard-time">
    <?php echo $girl['time'];?>
  </p>
  <?php endif; ?>
</li>

<?php endforeach;?>