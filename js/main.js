(function($) {
  var $body = $('body')
  // hompage stuff
  if ($body.hasClass('home')) { 
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


  function toggleDropdown (e) {
    const _d = $(e.target).closest('.dropdown'),
      _m = $('.dropdown-menu', _d);
    setTimeout(function(){
      const shouldOpen = e.type !== 'click' && _d.is(':hover');
      _m.toggleClass('show', shouldOpen);
      _d.toggleClass('show', shouldOpen);
      $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
    }, e.type === 'mouseleave' ? 300 : 0);
  }
  
  $body
    .on('mouseenter mouseleave','.dropdown',toggleDropdown)
    .on('click', '.dropdown-menu a', toggleDropdown);
})(jQuery)