<?php

function newfangled_register_enqueue_scripts () {
    
    //jquery easing
    wp_register_script ('jquery_easing_js', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array ('jquery'), '', true);
    wp_enqueue_script ('jquery_easing_js');
    
    //bootstrap main javascript
    wp_register_script ('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array ('jquery', 'jquery_easing_js'), '', true);
    wp_enqueue_script ('bootstrap_js');

    //jquery fancybox pack
    wp_register_script ('fancybox-pack_js', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array ('jquery', 'jquery_easing_js'), '', true);
    wp_enqueue_script ('fancybox-pack_js');

    //jquery fancybox media
    wp_register_script ('fancybox-media_js', get_template_directory_uri() . '/js/jquery.fancybox-media.js', array ('jquery', 'jquery_easing_js', 'fancybox-pack_js'), '', true);
    wp_enqueue_script ('fancybox-media_js');

    //google code prettify
    wp_register_script ('googlecode-prettify_js', get_template_directory_uri() . '/js/google-code-prettify/prettify.js', array ( 'jquery' ), '', true);
    wp_enqueue_script ('googlecode-prettify_js');

    //jquery quicksand
    wp_register_script ('jquery-quicksand_js', get_template_directory_uri() . '/js/portfolio/jquery.quicksand.js', array ( 'jquery' ), '', true);
    wp_enqueue_script ('jquery-quicksand_js');

    //portfolio settings
    wp_register_script ('portfolio-settings_js', get_template_directory_uri() . '/js/portfolio/setting.js', array ( 'jquery', 'jquery-quicksand_js' ), '', true);
    wp_enqueue_script ('portfolio-settings_js');

    //jquery flexslider
    wp_register_script ('flexslider_js', get_template_directory_uri() . '/js/jquery.flexslider.js', array ( 'jquery', 'jquery_easing_js' ), '', true);
    wp_enqueue_script ('flexslider_js');

    //animate js
    wp_register_script ('animate_js', get_template_directory_uri() . '/js/animate.js', array ( 'jquery', 'jquery_easing_js' ), '', true);
    wp_enqueue_script ('animate_js');

    //custom js
    wp_register_script ('custom_js', get_template_directory_uri() . '/js/custom.js', array ( 'jquery', 'jquery_easing_js', 'bootstrap_js', 'animate_js'), '', true);
    wp_enqueue_script ('custom_js');

} // END

//add_action
add_action ('wp_enqueue_scripts', 'newfangled_register_enqueue_scripts');


?>