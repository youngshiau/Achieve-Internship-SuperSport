<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * SuperSport theme.
 */

function supersport_preprocess_html(&$variables) {
  drupal_add_css('http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400', array('type' => 'external'));
}
?>
