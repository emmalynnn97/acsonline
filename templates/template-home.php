<?php
/**
 * Template Name: Home Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */


get_header();
?>

<?php get_template_part('template-parts/home', 'hero'); ?>
<?php get_template_part('template-parts/home', 'pillars'); ?>
<?php get_footer(); ?>