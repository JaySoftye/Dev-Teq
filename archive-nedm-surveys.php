<?php
/**
 * Template Name: Archive for Posts
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
  <?php get_header(); ?>
    <?php get_template_part( 'navigation', 'default' ); ?>
  </nav>

<section class="container">
  <div class="row height-full">
    <section class="col-md">
      <div class="alert alert-danger">
        <h3 class="alert">You must be logged in to view these entries</h3>
      </div>
    </section>
  </div>
</section>

<?php get_footer(); ?>
