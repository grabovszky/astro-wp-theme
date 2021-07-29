<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 * Shows no comments on it's own. Only provides a hook where disqus or other comment platforms can hook into.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/comment-template/
 *
 * @package Astro
 */

if (post_password_required()) {
    return;
}

if (comments_open()) {
    // disqus hook
}
