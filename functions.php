<?php
/**
 * Theme functions
 */

add_action( 'wp_enqueue_scripts', 'voyager_enqueue_scripts' );
/**
 * Enqueue theme stylesheet
 */
function voyager_enqueue_scripts(){
    wp_enqueue_style( 'voyager', get_parent_theme_file_uri( 'style.css' ), array(), wp_get_theme()->get( 'Version' ) );
}