<?php
/**
 * Created by PhpStorm.
 * User: jenny
 * Date: 15/04/2017
 * Time: 10:49
 */

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action( 'after_setup_theme', 'helf_after_setup_theme' );
function helf_after_setup_theme() {
	$hue = '300';
	if ( get_theme_mod('colorscheme_hue') !== $hue ) set_theme_mod( 'colorscheme_hue', $hue );
}