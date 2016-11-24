(function() {
  var e;
  $(function() {
    $(window).scroll(function() {
      if ($('#other-lists').length) {
        $(".r-fixed-box").toggleClass("fixed", $(this).scrollTop() + 30 > $(".e-fixed-box").offset().top),
        $(".r-fixed-box").toggleClass("absolute", $(this).scrollTop() + $(this).height() - 438 > $("#other-lists").offset().top)
      }
    })
  })
}).call(this);

