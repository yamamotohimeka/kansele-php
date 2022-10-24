<?php
require(dirname(__FILE__)."/../hooks/maps.php");
foreach($maps as $map):?>
<li class="mapList">
  <p class="mapList-store">
    関西セレクション<?php echo $map['store'];?>へのアクセス
  </p>
  <p class="mapList-text">
    ご利用が初めてのお客様は<?php echo $map['desc'];?>からお電話下さい。
  </p>
  <div class="mapList-img">
    <img src="<?php echo $path; ?>/assets/images/map<?php echo $map['id'];?>.png" alt="関西セレクションの店舗マップ">
  </div>

  <div class="mapList-address">
    <?php echo $map['address'];?>
  </div>

</li>
<?php endforeach;?>