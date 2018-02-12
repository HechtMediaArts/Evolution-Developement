<?php
/**
 * The Evolution Framework.
 * 
 * Template: comments.php
 *
 * WARNING: This file is part of the core Evolution Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 * 
 * @see /inc/structure/markup/evolution-comments.php
 *
 * @package Evolution\Templates\
 * @author  Andreas Hecht
 * @license GPL-2.0+
 * @link https://andreas-hecht.com/wordpress-themes/evolution-wordpress-framework/
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && 'comments.php' === basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'Please do not load this page directly. Thank You!' );
}

if ( post_password_required() ) {
    printf( '<p class="alert">%s</p>', __( 'This post is password protected. Enter the password to view comments.', 'evolution' ) );
    return;
}
/**
 * Functions hooked in to comments action
 * 
 * @see /inc/structure/markup/evolution-comments.php
 *
 * @hooked  evolution_comments_top_markup() - 5
 * @hooked  evolution_have_comments() - 10
 * @hooked  evolution_comments_closed() - 30
 * @hooked  evolution_comment_form() - 40
 * @hooked  evolution_comments_bottom_markup() - 80
 */
do_action( 'evolution_do_comments' );