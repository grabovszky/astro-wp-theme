<?php
/**
 * Template for displaying a special post author
 *
 * @package Astro
 */

$profile_picture   = get_field('expert_post_author_picture');
$author_name       = get_field('expert_post_author_name');
$author_profession = get_field('expert_post_author_profession');
?>

<div class="d-flex flex-row justify-content-start">
    <div class="d-flex flex-column justify-content-center me-3">
        <img src="<?php echo $profile_picture['url']; ?>"
             alt="<?php echo $profile_picture['alt']; ?>" width="70px" height="70px"
             class="rounded-circle img-thumbnail shadow">
    </div>
    <div class="d-flex flex-column justify-content-center">
        <span class="text-regular text-bold text-blue"><?php echo $author_name ?></span>
        <span class="text-regular text-italic text-blue"><?php echo $author_profession ?></span>
    </div>
</div>
