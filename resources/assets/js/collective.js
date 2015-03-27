$(function()
{
  // gheading links
  $('article.docs').find('a[name]').each(function () {
    var anchor = $('<a href="#' + this.name + '">');
    $(this).parent().next('h2').wrapInner(anchor);
  });

  $('.dropdown-button').dropdown({
    constrain_width: false,
    belowOrigin: true
  });

  $('.button-collapse').sideNav();

  $('.tooltipped').tooltip();

  // To Top
  var $toTop = $('.to-top');

  $(window).scroll(function (event) {
    var scroll = $(this).scrollTop();

    if (scroll > 500) {
      $toTop.fadeIn();
    } else {
      $toTop.fadeOut();
    }
  });

  $toTop = $('.to-top').on('click', function() {
    $('html, body').animate({
      scrollTop: 0
    }, 800);
  });
});