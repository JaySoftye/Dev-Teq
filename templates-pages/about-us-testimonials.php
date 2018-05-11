<?php
/**
 * Template Name: About Us Testimonials Template
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
  <?php get_header(); ?>
    <?php get_template_part( 'navigation', 'default' ); ?>
  </nav>

  <main>
    <section>
      <div class="container-fluid nopadding padding-top">
        <div class="container">
          <div class="row">
            <div class="col-md padding-bottom text-center">
              <h1>Customer <strong>Testimonials</strong></h1>
              <h5>Below you will find a partial list of our customer testimonials, feel free to <a class="teqBlue bold" href="/contact-us/">contact us</a> for a full referral list.</h5>
            </div>
          </div>
        </div>
      </section>

      <?php wp_reset_query(); the_content(); ?>

      <div class="container nopadding">
        <div id="teqCustomerSuccess">
          <div class="row oneRowHeight">

            <?php
              $the_query = new WP_Query( array('category_name' => 'customer-success-stories') );
                 while ($the_query -> have_posts()) : $the_query -> the_post();

              $thumb_id = get_post_thumbnail_id();
              $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
            ?>
            <article class="col-md-3">
              <div class="card">
                <a href="<?php the_permalink() ?>">
                  <img class="card-img-top" src="<?php echo $thumb_url[0]; ?>">
                </a>
                <div class="col-md">
                  <?php echo the_category(); ?>
                  <h4 class="card-title"><a href="<?php the_permalink() ?>"><strong><?php the_title(); ?></strong></a></h4>
                </div>
              </div>
            </article>

            <?php endwhile; wp_reset_postdata(); ?>

          </div>
        </div>
      </div>

      <div class="container">
        <div class="row teqTestimonial padding-bottom">
          <?php
            $the_query = new WP_Query( array( 'cat' => '-482', 'category_name' => 'testimonials', 'posts_per_page' => '10', 'orderby' => 'rand') );
               while ($the_query -> have_posts()) : $the_query -> the_post();
          ?>

          <blockquote class="col-md-6">
            <h6><strong><?php the_title(); ?></strong></h6>
            <?php the_content(); ?>
          </blockquote>

          <?php endwhile; wp_reset_postdata(); ?>
        </div>
<!--
        <div class="oneRowHeight">
  			  <?php
            $the_query = new WP_Query( array( 'category_name' => 'news, press-releases', 'posts_per_page' => '5') );
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
-->
      </div>
    </div>
  </main>

<?php get_footer(); ?>
