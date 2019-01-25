<?php
/**
 * Template Name: DIIT NY Department of Education Page
 * Description: Displays NYDOE Products ONLY
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */

get_template_part('lib/nyc-doe-header');
?>

  <div class="container">
    <div class="row padding-top">
      <div class="col-md text-center">
        <h1 class="white thin h3">Welcome to Teq's Online Product Catalog for the</h1>
        <h1><img class="main-logo" src="<?php echo get_template_directory_uri();?>/_img/teq-nyc-department-of-ed-logo.svg" /></h1>
      </div>
    </div>
    <div class="row padding">
      <div class="col-md">
        <h2 class="text-center"><a class="opd-link" data-toggle="collapse" href="#collapseOPD" aria-expanded="false" aria-controls="collapseOPD"><strong><u>Did you know that ?</u></strong></a></h2>
        <div class="collapse padding-sm" id="collapseOPD">
          <h2 class="text-center white">Teq Online PD is approved by NYS to fulfill CTLE requirments. <br />Start earning CTLE hours towards maintaining your State Teaching License with Online PD today!</h2>
          <h2 class="text-center padding-sm"><a class="btn blue" href="https://onlinepd.teq.com/">Learn more</a></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-teq-opd-ctle-approved.png" />
      </div>
    </div>
  </div>

</div> <!-- END OF MAIN HEADER -->

<div class="container-fluid opd-dark-blue">
  <div class="row">
    <div class="col-md-2 nopadding flex-md-bottom hide-small">
      <img src="<?php echo get_template_directory_uri();?>/_img/nyc-doe-free-opd-account-compare-image.jpg" />
    </div>
    <div class="col-md flex-md-middle">
      <div class="row padding-top">
        <h3 class="col-md text-center padding-sm white"><strong>Comparison Documents</strong></h3>
      </div>
      <div class="row padding-bottom">
        <p class="col-md-4"><a href="https://www.teq.com/wp-content/themes/BootstrapFour/_img/Notebook_vs_ClassFlow_ActivInspire-Datasheet-2018.pdf" class="btn smart-green text-left"><strong>Compare SMART Notebook to a Classflow or ActivInspire Subscription</strong></a></p>
        <p class="col-md-4"><a href="https://www.teq.com/wp-content/themes/BootstrapFour/_img/teq_opd_comparison.pdf" class="btn blue text-left"><strong>Compare a FREE Account with a Teq Online PD School Subscription</strong></a></p>
        <p class="col-md-4"><a href="https://www.teq.com/wp-content/themes/BootstrapFour/_img/teq_sls_unlimited_comparison.pdf" class="btn smart-purple text-left"><strong>Compare a SMART Notebook Account to a SLS or Teq Essentials Subscription</strong></a></p>
      </div>
    </div>
    <div class="col-md-2 nopadding flex-md-bottom hide-small">
      <img src="<?php echo get_template_directory_uri();?>/_img/nyc-doe-smart-notebook-compare-image.jpg" />
    </div>
  </div>
</div>

<div class="container-fluid famis-products" id="famis-products">
  <div class="container">

    <div class="row padding-bottom">
      <div class="col-md">
        <h1 class="text-center padding-sm">Welcome to <strong>Teq’s Online Product Catalog</strong> for the New York City Department of Education</h1>
        <hr />
        <form>
          <div class="form-group famis-product-categories">
            <label for="product-category-select">Filter your product list using the menu below:</label>
            <select class="form-control" id="product-category-select">
              <?php
		            $category_options = array(
                  '' => 'All Classroom Products and Services',
                  'classroom-technology' => 'Classroom Technology',
                  'stem-products' => 'STEM Products',
                  'instructional-software' => 'Instructional Software',
                  'professional-development-teq-support' => 'Professional Development and Teq Support',
                  'guides-and-faqs' => 'Guides and FAQs',
                );

                foreach( $category_options as $value => $label ) {
                  echo "<option value='$value'>$label</option>";
                }

	            ?>
            </select>
          </div>
        </form>
      </div>
    </div>

    <div class="row" id="famis-product-container">

      <?php if ( have_posts() ) :
        $args = array(
          'post_type' => 'FAMIS-Products',
          'posts_per_page' => -1,
	        'orderby' => 'title',
	        'order'   => 'ASC',
          );
        $the_query = new WP_Query( $args );
          while ($the_query -> have_posts()) : $the_query -> the_post();
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
      ?>

			<article class="col-md-4 post-item <?php foreach((get_the_category()) as $category) { echo $category -> slug; } ?>">
				<div class="card">
  				<a href="<?php if(metadata_exists('post', $post->ID,'location')) { echo get_post_meta( $post->ID, 'location', true ); } else { the_permalink(); }; ?>">
						<?php if ( has_post_thumbnail() ) { ?>
							<img class="header-image" src="<?php echo $thumb_url[0]; ?>" />
						<?php } ?>
					</a>
          <div class="card-inner">
            <h4><a href="<?php if(metadata_exists('post', $post->ID,'location')) { echo get_post_meta( $post->ID, 'location', true ); } else { the_permalink(); }; ?>"><?php the_title(); ?></a></h4>
              <?php the_excerpt(); ?>
          </div>
          <a class="btn" href="<?php if(metadata_exists('post', $post->ID,'location')) { echo get_post_meta( $post->ID, 'location', true ); } elseif(metadata_exists('post', $post->ID,'formId')) { echo get_post_meta( $post->ID, 'formId', true ); } else { the_permalink(); }; ?>">More Details</a>
				</div>
			</article>

          <?php endwhile; else : ?>

			<h3>No posts found</h3>
		  <?php endif; // End have_posts() check. ?>
    </div>

    <script type="text/javascript">
    /** DISPLAY ONLY SELECTED:OPTION ON THE RESULTS OF SEARCH TERM **/
      $(document).ready(function(){
        $('select#product-category-select').on('change', function() {
          var value = '.' + $(this).val();
          $('article.post-item').show().not(value).hide();
        });
      });
    </script>

  </div>
</div>


<!-- Footer section -->
<footer class="container-fluid">
 <div class="container">
   <div class="row">
     <div class="col-md-7">
       <h4 class="white"><strong>Teq Talk</strong></h2>

        <?php $the_query = new WP_Query(array('posts_per_page' => '2' , 'category_name' => 'news'));
         while ($the_query -> have_posts()) : $the_query -> the_post();

         $thumb_id = get_post_thumbnail_id();
         $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
       ?>

       <section class="row post">
         <div class="col-md-3 flex-md-middle">
           <a href="<?php the_permalink() ?>">
             <img src="<?php echo $thumb_url[0]; ?>" />
           </a>
         </div>
         <div class="col-md-9 postInfo">
           <h6><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></h6>
           <?php the_excerpt(); ?>
         </div>
       </section>

       <?php endwhile; wp_reset_postdata(); ?>
     </div>
     <div class="col-md-5 padding-left padding-right flex-md-middle">
       <h2 class="white">For Site Assistance Contact: <strong>877.455.9369</strong></h2>
       <p ><small class="white">© Copyright 2017 All rights reserved.  Tequipment, Inc.<br />7 Norden Lane | Huntington Station, NY 11746</small></p>
     </div>
   </div>
  </div>
</footer>

       <?php wp_footer(); ?>

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
