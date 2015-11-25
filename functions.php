<?php
//enqueue main stylesheet
function newfangled_enqueue_style () {

        /* === Bootstrap main CSS === */
    wp_enqueue_style ('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');

        /* === Fancybox main CSS === */
    wp_enqueue_style ('fancybox_css', get_template_directory_uri() . '/css/fancybox/jquery.fancybox.css');

        /* === jQuery carousel main CSS === */
    wp_enqueue_style ('carousel_css', get_template_directory_uri() . '/css/jcarousel.css');

        /* === flexslider main CSS === */
    wp_enqueue_style ('flexslider_css', get_template_directory_uri() . '/css/flexslider.css');

} //END

//add_action
add_action ('wp_enqueue_scripts', 'newfangled_enqueue_style');



//enqueue stylesheets (included in stylesheets itself)
function newfangled_enqueue_embeded_style () {

    /* === Google Web Font === */
    wp_enqueue_style ('googleFont', 'http://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700');
    
    /* === prettify === */
    wp_enqueue_style ('prettify', get_template_directory_uri() . '/js/google-code-prettify/prettify.css');
    
    /* === fontawesome === */
    wp_enqueue_style ('fontAwesome', get_template_directory_uri() . '/css/font-awesome.css');

    /* === custom icon === */
    wp_enqueue_style ('custom-fonts_css', get_template_directory_uri() . '/css/custom-fonts.css');

    /* ==== overwrite bootstrap standard ==== */
    wp_enqueue_style ('overwrite_css', get_template_directory_uri() . '/css/overwrite.css');

    /* ==== animate css ==== */
    wp_enqueue_style ('animate_css', get_template_directory_uri() . '/css/overwrite.css');
    
    /* === main CSS === */
    wp_enqueue_style ('style_css', get_template_directory_uri() . '/style.css');

    /* === Theme skin ===*/
    wp_enqueue_style ('default_css', get_template_directory_uri() . '/skins/default.css');

} //END

//add_action
add_action ('wp_enqueue_scripts', 'newfangled_enqueue_embeded_style');



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