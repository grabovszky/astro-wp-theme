<?php

?>

<div class="col services">
    <div class="card h-100 service-card p-2">
        <div class="card-img-div p-2">
            <img src="<?php echo get_field('service_logo', $args['menu_item'])['url']; ?>"
                 class="card-img-top services-img p-3 px-5"
                 alt="...">
        </div>
        <div class="card-body d-flex flex-column justify-content-end">
            <div class="text-center">
                <h2 class="card-title services-header mb-4"><?php echo get_field(
                        'service_name',
                        $args['menu_item']
                    ); ?></h2>
                <p class="services-price">
                    <strong><?php echo get_field('service_price', $args['menu_item']); ?></strong>
                    <?php echo esc_html__('Ft from', 'astro'); ?><span class="text-red">*</span>
                </p>
            </div>
            <hr class="services-hr">
            <div class="text-center">
                <p class="card-text services-text"><?php echo get_field('service_text', $args['menu_item']); ?></p>
            </div>
            <div class="d-flex justify-content-center">
                <a href="<?php echo $args['menu_item']->url; ?>"
                   class="btn btn-primary m-4 button button-secondary services-button"><?php echo esc_html__(
                        'Select',
                        'astro'
                    ); ?></a>
            </div>
        </div>
    </div>
</div>
