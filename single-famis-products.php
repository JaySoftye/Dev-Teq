<?php
/**
 * Default Custom Post Type - FAMIS Product
 * Description: Post template with a content container.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_template_part('lib/nyc-doe-header'); ?>
</div> <!-- END OF MAIN HEADER -->

<?php global $wp_query; wp_reset_query(); ?>

<section class="container-fluid blank-content">
  <a id="back-btn" href="/nycdoe/#famis-products">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 70 70" style="enable-background:new 0 0 70 70;">
      <path d="M51.327,38.626H27.076L37.5,49.053c1.417,1.417,1.417,3.71,0,5.127c-0.708,0.708-1.635,1.061-2.562,1.061
      	c-0.927,0-1.856-0.353-2.562-1.061l-16.61-16.612c-0.168-0.168-0.322-0.356-0.454-0.554c-0.056-0.087-0.095-0.179-0.146-0.269
      	c-0.064-0.118-0.137-0.232-0.188-0.356c-0.048-0.118-0.076-0.238-0.112-0.358c-0.031-0.106-0.073-0.207-0.095-0.319
      	c-0.048-0.232-0.07-0.468-0.07-0.703c0-0.003,0-0.006,0-0.006c0-0.238,0.025-0.476,0.073-0.711c0.022-0.106,0.062-0.204,0.09-0.305
      	c0.036-0.123,0.064-0.249,0.115-0.37c0.05-0.12,0.12-0.232,0.182-0.344c0.05-0.092,0.092-0.19,0.151-0.277
      	c0.134-0.199,0.286-0.386,0.454-0.554l16.61-16.61c1.414-1.417,3.71-1.417,5.127,0c1.417,1.414,1.417,3.71,0,5.127L27.076,31.377
      	h24.248c2.002,0,3.623,1.624,3.623,3.623S53.326,38.626,51.327,38.626z"/>
    </svg>
  </a>
  <div class="container">
    <div class="row padding-top padding-bottom">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <h1 class="display-4 text-center"><strong><?php the_title();?></strong></h1>
        <?php the_content(); ?>

        <?php if(metadata_exists('post', $post->ID, 'headerTitle')) { ?>
          <p><a class="btn datasheet" href="<?php echo get_post_meta( $post->ID, 'headerTitle', true ); ?>">Download a Datasheet</a></p>
        <?php } ?>


        <section class="padding-bottom">
          <div class="hs-form-container">
            <h4>Interested in the <strong><?php the_title();?></strong> for your school or classroom? Request a quote using the form below.</h4>
            <hr />
            <!--[if lte IE 8]>
              <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
            <![endif]-->
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
            <script>
              hbspt.forms.create({
                portalId: '182596',
                formId: '42b188a8-165d-4be0-af27-ce6016a04a8a'
              });
            </script>
          </div>
        </section>

      </div>
      <div class="col-md-3"></div>
    </div>
  </div>

</section>

<!-- Footer section -->
<footer class="container-fluid">
 <div class="container">
   <div class="row">
     <div class="col-md-7">
       <h4 class="white"><strong>Teq Talk</strong></h2>

        <?php $the_query = new WP_Query( 'posts_per_page=2&cat=-894,-888,-52' );
         while ($the_query -> have_posts()) : $the_query -> the_post();

         $thumb_id = get_post_thumbnail_id();
         $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
       ?>

       <section class="row post">
         <div class="col-md-3 flex-md-middle">
           <img src="<?php echo $thumb_url[0]; ?>" />
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
