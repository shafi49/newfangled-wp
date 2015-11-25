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


?>