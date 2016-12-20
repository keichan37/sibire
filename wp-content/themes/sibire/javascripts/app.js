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
    });

    $('a[href^="#"]').click(function() {
      var speed = 400;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
     });
 
    $("a.e-toggle-global_menu").click(function() {
      $("#menu-global_menu").toggleClass("open");
    });

  })
}).call(this);

$(document).ready(function() {
  $(".owl-carousel").owlCarousel({
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 8000,
    loop: true,
    nav: false,
    navText: ["前","次" ],
    items : 3,
    responsive: {
      0: { items: 1 },
      450: { items: 2 },
      768: { items: 3 }
    }
  });
});
$(document).ready(function() {
  $(".other-recruit").owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    navText: ["","" ],
    items : 4,
    responsive: {
      0: { items: 1 },
      450: { items: 3 },
      768: { items: 4 }
    }
  });
});
