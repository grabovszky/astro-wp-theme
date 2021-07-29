<?php

?>

<div class="carousel-item <?php echo $args['counter'] === 0 ? 'active' : ''; ?>">
    <a href="<?php the_permalink(); ?>" class="text-decoration-none">
        <div class="card content-container">
            <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top mobile-card-img" alt="">
            <div class="card-body mt-2 p-4">
                <h2 class="card-text text-blue text-h2 ms-2 mb-5">
                    <?php echo get_the_title(); ?>
                </h2>
                <div class="d-flex mb-3">
                    <?php astro_get_the_tags(); ?>
                </div>
            </div>
        </div>
    </a>
</div>
