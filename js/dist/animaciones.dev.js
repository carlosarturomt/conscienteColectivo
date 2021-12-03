"use strict";

$(window).scroll(function () {
  $('#fadeIn0').each(function () {
    var imagePos = $(this).offset().top;
    var topOfWindow = $(window).scrollTop();

    if (imagePos < topOfWindow + 900) {
      $(this).addClass("fadeIn");
    }
  });
});
$(window).scroll(function () {
  $('#fadeIn1').each(function () {
    var imagePos = $(this).offset().top;
    var topOfWindow = $(window).scrollTop();

    if (imagePos < topOfWindow + 900) {
      $(this).addClass("fadeIn");
    }
  });
});
$(window).scroll(function () {
  $('#fadeIn2').each(function () {
    var imagePos = $(this).offset().top;
    var topOfWindow = $(window).scrollTop();

    if (imagePos < topOfWindow + 900) {
      $(this).addClass("fadeIn");
    }
  });
});
$(window).scroll(function () {
  $('#fadeIn3').each(function () {
    var imagePos = $(this).offset().top;
    var topOfWindow = $(window).scrollTop();

    if (imagePos < topOfWindow + 900) {
      $(this).addClass("fadeIn");
    }
  });
});