<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
$is_dev = (isset($_GET["mode"]) && $_GET["mode"] == "dev") ? true : false;
if ($is_dev) {
	ini_set('display_startup_errors',1);
	ini_set('display_errors',1);
	error_reporting(-1);
}
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
