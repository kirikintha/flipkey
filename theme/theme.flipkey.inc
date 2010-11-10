<?php
/**
 * @file theme.flipkey.inc
 * Flipkey Theme
 * Handles all the theme functions
 * Version: 1.0
 */

//Flipkey Widget.
function template_preprocess_flipkey_widget(&$vars) {
  //Add in our JS and CSS
  flipkey::_loadJS();
  flipkey::_loadCSS();
  //Average Overall Rating output.
  //@todo max needs to be a system variable in the future.
  $vars['widget']['stats']['data'] = array(
    'width' => flipkey::_calculateRating(123, $vars['widget']['stats']['rating']),
    'max'   => 5,
  );
  //Loop through The reviews, and add in parameters for overall_rating information.
  foreach ($vars['widget']['reviews'] as $key => $review) {
    $vars['widget']['reviews'][$key]['data'] = array(
      'width' => flipkey::_calculateRating(100, $review['rating']),
      'max'   => 5,
    );
  }
  //kpr($vars);
}