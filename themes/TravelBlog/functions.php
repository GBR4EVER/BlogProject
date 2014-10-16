<?php
function foundation_scripts(){
  wp_deregister_script('jquery');

  wp_register_script('modernizer',  get_template_directory_uri().'/js/vendor/modernizr.js', true);
  wp_register_script('jquery','http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js', true); 
  wp_register_script('fastclick',  get_template_directory_uri().'/js/vendor/fastclick.js', true); 
  wp_register_script('foundation-main', get_template_directory_uri().'/js/foundation/foundation.js', true);
  wp_register_script('foundation-topbar', get_template_directory_uri().'/js/foundation/foundation.topbar.js', true);  
  
  wp_enqueue_script('modernizer');
  wp_enqueue_script('jquery');
  wp_enqueue_script('fastclick');
  wp_enqueue_script('foundation-main');
  wp_enqueue_script('foundation-topbar');
}

add_action('wp_enqueue_scripts', 'foundation_scripts');

?>