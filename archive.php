<?php
/**
 * Template Name: Archive for Posts
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
  <?php get_header(); ?>
    <?php get_template_part( 'navigation', 'default' ); ?>
  </nav>

	<div class="container">
		<main>
      <div class="row height-full">
      <?php if ( have_posts() ) : ?>

        <section class="col-md">

          <?php if ( cat_is_ancestor_of(360, $cat) or is_category(360) ) : ?>
            <p class="text-center"><strong>Resources for</strong></p>
            <header class="text-center"><?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?></header>

            <?php while (have_posts()) : the_post();
              $thumb_id = get_post_thumbnail_id();
              $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
            ?>

            <article class="col-sm-4">
              <div class="card">
                <a href="<?php the_permalink() ?>"><img class="card-img-top" src="<?php echo $thumb_url[0]; ?>" /></a>
                  <div class="card-block">
                    <h5><a class="bold" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
                    <p><a href="<?php the_permalink(); ?>" class="teqBlue">Read More</a></p>
                  </div>
              </div>
            </article>

            <?php endwhile; ?>

              <div class="col-md-12 padding-bottom padding-top text-center">
                <h4><strong>Looking for something else?</strong> Check out our full Media Resource Center.</h4>
                <a href="/learning-community/media-resource-center/"><button>Visit the Media Resource Center</button></a>
              </div>

          <?php else : ?>
             <p>Check out the posts for:</p>
			       <header class="page-header"><?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?></header>

			    <?php while (have_posts()) : the_post(); ?>
          <div class="row">
            <div class="col-md">
              <div <?php post_class(); ?>>
                <a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h5><strong><?php the_title();?></strong></h5></a>
                  <small class="meta"><?php the_date(); ?></small>
                  <p><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>" class="teqBlue">Read More</a></p>
              </div><!-- /.post_class -->
              <hr />
            </div>
          </div>

          <?php endwhile;

        endif;
		    // If no content, include the "No posts found" template.
		  else : ?>

      <section><div class="row">
        <div class="col-md">
          <img src="<?php echo get_template_directory_uri(); ?>/_img/empty-search-field-apple-core.jpg" />
          <h1>What a Bummer!</h1>
          <p class="lead">It appears that there are no posts for this category.</p>
        </div>


    <?php endif;

      if (function_exists("wp_bs_pagination"))
        {
        wp_bs_pagination();
      }
    ?>
        </section>

      </div>
		</main>
	</div>

<?php get_footer(); ?>
