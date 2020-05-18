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

<!--
<section class="container">
  <div class="row height-full">
    <section class="col-md">
      <div class="alert alert-danger">
        <h3 class="alert">You must be logged in to view these entries</h3>
      </div>
    </section>
  </div>
</section>
-->
<section class="container">
  <div class="row height-full">
    <section class="col-md">
      <?php while (have_posts()) : the_post(); ?>
        <div class="row">
          <div class="col-md">
            <div <?php post_class(); ?>>
              <a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h5><strong><?php the_title();?></strong></h5></a>
              <small class="meta"><?php the_date(); ?></small>
              <p><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>" class="teqBlue">Read More</a></p>
              </div><!-- /.post_class -->
              <hr />
           </div>
         </div>
       <?php endwhile; ?>
    </section>
  </div>
</section>

<?php get_footer(); ?>
