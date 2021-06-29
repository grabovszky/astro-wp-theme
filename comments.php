<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/comment-template/
 *
 * @package Astro
 */

if (post_password_required()) {
    return;
}

if (comments_open()) {
    ?>
    <img src="<?php echo IMG_URI . '/disqus.png' ?>" alt="image" class="img-fluid w-100 my-4">
    <?php
}
