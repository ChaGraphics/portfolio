<?php
remove_action("wp_head", "wp_generator");
add_action('get_header', 'my_filter_head');
function my_filter_head() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}
function load_styles(){	
	wp_register_style('style',get_template_directory_uri() . '/style.css',array(),date('Ymd'),'all');		
	wp_register_style(		'superslides',get_template_directory_uri().'/superslides.css',array(),date('Ymd'),'all');
	wp_enqueue_style( 'style' );		
	wp_enqueue_style( 'superslides' );
}
add_action( 'wp_enqueue_scripts', 'load_styles' );
function load_scripts(){
	wp_deregister_script('jquery');
	wp_register_script(	'jquery', get_template_directory_uri().'/js/jquery-2.1.4.min.js',array(),date('Ymd'),true);
	wp_register_script(	'animate-enhanced',	get_template_directory_uri().'/js/animate-enhanced.min.js',array( 'jquery' ),date('Ymd'),true);
	wp_register_script('superslides', get_template_directory_uri() . '/js/superslides.min.js',array( 'jquery'),date('Ymd'),true);
	wp_register_script('triggers',get_template_directory_uri().'/js/triggers.js',array( 'jquery' ),date('Ymd'),true);
	wp_enqueue_script('jquery');			
	wp_enqueue_script('animate-enhanced');	
	wp_enqueue_script('superslides');		
	wp_enqueue_script('triggers');
}			
add_action( 'wp_enqueue_scripts', 'load_scripts' );
