<?php
/**
 * Template Name: Learning Community Educator Resource Center
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
  <?php get_template_part( 'navigation', 'default' ); ?>
</nav>

<main>
  <div class="container nopadding padding-top padding-bottom">
    <section id="teqResources">

      <div class="row">
        <div class="col-md padding-bottom text-center">
          <h1>Welcome to the <strong>Educator Resource Center</strong></h1>
        </div>
      </div>

      <div class="row padding-bottom">
        <div class="col-md-8">
          <h2>We're here <span class="bold teqBlue">to help</span>.</h2>
          <p class="lead">Below you will find a list of lesson Cateogires from Teq’s Educator Resource Center (ERC) Library. Each category contains hand picked lesson plans from our Expert PD teams. Be sure to check back soon for updates, or using the form at the bottom of this page you can sign up to receive Teq updates. Below you will find a list of the <strong>most recent additions</strong> to the Educator Resource Center, you can use the left category menu to view more lessons.</p>
          <p><strong>Please bear with us. We have recently upgraded Teq.com and the new ERC is currently being updated as well.</strong></p>
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
                'child_of'           => 197,
        		    'hide_empty'         => 0,
        		    'title_li'           => 'Resource Center Categories',
            ) ); ?>
            <li>
              Search for a lesson
              <form class="search-form input-group" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
                <input type="text" placeholder="<?php _e( 'Search Teq', 'bootstrap-four' ); ?>" name="s">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button"><?php _e( '', 'bootstrap-four' ); ?></button>
                </span>
              </form>
            </li>
        </ul>

      </div>

      <div class="col-md-7 text-center">
        <div class="row">

			  <?php
          $the_query = new WP_Query( array( 'posts_per_page' => '12' , 'category_name' => 'educator-resource-center' ) );
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
