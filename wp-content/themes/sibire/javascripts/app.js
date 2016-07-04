(function() {
  var e;
  $(function() {
    $("a.e-scroll-top").click(function() {
      return $("body,html").animate({
        scrollTop: 0
      }, 400)
    }), 
      
    r = 500,
    $(window).scroll(function() {
      return $("a.r-scroll-top").toggleClass("none", $(window).scrollTop() < r),
      $("a.r-scroll-top").toggleClass("absolute", $(this).scrollTop() + $(this).height() > $("#footer").offset().top)
    })

    $(".wpcf7-mail-sent-ok").click(function() { 
      $(".wpcf7-mail-sent-ok").fadeOut(300)
    })
  })
}).call(this);
