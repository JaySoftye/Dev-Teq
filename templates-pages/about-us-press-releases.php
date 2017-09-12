<?php
/**
 * Template Name: About Us Press Release Template
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
  <?php get_header(); ?>
    <?php get_template_part( 'navigation', 'default' ); ?>
  </nav>

  <main>
    <div class="container nopadding padding-top">
      <section id="teqBlog">
        <div class="row">
          <div class="col-md text-center">
            <h1>Recent Teq <strong>Press Releases</strong></h1>
            <h3>Below you will find our most recent Press Releases regarding company updates, news, upcoming annoucements, product updates, etc.</h3>
          </div>
        </div>
        <div class="row twoRowHeight">
  			  <?php
            $the_query = new WP_Query( array( 'category_name' => 'press-releases', 'posts_per_page' => '10') );
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
        <h4>To see previous press releases, check out our list of <strong>archived files</strong>.</h4>
        <a href="/press-releases/"><button>Archived Press Releases</button></a>
      </div>
    </div>
  </div>

  <?php wp_reset_query(); the_content(); ?>

<?php get_footer(); ?>
