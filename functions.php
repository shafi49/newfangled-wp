<?php
//include functions-stylesheets.php
get_template_part ('functions', 'stylesheets'); 

//include functions-scripts.php
get_template_part ('functions', 'scripts'); 

//include wp_bootstrap_navwalker.php
get_template_part ('wp_bootstrap_navwalker'); 

//include functions-menus.php
get_template_part ('functions', 'menus'); 

/*
*****************
  Theme Support
*****************
*/

add_theme_support( 'post-thumbnails' );

//include functions-widgets.php 
get_template_part ( 'functions', 'widgets' ); 


?>