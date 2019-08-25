<?php
/**
 * Theme customizations
 *
 * @package   JoeDBlueLandingPageDemo
 * @author    Joe Domingo, Web Developer, UI/UX Engineer
 * @link      https://joedomingo.online
 * @copyright Copyright (c) 2019, Joe Domingo, Web Developer, UI/UX Engineer
 * @license   GPL-2.0+
 */



// Custom styles
function jdvlpd_enqueue_styles() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'fasthover-css', get_template_directory_uri() . '/css/fasthover.css' );
	wp_enqueue_style( 'popuo-box-css', get_template_directory_uri() . '/css/popuo-box.css' );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/css/font-awesome.css' );
	wp_enqueue_style( 'jquery-countdown-css', get_template_directory_uri() . '/css/jquery.countdown.css' );
	wp_enqueue_style( 'opensans-google-font', get_template_directory_uri() . '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' );
}
add_action( 'wp_enqueue_scripts', 'jdvlpd_enqueue_styles' );

// Custom JS
function jdvlpd_enqueue_scripts() {
  wp_enqueue_script( 'jquery-wmuslider-scripts', get_template_directory_uri() . '/jquery.wmuSlider.js', array(), '20151215', false );
  wp_enqueue_script( 'jquery-min-footer-scripts', get_template_directory_uri() . '/js/jquery.min.js', array(), '20151215', true );
  wp_enqueue_script( 'jquery-countdown-script', get_template_directory_uri() . '/js/jquery.countdown.js', array(), '20151215', true );
  wp_enqueue_script( 'bootstrap-3-1-1-scripts', get_template_directory_uri() . '/js/bootstrap-3.1.1.min.js', array(), '20151215', true );
  wp_enqueue_script( 'minicart-scripts', get_template_directory_uri() . '/js/minicart.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'jdvlpd_enqueue_scripts' );
