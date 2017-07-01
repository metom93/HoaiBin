<?php

	require_once('wp-bootstrap-navwalker.php');

	function wpb_theme_setup(){
		// set upload image post admin
		add_theme_support('post-thumbnails');

		// Menu
		register_nav_menus(array(
			'primary' => __('Primary Menu')
		));

		// Post Formats (Mo khoa chuc nang)
		add_theme_support('post-formats', array('aside', 'gallery'));
	}

	add_action('after_setup_theme','wpb_theme_setup');

	// 
	function set_excerpt_length(){
		return 45;
	}

	add_filter('excerpt_length', 'set_excerpt_length');

	// Widget Locations
	function wpb_init_widgets($id){
		
		// tags
		register_sidebar(array(
			'name' 	=> 'Sidebar',
			'id' 	=> 'sidebar',
			'before_widget' => '<div class="widget tags">', // Lay tu div class tai html
			'after_widget' =>'</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
			));
		

		register_sidebar(array(
			'name' 	=> 'Box1',
			'id' 	=> 'box1',
			'before_widget' => '<div class="media-body">', // Lay tu div class tai html
			'after_widget' =>'</div>',
			'before_title' => '<h3 class="media-heading">',
			'after_title' => '</h3>'
			));


			register_sidebar(array(
			'name' 	=> 'Box2',
			'id' 	=> 'box2',
			'before_widget' => '<div class="media-body">', // Lay tu div class tai html
			'after_widget' =>'</div>',
			'before_title' => '<h3 class="media-heading">',
			'after_title' => '</h3>'
			));

			register_sidebar(array(
			'name' 	=> 'Box3',
			'id' 	=> 'box3',
			'before_widget' => '<div class="media-body">', // Lay tu div class tai html
			'after_widget' =>'</div>',
			'before_title' => '<h3 class="media-heading">',
			'after_title' => '</h3>'
			));

			register_sidebar(array(
			'name' 	=> 'Box4',
			'id' 	=> 'box4',
			'before_widget' => '<div class="media-body">', // Lay tu div class tai html
			'after_widget' =>'</div>',
			'before_title' => '<h3 class="media-heading">',
			'after_title' => '</h3>'
			));

			register_sidebar(array(
			'name' 	=> 'Box5',
			'id' 	=> 'box5',
			'before_widget' => '<div class="media-body">', // Lay tu div class tai html
			'after_widget' =>'</div>',
			'before_title' => '<h3 class="media-heading">',
			'after_title' => '</h3>'
			));

			register_sidebar(array(
			'name' 	=> 'Box6',
			'id' 	=> 'box6',
			'before_widget' => '<div class="media-body">', // Lay tu div class tai html
			'after_widget' =>'</div>',
			'before_title' => '<h3 class="media-heading">',
			'after_title' => '</h3>'
			));
	}

	add_action('widgets_init', 'wpb_init_widgets');

	// font

	function enqueue_our_required_stylesheets(){
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
	}
	add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

	// Customizer file
	require get_template_directory(). '/inc/customizer.php';
?>