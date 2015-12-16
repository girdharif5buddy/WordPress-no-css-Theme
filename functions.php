<?php
register_nav_menus( array(
		'Mainmenu' => __( 'Main Menu', 'snvinfotech' ),
		'Footermenu' => __( 'Footer Menu', 'snvinfotech' ),
	) );

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
add_theme_support( 'post-thumbnails' );
 ?>
