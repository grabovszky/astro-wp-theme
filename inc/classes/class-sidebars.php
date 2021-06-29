<?php
/**
 * Register custom WordPress sidebars to include them in the theme.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/
 *
 * @package Astro
 */

namespace Astro\Inc;

use Astro\Inc\Traits\Singleton;

class Sidebars
{
    use Singleton;

    protected function __construct()
    {
        $this->set_hooks();
    }

    protected function set_hooks(): void
    {
        add_action('widgets_init', [$this, 'register_sidebars']);
    }

    public function register_sidebars(): void
    {
        register_sidebar(
            [
                'name'          => __('Sidebar', 'astro'),
                'id'            => 'sidebar-1',
                'description'   => __('Main sidebar for displaying categories and recent posts', 'astro'),
                'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            ]
        );
    }
}

