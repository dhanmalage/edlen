<?php

function edlen_setup() {

	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support('automatic-feed-links');

	// This theme supports a variety of post formats.
	//add_theme_support('post-formats', array('aside', 'image', 'link', 'quote', 'status'));
	
	// Register Navigation
	register_nav_menus(array('primary' => 'Primary Navigation'));

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'edlen_setup');

function edlen_scripts() {
	wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css');
	wp_enqueue_style('main-style', get_stylesheet_uri());

	wp_enqueue_script('function', get_template_directory_uri().'/js/functions.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'edlen_scripts');

// Include Custom Post-types for Wordpress
//include 'inc/ctp.php';

// Bootstrap navwalker
//require_once 'inc/wp-bootstrap-navwalker.php';

