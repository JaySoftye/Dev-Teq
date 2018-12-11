<?php
/**
 * Template Name: SMART Deals
 * Description: Teq "SMART" Category Display
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
  <div class="row height-page smart-deals">
    <div class="container flex-md-bottom padding-bottom">
      <h2 class="white text-center"><img src="/wp-content/uploads/2016/12/smart-boards-logo-icon.svg" alt="SMART Technologies"></h2>
    </div>
  </div>
</div>

<div class="container-fluid nopadding smart-deals-posts">
  <div class="container">
    <div class="row">
      <div class="col-md">
        <h1 class="text-center"><strong>Special Offers for NY State</strong><span></span></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md">
        <?php wp_reset_query(); the_content(); ?>
      </div>
    </div>
    <div class="row padding-top padding-bottom smart-deals">

      <?php if ( have_posts() ) :
        $args = array(
          'category_name' => 'smart',
          'posts_per_page' => -1,
	        'orderby' => 'date',
	        'order'   => 'ASC',
          );
        $the_query = new WP_Query( $args );

          while ($the_query -> have_posts()) : $the_query -> the_post();
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
      ?>

			<article class="col-md-4 post-item <?php foreach((get_the_category()) as $category) { echo $category -> slug; } ?>">
				<div class="card">
					<?php if ( has_post_thumbnail() ) { ?>
            <img class="header-image" src="<?php echo $thumb_url[0]; ?>" />
					<?php } else { ?>
            <img class="header-image" src="<?php echo get_template_directory_uri();?>/images/smart-deals-category-default-image-post.jpg" />    
          <?php } ?>
          <div class="card-inner">
            <h4><a href="<?php if(metadata_exists('post', $post->ID,'location')) { echo get_post_meta( $post->ID, 'location', true ); } else { the_permalink(); }; ?>"><?php the_title(); ?></a></h4>
              <?php the_excerpt(); ?>
          </div>
          <a class="btn" href="<?php the_permalink(); ?>">More Details</a>
				</div>
			</article>

        <?php endwhile; else : ?>
			    <h3>No posts found</h3>
		    <?php endif; // End have_posts() check. ?>

    </div>
  </div>
</div>

<script src="<?php echo get_template_directory_uri();?>/js/teqCustom-scripts.js"></script>
<?php get_footer(); wp_footer(); ?>

<!-- Start of Async HubSpot Analytics Code -->
 <script type="text/javascript">
   (function(d,s,i,r) {
     if (d.getElementById(i)){return;}
     var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
     n.id=i;n.src="//js.hs-analytics.net/analytics/"+(Math.ceil(new Date()/r)*r)+ '/182596.js';
     e.parentNode.insertBefore(n, e);
   })(document,"script","hs-analytics",300000);
 </script>

<!-- End of Async HubSpot Analytics Code -->

   </body>
</html>
