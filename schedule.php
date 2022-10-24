<?php 
$title = 'スケジュール';
$templete = 'schedule';
$path = './';
include $path .'components/header.php'; ?>

<main class="main schedule">
  <div class="container main-container">

    <h2 class="h2-title">
      <div class="h2-text">
        <p>Schedule</p>
      </div>
      <img src="<?php echo $path; ?>assets/images/h2-schedule.png" alt="">
    </h2>

    <div class="schedule__btn">
      <ul class="schedule__btn__list">
        <?php 
            $date = "<li class='schedule__btn__list-link'>
          <div class='schedule__btn__list-link_date'>
            <div class='schedule__btn__list-link_month'></div>
            <div class='schedule__btn__list-link_day'></div>
          </div>
            <div class='schedule__btn__list-link_week'></div>
        </li>";
            echo str_repeat($date, 7);
          ?>
      </ul>
    </div>

    <nav class="schedule__nav">
      <ul class="schedule__nav__list">
        <?php include $path .'components/girlCard.php';?>
      </ul>
    </nav>
  </div>
</main>
<?php include $path .'components/footer.php';?>