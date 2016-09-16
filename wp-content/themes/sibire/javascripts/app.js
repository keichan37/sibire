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
      $("a.r-scroll-top").toggleClass("absolute", $(this).scrollTop() + $(this).height() > $("#footer").offset().top),
      $(".r-fixed-box").toggleClass("fixed", $(this).scrollTop() + 30 > $(".e-fixed-box").offset().top),
      $(".r-fixed-box").toggleClass("absolute", $(this).scrollTop() + $(this).height() - 438 > $("#other-lists").offset().top)
    })

    $(".wpcf7-mail-sent-ok").click(function() { 
      $(".wpcf7-mail-sent-ok").fadeOut(300)
    })

    $('a[href^="#"]').click(function() {
      var speed = 400;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
     });

  })
}).call(this);

