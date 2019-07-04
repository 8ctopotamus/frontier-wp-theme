(function($) {
  // hompage stuff
  if ($('body').hasClass('home')) { 
    var $slideImgs = $('.slides img')   
    function changeSlideHeight(mq) {
      if (mq.matches) {
        $slideImgs.css('min-height', 400)
      } else {
        $slideImgs.css('min-height', 700)
      }
    }
    var mq = window.matchMedia("(max-width: 700px)")
    changeSlideHeight(mq)
    mq.addListener(changeSlideHeight)

    // make all cards on homepage the same height
    var $homeFeatures = $('.features-section .card')
    if ($homeFeatures) $homeFeatures.matchHeight()
  }

  // site-wide
  // make anything with this class the same height
  var $thingsToMatchHeight = $('.match-height') 
  $thingsToMatchHeight.matchHeight()
})(jQuery)