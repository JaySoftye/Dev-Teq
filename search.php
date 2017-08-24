<?php
/**
 * Search Results Template
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header();
get_template_part( 'navigation', 'default' ); ?>

</nav>

<div class="container padding-top padding-bottom">

  <div class="row">
    <section class="col-md">

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
  <div class="row">
    <div class="col-md-2 padding-left">
      <?php if ( has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><img src="<?php the_post_thumbnail_url(); ?>"/></a>
      <?php endif; ?>
    </div>
    <div class="col-md-10">
      <div <?php post_class(); ?>>
        <a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h3><strong><?php the_title();?></strong></h3></a>
          <small class="meta"><?php the_date(); ?></small>
          <p><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>" class="teqBlue">Read More</a></p>
      </div><!-- /.post_class -->
        <hr />
    </div>
  </div>
      <?php endwhile; ?>

    <?php else : ?>
      <div class="row">
        <h2 class="cloudgenixRed bold"><?php _e('No Results Found for: ' . get_search_query() ); ?></h2>
        <p class="lead"><?php _e( 'Sorry, it seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps you should try again with a different search term.'); ?></p>
      </div>
    <?php endif;?>

      </section>
    </div>
  </div>

	<?php get_footer(); ?>
