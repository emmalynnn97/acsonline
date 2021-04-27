<?php
/**
 * Template Name: ACS Default
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */


get_header();
?>

<?php get_template_part('template-parts/default', 'hero'); ?>
<?php get_template_part('template-parts/default', 'content'); ?>
<?php get_footer(); ?>