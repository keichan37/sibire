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
    loop: true,
    lazyLoad: true,
    nav: true,
    navText: ["<span class='icon icon-leftArrow'></span>","<span class='icon icon-rightArrow'></span>" ],
    items : 4,
    dots: false,
    autoHeight: true,
    responsiveClass: true,
    responsive:{
      0:{
        items: 1,
      },
      450:{
        items: 2,
      },
      768:{
        items: 4,
      }
    }
  });
});

(function() {
  var e;
  $(function() {
    $(window).scroll(function() {
      if ($('.single-service').length) {
        if ($(window).width() > 1100) {
          $(".r-fixed-box").toggleClass("fixed", $(this).scrollTop() + 60 > $(".e-fixed-box").offset().top),
          $(".r-fixed-box").toggleClass("absolute", $(this).scrollTop() + $(this).height() - 440 > $(".partials").offset().top)
        }
      }
    })
  })
}).call(this);
