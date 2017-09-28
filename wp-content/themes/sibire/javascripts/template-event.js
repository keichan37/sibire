(function() {
  var e;
  $(function() {
    
    var fadeSpeed = 4000;
    $('#cover')
      .animate({opacity: '1'}, fadeSpeed);

    $(window).scroll(function() {
      $("a.r-scroll-template-event").toggleClass("passive", $(this).scrollTop() + 1 > $("#overview").offset().top)
      $("a.r-scroll-overview").toggleClass("active", $(this).scrollTop() + 1 > $("#overview").offset().top)
      $("a.r-scroll-overview").toggleClass("passive", $(this).scrollTop() + 1 > $("#content1").offset().top)
      $("a.r-scroll-content1").toggleClass("active", $(this).scrollTop() + 1 > $("#content1").offset().top)
      $("a.r-scroll-content1").toggleClass("passive", $(this).scrollTop() + 1 > $("#company").offset().top)
      $("a.r-scroll-company").toggleClass("active", $(this).scrollTop() + 1 > $("#company").offset().top)
      $("a.r-scroll-company").toggleClass("passive", $(this).scrollTop() + 1 > $("#municipality").offset().top)
      $("a.r-scroll-municipality").toggleClass("active", $(this).scrollTop() + 1 > $("#municipality").offset().top)
      $("a.r-scroll-municipality").toggleClass("passive", $(this).scrollTop() + 1 > $("#information").offset().top)
      $("a.r-scroll-information").toggleClass("active", $(this).scrollTop() + 1 > $("#information").offset().top)
      $("a.r-scroll-information").toggleClass("passive", $(this).scrollTop() + 1 > $("#map").offset().top)
      $("a.r-scroll-map").toggleClass("active", $(this).scrollTop() + 1 > $("#map").offset().top)
      $("a.r-scroll-map").toggleClass("passive", $(this).scrollTop() + 1 > $("#cooperate").offset().top)
      $("a.r-scroll-cooperate").toggleClass("active", $(this).scrollTop() + 1 > $("#cooperate").offset().top)
    });
  })
}).call(this);
