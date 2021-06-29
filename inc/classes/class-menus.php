<?php
/**
 * Register custom WordPress menus fir customizable menus in the theme, to allow
 * users to add pages, posts and urls to the menu.
 *
 * @link https://developer.wordpress.org/themes/functionality/navigation-menus/
 *
 * @package Astro
 */

namespace Astro\Inc;

use Astro\Inc\Traits\Singleton;

class Menus
{
    use Singleton;

    protected function __construct()
    {
        $this->set_hooks();
    }

    protected function set_hooks(): void
    {
        add_action('init', [$this, 'register_menus']);
    }

    public function register_menus(): void
    {
        register_nav_menus(
            [
                'header-menu' => esc_html__('Header Menu', 'astro'),
            ]
        );
    }

    /**
     * Get menu_id function allows us to reference a menu from any WordPress
     * theme template file
     *
     * @param $location
     *
     * @return mixed|string
     */
    public function get_menu_id($location)
    {
        $locations = get_nav_menu_locations();
        $menu_id   = $locations[$location];

        return ! empty($menu_id) ? $menu_id : '';
    }
}
