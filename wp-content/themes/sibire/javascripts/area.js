(function() {
  $(function() {
    $(window).scroll(function() {

      $(".r-fixed-box").toggleClass("fixed", $(this).scrollTop() + 30 > $(".e-fixed-box").offset().top),
      $(".r-fixed-box").toggleClass("absolute", $(this).scrollTop() + $(this).height() - 438 > $("#footer").offset().top)
      
      // 北海道
      $("h2.r-fixed-title-hokkaido").toggleClass("fixed", $(this).scrollTop() > $("#e-fixed-title-hokkaido").offset().top),
      $(".r-fixed-padding-hokkaido").toggleClass("padding", $(this).scrollTop() > $("#e-fixed-title-hokkaido").offset().top),
      $("h2.r-fixed-title-hokkaido").toggleClass("absolute", $(this).scrollTop() + 30 > $("#e-absolute-title-hokkaido").offset().top)

      // 東北
      //$("h2.r-fixed-title-tohoku").toggleClass("fixed", $(this).scrollTop() > $("#e-fixed-title-tohoku").offset().top),
      //$(".r-fixed-padding-tohoku").toggleClass("padding", $(this).scrollTop() > $("#e-fixed-title-tohoku").offset().top),
      //$("h2.r-fixed-title-tohoku").toggleClass("absolute", $(this).scrollTop() + 30 > $("#e-absolute-title-tohoku").offset().top)

      // 関東
      $("h2.r-fixed-title-kanto").toggleClass("fixed", $(this).scrollTop() > $("#e-fixed-title-kanto").offset().top),
      $(".r-fixed-padding-kanto").toggleClass("padding", $(this).scrollTop() > $("#e-fixed-title-kanto").offset().top),
      $("h2.r-fixed-title-kanto").toggleClass("absolute", $(this).scrollTop() + 30 > $("#e-absolute-title-kanto").offset().top)

      // 北陸・甲信越
      //$("h2.r-fixed-title-hokuriku").toggleClass("fixed", $(this).scrollTop() > $("#e-fixed-title-hokuriku").offset().top),
      //$(".r-fixed-padding-hokuriku").toggleClass("padding", $(this).scrollTop() > $("#e-fixed-title-hokuriku").offset().top),
      //$("h2.r-fixed-title-hokuriku").toggleClass("absolute", $(this).scrollTop() + 30 > $("#e-absolute-title-hokuriku").offset().top)

      // 東海
      $("h2.r-fixed-title-tokai").toggleClass("fixed", $(this).scrollTop() > $("#e-fixed-title-tokai").offset().top),
      $(".r-fixed-padding-tokai").toggleClass("padding", $(this).scrollTop() > $("#e-fixed-title-tokai").offset().top),
      $("h2.r-fixed-title-tokai").toggleClass("absolute", $(this).scrollTop() + 30 > $("#e-absolute-title-tokai").offset().top)

      // 関西
      $("h2.r-fixed-title-kansai").toggleClass("fixed", $(this).scrollTop() > $("#e-fixed-title-kansai").offset().top),
      $(".r-fixed-padding-kansai").toggleClass("padding", $(this).scrollTop() > $("#e-fixed-title-kansai").offset().top),
      $("h2.r-fixed-title-kansai").toggleClass("absolute", $(this).scrollTop() + 30 > $("#e-absolute-title-kansai").offset().top)

      // 中国
      //$("h2.r-fixed-title-chugoku").toggleClass("fixed", $(this).scrollTop() > $("#e-fixed-title-chugoku").offset().top),
      //$(".r-fixed-padding-chugoku").toggleClass("padding", $(this).scrollTop() > $("#e-fixed-title-chugoku").offset().top),
      //$("h2.r-fixed-title-chugoku").toggleClass("absolute", $(this).scrollTop() + 30 > $("#e-absolute-title-chugoku").offset().top)

      // 四国
      //$("h2.r-fixed-title-shikoku").toggleClass("fixed", $(this).scrollTop() > $("#e-fixed-title-shikoku").offset().top),
      //$(".r-fixed-padding-shikoku").toggleClass("padding", $(this).scrollTop() > $("#e-fixed-title-shikoku").offset().top),
      //$("h2.r-fixed-title-shikoku").toggleClass("absolute", $(this).scrollTop() + 30 > $("#e-absolute-title-shikoku").offset().top)

      // 九州・沖縄
      $("h2.r-fixed-title-kyushu").toggleClass("fixed", $(this).scrollTop() > $("#e-fixed-title-kyushu").offset().top),
      $(".r-fixed-padding-kyushu").toggleClass("padding", $(this).scrollTop() > $("#e-fixed-title-kyushu").offset().top),
      $("h2.r-fixed-title-kyushu").toggleClass("absolute", $(this).scrollTop() + 30 > $("#e-absolute-title-kyushu").offset().top)

    })
  })
}).call(this);
