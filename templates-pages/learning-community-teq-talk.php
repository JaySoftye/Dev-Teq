<?php
/**
 * Template Name: Learning Community Teq Talk
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
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md padding-sm">
          <h1 class="text-center"><strong>Teq Talk</strong></h1>
          <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search Teq Talk" value="<?php echo get_search_query(); ?>" name="s" id="s" style="height:42px;">
              <input type="hidden" value="post" name="post_type" id="post_type" />
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" style="height:42px;background-position:center center;"></button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-2"></div>
      </div>
      <div class="row twoRowHeight">

			  <?php
          $the_query = new WP_Query( array( 'posts_per_page' => '10', 'category_name' => 'news, events') );
			       while ($the_query -> have_posts()) : $the_query -> the_post();

          $thumb_id = get_post_thumbnail_id();
          $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
        ?>

        <article style="background-color: #3c4852; background-size: cover; background-repeat: no-repeat; background-position: top center; background-image: url('<?php echo $thumb_url[0]; ?>');">
          <div class="postInfo">
            <p><?php the_date(); ?></p>
            <a href="<?php the_permalink() ?>"> <?php the_title(); ?> &#187;</a>
          </div>
        </article>

        <?php endwhile; wp_reset_postdata(); ?>

      </div>
    </section>
  </div>
</main>

<div class="container-fluid nopadding">
  <div class="row">
    <div class="col-md padding-bottom text-center">
      <h1><strong>Missed a post?</strong> No need to worry.</h1>
      <a href="/learning-community/"><button>See our previous posts here</button></a>
    </div>
  </div>
</div>

<?php get_footer(); ?>
