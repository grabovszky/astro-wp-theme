<?php
/**
 * Singleton trait which implements Singleton pattern in any class in which this trait is used.
 *
 * Using the singleton pattern in WordPress is an easy way to protect against
 * mistakes caused by creating multiple objects or multiple initialization
 * of classes which need to be initialized only once.
 *
 * With complex plugins, there are many cases where multiple copies of
 * the plugin would load, and action hooks would load (and trigger) multiple
 * times.
 *
 * If you specifically need multiple objects, then use a normal class.
 *
 * @package Astro
 */

namespace Astro\Inc\Traits;

trait Singleton
{

    /**
     * Protected class constructor to prevent direct object creation
     */
    protected function __construct()
    {
    }

    /**
     * Overrides default clone function to prevent object cloning
     */
    protected function __clone()
    {
    }

    /**
     * This method returns new or existing Singleton instance
     * of the class for which it is called. This method is set
     * as final intentionally, it is not meant to be overridden.
     */
    final public static function get_instance()
    {
        static $instance = [];
        $called_class = get_called_class();

        if ( ! isset($instance[$called_class])) {
            $instance[$called_class] = new $called_class();

            /**
             * Dependent items can use the `astro_singleton_init_{$called_class}` hook to execute code
             */
            do_action(sprintf('astro_singleton_init_%s', $called_class));
        }

        return $instance[$called_class];
    }
}
