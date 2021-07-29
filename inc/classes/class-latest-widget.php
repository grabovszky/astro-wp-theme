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

use WP_Query;
use WP_Widget;

use Astro\Inc\Traits\Singleton;

class Latest_Widget extends WP_Widget
{
    use Singleton;

    public function __construct()
    {
        parent::__construct(
            'latest_widget', // Base ID
            esc_html__('Latest Posts Widget', 'astro'), // Name
            ['description' => esc_html__('Display Latest Expert Posts', 'astro'),] // Args
        );
    }

    public function widget($args, $instance): void
    {
        $expert_post_tag = get_term_by('slug', 'szakertoi_cikk', 'post_tag');

        $query_args = [
            'tax_query'      => [
                [
                    'taxonomy' => $expert_post_tag->taxonomy,
                    'filed'    => 'term_id',
                    'terms'    => $expert_post_tag->term_id,
                ],
            ],
            'posts_per_page' => 3,
        ];

        $query = new WP_Query($query_args);

        ?>
        <div class="widget widget_latest">
            <a href="<?php echo get_tag_link($expert_post_tag->term_id); ?>" class="text-decoration-none">
                <h4 class="text-bigger text-blue text-bold">
                    <?php echo esc_html__(
                        'Our Expert posts',
                        'astro'
                    ); ?>
                </h4>
            </a>
            <ul>
                <?php

                while ($query->have_posts()) {
                    $query->the_post();

                    ?>

                    <li class="latest-post-item">
                        <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                            <hr/>
                            <img src="<?php the_post_thumbnail_url(); ?>"
                                 alt="">
                            <h6 class="text-bigger text-blue text-medium"><?php echo get_the_title(); ?></h6>
                        </a>
                    </li>

                    <?php
                }

                wp_reset_postdata();
                ?>
            </ul>
            <a href="<?php echo get_tag_link($expert_post_tag->term_id); ?>" class="button mt-3 button-secondary">
                <?php echo esc_html__(
                    'Show more',
                    'astro'
                ); ?></a>
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
}
