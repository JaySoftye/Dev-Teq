<?php
/**
 * Template Name: iBlocks Collateral Template
 * Description: Teq iBlock Collateral Download page template
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */

  get_template_part('lib/iblocks-header');
  get_template_part( 'navigation', 'default' );
    global $wp_query;
      $postid = $wp_query->post->ID;
?>

</nav>
<script>
$(document).ready(function(){
  $(function() {
   $('.read-more').click (function() {
     $('html, body').animate({scrollTop: $('div.iblocks-content').offset().top }, 'slow');
     return false;
   });
  });
 });
</script>

<div class="container-fluid nopadding">
  <div class="row">
    <div class="col-md nopadding">
      <img class="img-fluid" id="saturate-loop" src="<?php echo get_template_directory_uri(); ?>/images/iblocks-collateral-header.jpg" />
    </div>
  </div>
</div>

<div class="container">
  <main>
    <div class="row iblock-questionnaire">
      <div class="col-md flex-md-middle">
        <?php wp_reset_query(); the_content(); ?>
      </div>
    </div>
  </main>
  <div class="row iblock-collateral">
    <?php
      $the_query = new WP_Query( array( 'posts_per_page' => '-1' , 'category_name' => 'iblocks' , 'orderby' => 'date', 'order'   => 'ASC', ) );
         while ($the_query -> have_posts()) : $the_query -> the_post();
          $thumb_id = get_post_thumbnail_id();
          $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
    ?>

    <article class="col-md-4">
      <img class="card-img-top" src="<?php echo $thumb_url[0]; ?>" class="fullWidth" />
      <div class="article-content">
        <h3><strong> <?php the_title(); ?> </strong></h3>
        <p>
          <?php echo get_the_excerpt(); ?>
        </p>
          <?php if(metadata_exists('post', $post->ID,'location')) { echo get_post_meta( $post->ID, 'location', true ); } else { ?>
            <a href="<?php the_permalink(); ?>" class="collateral-open">VIEW DOCUMENT</a>
          <?php } ?>
      </div>
    </article>

    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</div>

<script src="<?php echo get_template_directory_uri();?>/js/teqCustom-scripts.js"></script>
<?php get_footer(); wp_footer(); ?>

   </body>
</html>
