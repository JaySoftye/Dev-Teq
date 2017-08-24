<?php
/**
 * Template Name: Learning Community
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
  <?php get_template_part( 'navigation', 'default' ); ?>
</nav>

<main>
  <div class="container nopadding padding-top">
    <section id="teqBlog">
      <div class="row twoRowHeight">

    <?php
      $custom_query_args = array (
          'posts_per_page'  => 10,
          'cat'             => '-322, -363, -360, -360, -483, -475',
          'paged'           => ( get_query_var('page') ? get_query_var('page') : 1 ),
      );

      $custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

      $custom_query = new WP_Query( $custom_query_args );

      $thumb_id = get_post_thumbnail_id();
      $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);

        $temp_query = $wp_query;
        $wp_query   = NULL;
        $wp_query   = $custom_query;

      if ( $custom_query->have_posts() ) :
        while ( $custom_query->have_posts() ) :
          $custom_query->the_post();
    ?>

        <article style="background-color: #3c4852; background-size: cover; background-repeat: no-repeat; background-position: top center; background-image: url('<?php the_post_thumbnail_url(); ?>');">
          <div class="postInfo">
            <p><?php the_date(); ?></p>
            <a href="<?php the_permalink() ?>"> <?php the_title(); ?> &#187;</a>
          </div>
        </article>

    <?php
        endwhile; wp_reset_postdata();
      endif;
    ?>

    </div>

      <div class="row padding pagination-buttons">
        <div class="col-md text-center">
          <div class="navigation"><p><?php posts_nav_link('','&laquo; View Newer Posts','View Older Posts &raquo;'); ?></p></div>
        </div>
      </div>

    <?php
      // Reset main query object
          $wp_query = NULL;
          $wp_query = $temp_query;
    ?>

    </section>
  </div>
</main>

<?php get_footer(); ?>
