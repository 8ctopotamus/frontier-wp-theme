(function($) {
  var $homeFeatures = $('.features-section .card')
  if ($homeFeatures) $homeFeatures.matchHeight()

  var $things = $('.match-height') 
  $things.matchHeight()
})(jQuery)