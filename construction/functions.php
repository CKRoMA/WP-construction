<?php
add_action( 'wp_enqueue_scripts', function () {
	
	wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com');
	
	wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Flow+Circular&family=Poppins:wght@400;500;600;700&family=Roboto&family=Source+Sans+Pro:wght@400;700&display=swap"
		rel="stylesheet');
	wp_enqueue_style( 'style', get_template_directory_uri() . './assets/css/style.css');

	
	
} );





add_theme_support('post-thumbnails');        
add_theme_support('title-tag');
add_theme_support('custom-logo');
?>