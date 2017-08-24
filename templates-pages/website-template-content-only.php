<?php
/**
 * Template Name: Website Template Content ONLY
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
  <?php get_template_part( 'navigation', 'default' ); ?>
</nav>

<main>
  <div class="container-fluid nopadding padding-top padding-bottom">
    <section>
      <?php wp_reset_query(); the_content(); ?>
    </section>
  </div>
</main>

<?php get_footer(); ?>
