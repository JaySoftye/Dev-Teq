<?php
/**
 * Template Name: Website Template Content ONLY NO NAV PADDING
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
  <?php get_template_part( 'navigation', 'default' ); ?>
</nav>

<main>
  <?php wp_reset_query(); the_content(); ?>
</main>

<?php get_footer(); ?>
