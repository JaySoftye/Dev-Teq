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
      <section>
        <div class="row">
          <div class="col-md text-center">
            <h1>Recent Teq <strong>Press Releases</strong></h1>
            <h3>Below you will find our most recent Press Releases regarding company updates, news, upcoming annoucements, product updates, etc.</h3>
          </div>
        </div>

  			  <?php
            $the_query = new WP_Query( array( 'category_name' => 'press-releases', 'posts_per_page' => '5') );
  			       while ($the_query -> have_posts()) : $the_query -> the_post();

          ?>

          <div class="row padding">
            <article class="col-md padding-left padding-right eventContainer">
              <div class="eventArticle">
                <a href="<?php the_permalink() ?>">
                  <?php
                    if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                    } else {
                  ?>
                    <img src="<?php echo get_template_directory_uri();?>/_img/teq-learning-community-default-post-feature-image.jpg" />
                  <?php
                    }
                  ?>
                </a>
                <div>
                  <h6><a class="bold" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h6>
                  <p><?php echo get_the_excerpt(); ?></p>
                  <small class="ml-1"><a class="bold teqBlue" href="<?php the_permalink() ?>">MORE DETAILS &#187;</a></small>
                </div>
              </div>
            </article>
          </div>

        <?php endwhile; wp_reset_postdata(); ?>

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
