<?php

/*--------------------------------------Menu--------------------------------------*/
	function register_my_menu() {
	    register_nav_menu('header-menu',__( 'Menu chính' ));
	}
	add_action( 'init', 'register_my_menu' );

	// set upload image post admin
	add_theme_support('post-thumbnails');

	// Post Formats (Mo khoa chuc nang)
	add_theme_support('post-formats', array('aside', 'gallery', 'video'));

	// Search
	add_shortcode('wpbsearch', 'get_search_form');


/*--------------------------------------Sidebar------------------------------------*/
	function smw_widgets_init() {


	// Phone
	register_sidebar(array(
	'name' 	=> 'Phone',
	'id' 	=> 'phone',
	'before_widget' => '',
	'after_widget' =>'',
	'before_title' => '',
	'after_title' => ''
	));
	
 	//Menu sidebar
    register_sidebar( array(
    'name' => __( 'Menu Sidebar', 'smw' ),
    'id' => 'menu-sidebar',
    'description' => __( 'Menu Sidebar', 'smw' ),
    'before_widget' => '<div class="widget categories">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ) );

    //Tag
	register_sidebar(array(
	'name' 	=> 'Tag',
	'id' 	=> 'tags',
	'before_widget' => '<div class="widget tags">',
	'after_widget' =>'</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
	));

	//Gallery
	register_sidebar(array(
	'name' 	=> 'Gallery',
	'id' 	=> 'gallery',
	'before_widget' => '<div class="widget blog_gallery">',
	'after_widget' =>'</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
	));

	// Gioi thieu
	register_sidebar(array(
	'name' 	=> 'Category Footer',
	'id' 	=> 'category-footer',
	'before_widget' => '<div class="widget">',
	'after_widget' =>'</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
	));

	// Ho tro
	register_sidebar(array(
	'name' 	=> 'Hỗ trợ',
	'id' 	=> 'hotro',
	'before_widget' => '<div class="widget">',
	'after_widget' =>'</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
	));

	// Dich vu
	register_sidebar(array(
	'name' 	=> 'Dịch vụ',
	'id' 	=> 'dichvu',
	'before_widget' => '<div class="widget">',
	'after_widget' =>'</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
	));

	// Lien ket
	register_sidebar(array(
	'name' 	=> 'Liên kết',
	'id' 	=> 'lienket',
	'before_widget' => '<div class="widget">',
	'after_widget' =>'</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
	));

	// Footer menu
	register_sidebar(array(
	'name' 	=> 'Footer Menu',
	'id' 	=> 'footermenu',
	'before_widget' => '<ul class="pull-right">',
	'after_widget' =>'</ul>',
	'before_title' => '',
	'after_title' => ''
	));

 	}
 
	add_action( 'widgets_init', 'smw_widgets_init' );


/*----------------------------------------Logo-------------------------------------*/
	function themename_custom_logo_setup() {
	    $defaults = array(
	        'height'      => 100,
	        'width'       => 100,
	        'flex-height' => true,
	        'flex-width'  => true,
	        'header-text' => array( 'site-title', 'site-description' ),
	    );
	    add_theme_support( 'custom-logo', $defaults );
	}

	add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

/*
	function themeslug_theme_customizer( $wp_customize ) {
	    $wp_customize->add_setting( 'themeslug_logo' );
	}

	add_action( 'customize_register', 'themeslug_theme_customizer' );
*/
?>