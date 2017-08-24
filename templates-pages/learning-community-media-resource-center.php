<?php
/**
 * Template Name: Learning Community Media Resource Center
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
  <?php get_template_part( 'navigation', 'default' ); ?>
</nav>

<main>
  <div class="container nopadding padding-top">
    <section id="teqResources">
      <div class="row">

        <div class="col-md-8 padding-bottom">
          <h1>Welcome to Teq's <strong>Media Resource Center</strong></h1>
          <p class="lead">Below you will find a list of Resource Categories containing helpful information pertinent to k12 education. Each category contains hand picked lesson plans, product updates, datasheets, and more from our Expert PD and marketing teams. Be sure to check back soon for updates, or using the form at the bottom of this page you can sign up to receive Teq updates. Below you will find a list of the most recent additions. <strong>Suggestions and comments are always welcome</strong>, please feel free to leave us a comment or <a href="/contact-us" class="teqBlue bold">contact us</a> for any remaining questions.</p>
        </div>
        <div class="col-md-4">
          <img src="<?php echo get_template_directory_uri(); ?>/_img/learning-community-erc-lessons-image.jpg" />
        </div>
      </div>

      <hr />

      <div class="col-md-5">

        <ul>
            <?php wp_list_categories( array(
                'order'              => ASC,
                'show_count'         => true,
                'use_desc_for_title' => false,
                'child_of'           => 360,
        		    'hide_empty'         => 0,
        		    'title_li'           => 'Resource Center Categories',
            ) ); ?>
        </ul>

      </div>

      <div class="col-md-7 text-center">
        <div class="row">
          <article class="col-md-12">
            <ul>
              <li class="categories text-left">Below you will find a list of the <strong>most recent additions</strong> to the Educator Resource Center, you can use the left category menu to view more resources.</li>
            </ul>
          </article>

			  <?php
          $the_query = new WP_Query( array( 'posts_per_page' => '12' , 'category_name' => 'resources' ) );
			       while ($the_query -> have_posts()) : $the_query -> the_post();

          $thumb_id = get_post_thumbnail_id();

          $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
        ?>

        <article class="col-md-6">
          <div class="card">
            <a href="<?php the_permalink() ?>"><img class="card-img-top" src="<?php echo $thumb_url[0]; ?>" class="fullWidth" /></a>

            <div class="card-block">
              <a href="<?php the_permalink() ?>"><?php the_title(); ?> &#187;</a>
            </div>

          </div>
        </article>

        <?php endwhile; wp_reset_postdata(); ?>

        </div>

      </div>

    </div>

    </section>
  </div>
</main>


<?php get_footer(); ?>
