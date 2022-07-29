<?php
/* Support Logo */
function SC_theme_prefix_setup(){
	add_theme_support('custom-logo');
}
add_action('after_setup_theme','SC_theme_prefix_setup');

/* Support Thumbnails */
defined('ABSPATH') or die('');

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('html5');
    add_theme_support('post-thumbnails');  	
    add_theme_support( 'wp-block-styles' );
});

add_filter('upload_mimes', function($mimes){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
});


/* MENU */
register_nav_menus(['header-menu-desk'=>'Menu desktop']);
register_nav_menus(['header-menu-mob'=>'Menu mobile']);
register_nav_menus(['footer-menu-res'=>'Menu footer']);


