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

    public function __construct()
    {
        parent::__construct(
            'tag_widget', // Base ID
            esc_html__('Tag Widget', 'astro'), // Name
            ['description' => esc_html__('Tag Category Widget', 'astro'),] // Args
        );
    }

    public function widget($args, $instance): void
    {
        $tags = get_tags(
            [
                'hide_empty' => false, //TODO! only for development, remove in prod
            ]
        );

        ?>
        <div class="widget widget-sidebar widget_tags">
            <ul class="sidebar-list">
                <?php

                $cat_1_tag = [];
                $cat_2_tag = [];
                $cat_3_tag = [];

                if ($tags) {
                    foreach ($tags as $tag) {
                        $category_tag = get_field('category_tag', $tag->taxonomy . '_' . $tag->term_id);
                        $primary_tag  = get_field('primary_tag', $tag->taxonomy . '_' . $tag->term_id);
                        $header_tag   = get_field('header_tag', $tag->taxonomy . '_' . $tag->term_id);

                        if ($header_tag) {
                            $cat_1_tag[] = $tag;
                        } elseif ($primary_tag) {
                            $cat_2_tag[] = $tag;
                        } elseif ($category_tag) {
                            $cat_3_tag[] = $tag;
                        }
                    }
                }

                $this->display_list($cat_1_tag);
                ?>
                <hr>
                <?php
                $this->display_list($cat_2_tag);
                ?>
                <hr>
                <?php
                $this->display_list($cat_3_tag);

                ?>
            </ul>
        </div>
        <?php
    }

    public function form($instance)
    {
        ?>
        <p><?php echo wp_widget_description($this->id); ?></p>
        <?php
    }

    public function update($new_instance, $old_instance)
    {
    }

    private function display_list($tag_list): void
    {
        if ( ! empty($tag_list)) {
            foreach ($tag_list as $tag) {
                $this->display_list_item($tag);
            }
        }
    }

    private function display_list_item($tag): void
    {
        ?>
        <li class="tag-item tag-item-<?php echo $tag->term_id ?> <?php echo $this->is_selected($tag) ?>">
            <a href="<?php echo get_tag_link($tag); ?>" title="<?php echo $tag->description; ?>">
                <?php echo $tag->name; ?>
            </a>
        </li>
        <?php
    }

    private function is_selected($tag): string
    {
        $tag_id = get_queried_object()->term_id;

        return $tag_id === $tag->term_id ? 'selected' : '';
    }
}
