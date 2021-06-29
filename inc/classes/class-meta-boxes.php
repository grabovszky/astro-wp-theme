<?php
/**
 * WordPress custom meta boxes
 *
 * This class is responsible to register custom meta boxes in WordPress post editor
 *
 * @link https://developer.wordpress.org/plugins/metadata/custom-meta-boxes/
 *
 * @package Astro
 */

namespace Astro\Inc;

use Astro\Inc\Traits\Singleton;

class Meta_Boxes
{
    use Singleton;

    protected function __construct()
    {
        $this->set_hooks();
    }

    protected function set_hooks(): void
    {
        add_action('add_meta_boxes', [$this, 'add_custom_meta_box']);
    }

    public function add_custom_meta_box(): void
    {
        /**
         * TODO
         */
    }
}
