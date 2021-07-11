<?php
/**
 * WordPress enqueue theme assets
 *
 * This class is responsible to register and enqueue custom javascript and css
 * files to the WordPress theme
 *
 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/
 *
 * @package Astro
 */

namespace Astro\Inc;

use Astro\Inc\Traits\Singleton;

class Assets
{
    use Singleton;

    protected function __construct()
    {
        $this->set_hooks();
    }

    protected function set_hooks(): void
    {
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
        load_theme_textdomain('astro', get_template_directory() . '/languages');
    }

    /**
     * Register custom css files here, which will hook into the WordPress site
     *
     * Use filemtime for versioning css, to stop caching in browser //TODO remove and change to semantic version number in production
     */
    public function register_styles(): void
    {
        wp_register_style('main-css', BUILD_CSS_URI . '/main.css', [], filemtime(BUILD_CSS_PATH . '/main.css'));
        wp_enqueue_style('main-css');
    }

    /**
     * Register custom javascript files here, which will hook into the WordPress site
     *
     * * Use filemtime for versioning javascript, to stop caching in browser //TODO remove and change to semantic version number in production
     */
    public function register_scripts(): void
    {
        wp_register_script(
            'main-js',
            BUILD_JS_URI . '/main.js',
            ['jquery'],
            filemtime(BUILD_JS_PATH . '/main.js'),
            'all'
        );
        wp_enqueue_script('main-js');
    }
}
