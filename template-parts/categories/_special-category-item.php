<?php
/**
 * Special category carousel item template
 */

?>

<div class="carousel-item active">
    <div class="row mt-4 py-4">
        <div class="col img-container">
            <img src="https://images.unsplash.com/photo-1542759564-7ccbb6ac450a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80"
                 alt="img alt" class="height-cropped">
        </div>
        <div class="col">
            <div class="d-flex justify-content-end">
                <span class="badge rounded-pill tag">Hosting</span>
                <span class="badge rounded-pill tag">Domain</span>
            </div>
            <div class="my-4">
                <h2 class="text-h1 text-blue">SEO stratégia haladó kicsiknek és nagyoknak</h2>
                <p class="text-regular text-blue">Keresőbarát szövegeket nem tud akárki írni, de bárki
                    is lát neki a SEO-szempontból
                    kulcsfontosságú tartalmaknak, néhány hibát elkerülve nem okozhat kárt. Csak a
                    rutinos
                    szövegírók nem csúsznak el azokon a banánhéjakon...</p>
            </div>
            <div>
                <?php get_template_part('template-parts/components/_author'); ?>
            </div>
        </div>
    </div>
</div>

