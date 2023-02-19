<?php 
add_theme_support( 'menus' );

add_action( 'init', 'register_my_menus' );

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'headerMenu' ),
			
        )
    );
}
/* Register Custom Navigation Walker*/
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
//enable  post-thumbnails
add_theme_support( 'post-thumbnails' );