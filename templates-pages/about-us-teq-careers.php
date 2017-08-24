<?php
/**
 * Template Name: About Us Careers Template
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
            <h1>Interested in a <strong>career at Teq</strong>?</h1>
          </div>
        </div>
        <div class="row padding-top padding-bottom">
          <div class="col-md-8">
            <h3 class="bold">Become part of our team, join the <span class="teqBlue">#1 education technology company in the country</span>, and make a difference in the lives of students.</h3>
            <p class="lead">Wake up in the morning with a passion for making a difference in the lives of students. Teq believes in improving educational outcomes. At Teq, we work hard to foster innovation, passion, and creativity in the twenty-first century classroom by providing a unique blend of the latest K-12 educational technology products, experienced service, and meaningful professional development. With a focus on the fusion of technology and learning, our goal is to empower educators, improve technology integration, and increase student achievement in today's schools.</p>
          </div>
          <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri(); ?>/_img/about-us-teq-careers-polaroids-image.jpg" />
          </div>
          <div class="col-md-12">
            <img src="<?php echo get_template_directory_uri(); ?>/_img/teq-employees-receive.svg" />
          </div>
        </div>

        <div class="row padding">
          <div class="col-sm padding-left padding-right text-center">
            <h2>Hear what our <strong>staff has to say</strong>:</h2>
            <div class="embed-responsive embed-responsive-16by9 topBottomShadow">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kWiUDx5ikVk" allowfullscreen></iframe>
            </div>
          </div>
        </div>

        <div class="row padding-bottom">
          <div class="col-md-12 text-center padding">
            <h1>Below is the current list of <strong>available positions</strong> at Teq</h1>
            <p>Click the full description for instructions on how to apply.</p>
            <hr />
          </div>
          <?php
            $the_query = new WP_Query( array( 'category_name' => 'careers', 'posts_per_page' => '12', 'orderby' => 'rand') );
               while ($the_query -> have_posts()) : $the_query -> the_post();
          ?>

          <div class="col-md-6">
            <h6><strong><?php the_title(); ?></strong></h6>
            <?php echo get_the_excerpt(); ?>...<small><a class="bold teqBlue" href="<?php the_permalink() ?>">Full Description &#187;</a></small></p>
            <hr />
          </div>

          <?php endwhile; wp_reset_postdata(); ?>
        </div>

      </section>
    </div>
  </main>

  <?php wp_reset_query(); the_content(); ?>

<?php get_footer(); ?>
