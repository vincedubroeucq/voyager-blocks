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


/**
 * Returns the page title, depending on context
 * 
 * @return  string  $title  Page title.
 */
function voyager_hero_title(){
    $title = single_post_title( '', false );
    if ( is_archive() ){
        $title = get_the_archive_title();
    }
    if( is_front_page() ){
        $title = get_bloginfo( 'name' );
    }
    return apply_filters( 'voyager_hero_title', $title );
}