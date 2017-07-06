<?php
/**
 * Autoloader.
 *
 * @package RacquetPress\Groundstrokes\functions
 * @since   1.0.0
 * @author: marybaum
 * @link    http://racquetpress.com
 * @license GNU GPL 2.0+
 */
namespace RacquetPress\Groundstrokes\functions;

//* Setup Theme
include_once( get_stylesheet_directory() . '/lib/theme-defaults.php' );

//* Add Image upload and Color select to WordPress Theme Customizer
require_once( get_stylesheet_directory() . '/lib/customize.php' );

//* Include Customizer CSS
include_once( get_stylesheet_directory() . '/lib/css-handler.php' );