<?php
/**
 * WordPress theme custom widgets
 *
 * This class is responsible to register and custom widget in the theme
 *
 * @link https://developer.wordpress.org/reference/classes/wp_widget/
 *
 * @package Astro
 */

namespace Astro\Inc;

use WP_Widget;

use Astro\Inc\Traits\Singleton;

class Tag_Widget extends WP_Widget
{
    use Singleton;

    protected function __construct()
    {
        parent::__construct(
            'tag_widget', // Base ID
            'Tag', // Name
            ['description' => __('Tag Category Widget', 'astro'),] // Args
        );
    }

    public function widget($args, $instance)
    {
    }

    public function form($instance)
    {
    }

    public function update($new_instance, $old_instance)
    {
    }
}
