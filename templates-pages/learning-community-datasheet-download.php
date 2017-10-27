<?php
/**
 * Template Name: Learning Community Datasheet Downloads
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
  <?php get_template_part( 'navigation', 'default' ); ?>
</nav>

<?php get_header(); ?>
  <?php get_template_part( 'navigation', 'default' ); ?>
</nav>

<div class="container">
  <main>
    <div class="row height-full">

      <section class="col-md">

        <header class="padding-top text-center"><h1>Product <strong>Data sheet</strong> Downloads</h1></header>
        <p class="padding-bottom text-center">Select your data sheet to download from the options below.</p>

        <?php
          $the_query = new WP_Query( array( 'posts_per_page' => '50' , 'orderby' => 'title' , 'order' => 'ASC' , 'category_name' => 'data-sheets' ) );
             while ($the_query -> have_posts()) : $the_query -> the_post();

          $thumb_id = get_post_thumbnail_id();
          $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
        ?>

          <article class="col-md-3 col-sm-4 text-center">
            <div class="card">
              <a href="<?php the_permalink() ?>"><img class="card-img-top" src="<?php echo $thumb_url[0]; ?>" /></a>
                <div class="card-block">
                  <h5><a class="bold" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
                </div>
            </div>
          </article>

        <?php endwhile; wp_reset_postdata(); ?>

      </section>
    </div>
  </main>
</div>

<?php get_footer(); ?>
