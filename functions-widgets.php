<?php 
//register sidebars 
function newfangled_theme_widget ( $name, $ID, $description ) {
    $args = array (
	'name'          => __( $name, 'newfangled' ),
	'id'            => $ID,
	'description'   => $description,
    'class'         => 'myWidget',
	'before_widget' => '<div class="widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<h5 class="widgetheading">',
	'after_title'   => '</h5>' );
    register_sidebar ($args);
}


//create
newfangled_theme_widget ( "Blog Page Sidebar", "blog", "Display at the side of the blog page");
//newfangled_theme_widget ( "Footer Widgets", "footerwidget_heading", "Display in the footer section", '<div class="col-lg-3">', '<h5 class="footerwidget_heading">');

//register different footer widgets
register_sidebar ( array (
	'name'          => __( "Footer Widgets", 'newfangled' ),
	'id'            => "footer",
	'description'   => "Display in the footer section",
    'class'         => 'myWidget',
	'before_widget' => '<div class="col-lg-3">',
	'after_widget'  => '</div>',
	'before_title'  => '<h5 class="footerwidget_heading">',
	'after_title'   => '</h5>' )) ;

?>