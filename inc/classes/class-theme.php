<?php
/**
 * Bootstraps the Theme to WordPress.
 *
 * This class loads all other classes, and bootstraps the theme and theme
 * supports to WordPress.
 *
 * @package Astro
 */

namespace Astro\Inc;

use Astro\Inc\Traits\Singleton;

class Theme
{
    use Singleton;

    /**
     * Theme constructor instantiates all other theme classes and sets up wordpress hook.
     */
    protected function __construct()
    {
        // Load classes
        Assets::get_instance();
        Menus::get_instance();
//        Meta_Boxes::get_instance();
//        Tag_Widget::get_instance();
        Sidebars::get_instance();

        $this->set_hooks();
    }

    protected function set_hooks(): void
    {
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    /**
     * Setup theme function hooks into WordPress, add additional theme functionality here.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/
     */
    public function setup_theme(): void
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('automatic-feed-links');
        add_image_size('featured-thumbnail', 470, 354, true);
        add_theme_support(
            'html5',
            [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'script',
                'style',
            ]
        );
        add_theme_support(
            'custom-logo',
            [
                'header-text' => [
                    'site-title',
                    'site-description',
                ],
                'height'      => 35,
                'width'       => 290,
                'flex-height' => true,
                'flex-width'  => true,
            ]
        );

        /**
         * Set the maximum allowed width for any content in the theme,
         * like oEmbeds and images added to posts
         *
         * @see Content Width
         * @link https://codex.wordpress.org/Content_Width
         */
        global $content_width;
        if ( ! isset($content_width)) {
            $content_width = 930;
        }
    }
}
