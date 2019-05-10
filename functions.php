<?php

class Pagex_Blank_Theme {
	public function __construct() {
		add_action( 'widgets_init', array( $this, 'register_widget_areas') );
		add_action( 'after_setup_theme', array( $this, 'setup') );
	}

	public function register_widget_areas() {
		register_sidebar( array(
			'id' => 'sidebar-1', 
			'before_widget' => '<div id="%1$s" class="widget %2$s">', 
			'after_widget'  => '</div>',
			'description'   => 'Sidebar 1',
		));
		register_sidebar( array(
			'id' => 'sidebar-2', 
			'before_widget' => '<div id="%1$s" class="widget %2$s">', 
			'after_widget'  => '</div>',
			'description'   => 'Sidebar 2',
		));
	}

	public function setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );
		
		// add support for woocommerce and woocommerce gallery
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
    	add_theme_support( 'wc-product-gallery-lightbox' );
    	add_theme_support( 'wc-product-gallery-slider' );

    	// Add support for Block Styles
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images
		add_theme_support( 'align-wide' );

		// Add support for responsive embedded content
		add_theme_support( 'responsive-embeds' );

		// Enable support for Post Thumbnails on posts and pages
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location
		register_nav_menus( array(
			'menu-1' => 'Primary',
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
}

new Pagex_Blank_Theme();