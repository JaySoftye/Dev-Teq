<?php
/**
 * Template Name: Events Template
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
  <?php get_template_part( 'navigation', 'default' ); ?>
</nav>

<main>
  <div class="container nopadding padding-top padding-bottom">
    <section>
      <div class="row">
        <div class="col-md padding-bottom">
          <h1 class="text-center"><img src="<?php echo get_template_directory_uri(); ?>/_img/teq-events-logo-icon.svg" class="halfWidth" /></h1>
          <p>Here at Teq we strive to continually educate ourselves and others on the latest improvements in education. Below you can find a list of upcoming Events, Webinars, Professional Development Sessions, etc. Please feel free to engage with the Teq team here or through any one of our social channels. We look forward to your feedback and invite you to be part of our learning community.</p>
        </div>
        <!--
        <div class="col-md-6 padding-bottom text-right">
          <a href="<?php echo get_site_url(); ?>/teq-events/eventsignup/"><button>Teq Event Sign-up</button></a>
        </div>
        <div class="col-md-6 padding-bottom text-left">
          <a href="<?php echo get_site_url(); ?>/teq-events/request-teqsquad/"><button>Request Teq Squad</button></a>
        </div>
        -->
      </div>
      <div class="row">

        <?php
          $args = array(
            'category_name' => 'events',
            'order' => 'DESC',
            'date_query' => array(
            'after' => date('Y-m-d', strtotime('-6 months'))
              )
            );

          $the_query = new WP_Query($args);
			       while ($the_query -> have_posts()) : $the_query -> the_post();

          $thumb_id = get_post_thumbnail_id();
          $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
        ?>
        <article class="col-md-6 eventContainer">
          <div class="eventArticle">
            <a class="eventHeader" href="<?php the_permalink() ?>" style="background-color: #3c4852; background-size: cover; background-repeat: no-repeat; background-position: top center; background-image: url('<?php echo $thumb_url[0]; ?>');"><?php the_title(); ?></a>
            <div class="eventInfo">
              <h5><a class="bold" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
              <p><?php echo get_the_excerpt(); ?></p>
              <p><small class="ml-1"><a class="bold teqBlue" href="<?php the_permalink() ?>">MORE DETAILS &#187;</a></small></p>
            </div>
          </div>
        </article>
        <?php endwhile; wp_reset_postdata(); ?>

      </div>
    </section>
  </div>
</main>

<?php wp_reset_query(); the_content(); ?>

<?php get_footer(); ?>
