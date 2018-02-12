<?php
/**
* The Evolution Framework
*
* WARNING: This file is part of the core Evolution Framework. DO NOT edit this file under any circumstances.
* Please do all modifications in the form of a child theme.
*
* Main Setup File
*
* @package Evolution\Setup\
* @author  Andreas Hecht
* @license GPL-2.0+
* @link    https://andreas-hecht.com/wordpress-themes/evolution-wordpress-framework/
*/



if ( ! function_exists( 'evolution_setup' ) ) :

function evolution_setup() {

	/**
	 * Set the content width based on the theme's design and stylesheet.
	 */
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 744;
	}

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on evolution, use a find and replace
	 * to change 'evolution' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'evolution', get_template_directory() . '/languages' );
    
    apply_filters( 'override_load_textdomain', true, 'evolution', get_template_directory() . '/languages/de_DE.mo' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
    
    
    /**
     * Add Support for Custom Backgrounds
     */ 
    add_theme_support( 'custom-background' );
    
    
/**
 * Adding Support for Yoast SEO Breadcrumbs.
 * 
 * @link https://kb.yoast.com/kb/add-theme-support-for-yoast-seo-breadcrumbs/
 */ 
    add_theme_support( 'yoast-seo-breadcrumbs' );
    
  
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
    add_image_size( 'evolution', 1120, 450, true );
    add_image_size( 'evolution-gallery', 300, 300, true );
    add_image_size( 'evolution-large', 1120, 500, true );
    add_image_size( 'evolution-medium', 482, 300, true );
    add_image_size( 'evolution-small', 80, 60, true );
    add_image_size( 'evolution-page', 1260, 350, true );

	// This theme uses wp_nav_menu() in two location.
	register_nav_menus( array(
		'primary'       => esc_html__( 'Main Navigation', 'evolution' ),
		'header-social' => esc_html__( 'Header Social Links', 'evolution' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'audio', 'gallery', 'video'
	) );

	// Setup the WordPress core custom header feature.
	add_theme_support( 'custom-header', apply_filters( 'evolution_custom_header_args', array(
		'default-image' => '',
		'width'         => 1260,
		'height'        => 350,
		'flex-height'   => true,
		'header-text'   => false,
	) ) );

	// This theme styles the visual editor to resemble the theme style.
	add_editor_style( array( 'css/normalize.css', 'style.css', 'css/editor-style.css' ) );
}
endif; // evolution_setup
add_action( 'after_setup_theme', 'evolution_setup' );