$(function () {
  //一週間の曜日(英・日),日付,今日の日付取得
  moment.locale("en");
  const month = [];
  const day = [];
  const weeksEn = [];
  const weeksJa = new Array(7);
  const todayWeek = moment().format("ddd");
  [...Array(7)].map((_, id) => {
    month.push(moment().add(id, "days").format("M/"));
    day.push(moment().add(id, "days").format("DD"));
    weeksEn.push(moment().add(id, "days").format("ddd"));
  });
  weeksJa.splice(weeksEn.indexOf("Sun"), 1, "(日)");
  weeksJa.splice(weeksEn.indexOf("Mon"), 1, "(月)");
  weeksJa.splice(weeksEn.indexOf("Tue"), 1, "(火)");
  weeksJa.splice(weeksEn.indexOf("Wed"), 1, "(水)");
  weeksJa.splice(weeksEn.indexOf("Thu"), 1, "(木)");
  weeksJa.splice(weeksEn.indexOf("Fri"), 1, "(金)");
  weeksJa.splice(weeksEn.indexOf("Sat"), 1, "(土)");

  //今日のスタッフを表示
  $(`.${todayWeek}`).addClass("block");

  // 出勤情報のdate切り替え処理

  $(".schedule__btn__list-link_date").eq(0).addClass("dateActive");
  weeksEn.map((_, id) => {
    $(".schedule__btn__list-link_date").eq(id).addClass(weeksEn[id]);
    $(".schedule__btn__list-link_month").eq(id).text(month[id]);
    $(".schedule__btn__list-link_day").eq(id).text(day[id]);
    $(`.schedule__btn__list-link_date.${weeksEn[id]}`).on("click", (event) => {
      $(".schedule__btn__list-link_date").removeClass("dateActive");
      $(event.currentTarget).addClass("dateActive");
      $(".girlCard").removeClass("block");
      $(`.girlCard.${weeksEn[id]}`).addClass("block");
    });

    $(".schedule__btn__list-link_week").eq(id).addClass(weeksEn[id]);
    $(".schedule__btn__list-link_week").eq(id).text(weeksJa[id]);
  });

  //ハンバーガーメニュー
  $(`.header__tabButton`).on("click", (event) => {
    $(".header__tabNav").toggleClass("header__tabNav-active");
    $(".header__tabButton span").toggleClass("header__tabButton-active");
  });

  //Swiper初期化
  const mySwiper = new Swiper(".swiper", {
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay: 5000,
    },
  });
});
