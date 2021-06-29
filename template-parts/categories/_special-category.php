<?php
/**
 * Special category card carousel template
 */

?>

<div class="p-4 content-container">
    <div class="row mx-2 mt-2">
        <div class="col d-flex align-items-center">
            <h3 class="text-h2 text-blue">Szekértői cikkeink</h3>
            <button class="btn btn-primary ms-auto button-purple">Mutass még</button>
        </div>
        <hr class="mt-3 horizontal-divider">
    </div>
    <div class="row mx-2">
        <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel"
             data-bs-interval="100000">
            <div class="carousel-inner">
                <?php get_template_part('template-parts/categories/_special-category-item'); ?>
                <?php get_template_part('template-parts/categories/_special-category-item-none'); ?>
                <?php get_template_part('template-parts/categories/_special-category-item-none'); ?>
                <?php get_template_part('template-parts/categories/_special-category-item-none'); ?>
            </div>
            <div class="carousel-indicators carousel-indicator">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
            </div>
        </div>
    </div>
</div>
