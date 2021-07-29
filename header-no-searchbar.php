<?php
/**
 * Custom header template without displaying the search bar
 *
 * @link https://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 *
 * @package Astro
 */

?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    /** @link https://developer.wordpress.org/reference/functions/wp_head/ */
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>

<?php
/** @link https://developer.wordpress.org/reference/functions/wp_body_open/ */
wp_body_open();
?>

<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
        <?php get_template_part('template-parts/header/navbar'); ?>
    </header>

    <div id="content" class="site-content">

