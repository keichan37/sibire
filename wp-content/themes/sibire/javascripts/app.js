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

$(function(){
  var getHeight = $('body').height();
   $(window).scroll(function () {
   if ($('.scroll-cover').length) {
     var ScrollTop = $(document).scrollTop();
     var bgPosition = 95/getHeight*ScrollTop+10;

     $('.scroll-cover').css(
      {backgroundPositionY: bgPosition+"%"}
     );
   }
 });
});

