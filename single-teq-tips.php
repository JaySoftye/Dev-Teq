<?php
/**
 * Default Custom Post Type - Teq Tips Template
 * Description: Post template with a content container.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
  <?php get_template_part( 'navigation', 'default' ); ?>
</nav>

<?php

  global $wp_query;
    $postid = $wp_query->post->ID;
?>

<section>
  <div class="container">
    <div class="row padding-top padding-bottom">

        <div id="postContent" class="col-md">
          <?php wp_reset_query(); ?>

          <h1 class="text-center"><strong><?php the_title();?></strong></h1>
          <small class="d-block text-center">Post in <?php the_category(', ') ?> by <span class="bold"><?php the_author(); ?></span> on <?php the_time('jS F Y') ?></small>

          <div class="video-player">
            <?php the_content(); ?>
            <small><a href="/learning-community/teq-tips/" /><strong>&laquo; Back to Teq Tips</strong></a></small>
          </div>

          <h4><?php the_excerpt(); ?></h4>
        </div>

    </div>
  </div>

  <div class="container-fluid padding" style="background-image: linear-gradient(to top right, #eceeef, #d8dbdc);">
  <div class="container padding-bottom">
    <h2>You may also like:</h2>
    <div class="row">

      <?php

        $the_query = new WP_Query( array(
          'posts_per_page'  => '3',
          'post_type'       => 'Teq-Tips',
          'orderby'        => 'rand',
          'post__not_in' => array( $post->ID )
        ));
        while ($the_query -> have_posts()) : $the_query -> the_post();
      ?>
      <article class="col-md-4">
        <div class="videoTeqTips"><?php the_content(); ?></div>
        <p><strong><?php the_title(); ?></strong></p>
      </article>

      <?php endwhile; wp_reset_postdata(); ?>

    </div>
  </div>
  </div>

  <div class="container">
    <div class="row padding-top padding-bottom">
      <div class="col-md">
        <?php
      // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() ) {
          comments_template();
        }
        ?>
      </div>
    </div>
  </div>


</section>

<?php get_footer(); ?>
