<?php 

function lalegetdanza_preprocess_html(&$vars) {
  $vars['classes_array'][] = strip_tags(strtolower(drupal_get_title()));
}

