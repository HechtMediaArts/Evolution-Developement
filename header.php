<?php
/**
 * The Evolution Framework.
 * 
 * Template: header.php
 *
 * WARNING: This file is part of the core Evolution Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 * 
 * @see /inc/structure/markup/evolution-header.php
 *
 * @package Evolution\Templates\
 * @author  Andreas Hecht
 * @license GPL-2.0+
 * @link https://andreas-hecht.com/wordpress-themes/evolution-wordpress-framework/
 */

/**
 * Outputs the meta markup for the header
 * 
 * @hooked evolution_meta() - 5
 * 
 * @since 1.0.0
 */
do_action( 'evolution_do_meta' );


/**
 * Functions hooked in to 'evolution_do_header' action
 * 
 * @see /inc/structure/markup/evolution-header.php
 * 
 * @hooked  evolution_header_top_markup - 5
 * @hooked  evolution_branding - 10
 * @hooked  evolution_navigation - 20
 * @hooked  evolution_header_image - 30
 * @hooked evolution_header_bottom_markup - 50
 */
do_action( 'evolution_do_header' );


// This is a hook for your actions
do_action( 'evolution_after_header' );


if ( is_front_page() || is_page() || is_home() ) : 

get_template_part( 'section', 'intro' ); 

endif;



do_action( 'evolution_do_content_open' );



if ( function_exists( 'yoast_breadcrumb' ) ) : 
/**
 * Outputs Yoast SEO Breadcrumbs, if Yoast SEO is installed
 * 
 * @since 1.0.0
 */
yoast_breadcrumb( '<div id="breadcrumbs">','</div>' ); 

else: 

echo '<div class="distance"></div>';

endif;
