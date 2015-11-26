<?php 

//add navigation menu
function newfangled_register_menus () {
    if ( function_exists ( 'register_nav_menus' ) ) {
        register_nav_menus (
        array (
            'primary-menu' => __('Primary Menu'),
            'footer-menu' => __('Footer Menu')
        )
    );
    } //endif statement
} // newfangled_register_menus () ends

add_action ( 'init', 'newfangled_register_menus' );


function newfangled_display_menu () {

//args for wp_nav_menu ()
$args = array (
    'theme_location' => 'primary-menu',
    'menu' => 'Main Menu',
    'container' => false,
    'menu_class' => 'nav navbar-nav',
    'menu_id' => 'menu'
); //$args ends 

    wp_nav_menu ($args);

} //END



?>