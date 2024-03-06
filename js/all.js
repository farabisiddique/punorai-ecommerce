$(document).ready(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
        $('#btn-back-to-top').fadeIn();
      } else {
        $('#btn-back-to-top').fadeOut();
      }
    });
    // scroll body to 0px on click
    $('#btn-back-to-top').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 400);
      return false;
    });
  });