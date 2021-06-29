<?php
/**
 * WordPress theme functions
 *
 * This is where you add unique features to your WordPress theme. It can be used
 * to hook into the core functions of WordPress to make your theme more modular,
 * extensible, and functional. Functions and methods are extracted under /inc
 * to class files and helpers for better code readability
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astro
 */

use Astro\Inc\Theme;

if ( ! defined('DIR_PATH')) {
    define('DIR_PATH', untrailingslashit(get_template_directory()));
}

if ( ! defined('DIR_URI')) {
    define('DIR_URI', untrailingslashit(get_template_directory_uri()));
}

if ( ! defined('BUILD_CSS_PATH')) {
    define('BUILD_CSS_PATH', untrailingslashit(get_template_directory()) . '/assets/build/css');
}

if ( ! defined('BUILD_CSS_URI')) {
    define('BUILD_CSS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/css');
}

if ( ! defined('BUILD_JS_PATH')) {
    define('BUILD_JS_PATH', untrailingslashit(get_template_directory()) . '/assets/build/js');
}

if ( ! defined('BUILD_JS_URI')) {
    define('BUILD_JS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/js');
}

if ( ! defined('IMG_URI')) {
    define('IMG_URI', untrailingslashit(get_template_directory_uri()) . '/assets/src/img');
}

require_once DIR_PATH . '/inc/helpers/autoloader.php';
require_once DIR_PATH . '/inc/helpers/template-tags.php';

function astro_get_theme_instance()
{
    Theme::get_instance();
}

astro_get_theme_instance();
