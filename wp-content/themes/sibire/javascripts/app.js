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

