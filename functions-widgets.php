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
newfangled_theme_widget ( "Blog Page Sidebar", "blog", "Display at the side of the blog page" );
newfangled_theme_widget ( "Footer Widgets", "footerWidgets", "Display in the footer section" );

?>