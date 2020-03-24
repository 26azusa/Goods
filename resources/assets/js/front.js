/*==== スクロール アニメーション ====*/

$(function () {

  $(window).scroll(function () {
    var fadeTrigger = $('.js-trigger');
    $(fadeTrigger).each(function () {
      var scroll = $(window).scrollTop(),
        elemTop = $(this).offset().top,
        windowHeight = $(window).height();

      if (scroll > elemTop - 2 * windowHeight / 3) {
        $(this).find('.fade-elem-news').addClass('fade-up');
      }

      if (scroll > elemTop - windowHeight / 2) {
        $(this).find('.fade-elem').addClass('fade-up');
        $(this).find('.fade-elem-top').addClass('fade-up');
        $(this).find('.fade-elem-list').addClass('fade-up');
      }
    });
  });
  $(window).trigger('scroll');
});

/*==== ヘッダー ハンバーガーメニュー ====*/
$('.nav_toggle').on('click', function () {
  $('.nav_toggle, .nav_menu, .right-nav').toggleClass('show');
});
