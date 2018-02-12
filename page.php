<?php
/**
 * The Evolution Framework.
 * 
 * Template: page.php
 *
 * WARNING: This file is part of the core Evolution Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Evolution\Templates\
 * @author  Andreas Hecht
 * @license GPL-2.0+
 * @link https://andreas-hecht.com/wordpress-themes/evolution-wordpress-framework/
 */

get_header();

// This hook is free for your actions
do_action( 'evolution_before_page' );

/**
 * Functions hooked in to 'evolution_do_page' action
 * 
 * @see /inc/structure/evolution-loops.php
 * @see /inc/structure/evolution-hooks.php
 * 
 * @hooked  evolution_top_markup - 5
 * @hooked  evolution_before_page_loop
 * @hooked evolution_do_page_loop() - 10
 * @hooked  evolution_after_page_loop
 * @hooked  evolution_bottom_markup - 30
 */
do_action( 'evolution_do_page' );

/**
 * Changes the sidebar output
 * 
 * If WooCommerce is installed, this function outputs the WooCommerce Sidebar
 * 
 * @see /inc/functions/frontend-functions.php
 * @hooked evolution_load_sidebar() - 10
 * 
 */ 
get_sidebar();


get_footer();
