<?php
/**
 * Template Name: TEQ-G Professional Development
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
 get_template_part('lib/teq-g-header');
 get_template_part( 'navigation', 'default' );

 ?>

 <section class="hero-content pd">
   <div class="container-fluid">
     <div class="row navigation-source">
       <div class="col-md-7">
         <h1>Let us help you Integrate the best educational technology into classroom learning <span class="blink"></span></h1>
       </div>
     </div>
     <div class="row form-search-container">
       <div class="col-md-8">
         <h5>Whether you’re rolling out devices school-wide, building out your STEM program, integrating a new piece of technology, or anything in between – sometimes you need a helping hand to get going. Professional development can build your skillset, boost your comfort with new technologies, and bolster technology initiatives. <strong>Below is a list of our Professional Development options available.</strong></h5>
       </div>
     </div>
   </div>
 </section>

 <section class="hero-content plain">
   <div class="container-fluid">
     <nav class="row align-items-end">
       <ul class="col-md nav">
         <li class="nav-item">
           <h2><strong>Professional Development</strong> that’s relevant for you.</h2>
         </li>
       </ul>
       <ul class="col-md nav justify-content-end">
         <li class="nav-item">
           <?php
              $args = array (
                'post_type' => 'CDW-G-Products',
                'category_name' => 'professional-development-cdw-g-products'
              );
              $the_query = new WP_Query( $args );
            ?>
           <h6 class="nav-link cdwg-red">Showing <strong>(<?php echo $the_query -> found_posts; ?>)</strong>  Product(s)</h6>
         </li>
       </ul>
     </nav>
     <div class="row product-container">
       <?php if ( have_posts() ) :
         $args = array(
           'post_type' => 'CDW-G-Products',
           'category_name' => 'professional-development-cdw-g-products',
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
           <a class="main-link" href="<?php if(metadata_exists('post', $post->ID,'location')) { echo get_post_meta( $post->ID, 'location', true ); } else { the_permalink(); }; ?>" style="background-image: url('<?php echo $thumb_url[0]; ?>');">
             <h4><?php the_title(); ?></h4>
           </a>
         </div>
       </article>
     <?php endwhile; else : ?>
       <h3>No products found</h3>
     <?php endif; wp_reset_postdata(); // End have_posts() check. ?>

     </div>
  </div>
 </section>

 <footer>
   <div class="container-fluid">
     <nav class="row align-items-end">
       <ul class="col-md nav">
         <li class="nav-item">
           <h2><strong>For Site Assistance Please Contact:<br />877.455.9369</strong></h2>
           <div class="form-search-container">
             <div class="form">
               <input type="text" name="pagelist" placeholder="search through our product options here" class="ajax-search_text form-search">
               <div class="ajax-result"></div>
             </div>
           </div>
         </li>
       </ul>
       <ul class="col-md nav justify-content-end">
         <li class="nav-item">
           <small>© Copyright 2017 All rights reserved. Tequipment, Inc.<br />7 Norden Lane | Huntington Station, NY 11746</small>
         </li>
       </ul>
     </nav>
   </div>
 </footer>
<script type="text/javascript">
  jQuery(document).ready(function($){
    //when keyup on textbox
    $(".ajax-search_text").keyup(function(){

      var keyValue = $(this).val();
        if(keyValue){

          $.ajax({
            type : "POST",
            url  : "<?php echo admin_url('admin-ajax.php'); ?>",
            data : 'action=get_cdw_list_via_ajax&text='+ keyValue,
            success: function(response) {
               //past ajax result on result div.
               $(".ajax-result").html(response);
            }
    });

    } else {
      // if textfield is blank then remove all the ajax list.
      $(".ajax-result").html("");
    }
  });

    //one more condition when textbox is blank then don't show the listing.
  $(".ajax-search_text").blur(function(){
	   var keyValue = $(this).val();
      if(!keyValue){
   	    $(".ajax-result").html("");
      }
  });
});
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67374790-2', 'auto');
  ga('send', 'pageview');

  /**
* Function that tracks a click on an outbound link in Analytics.
* This function takes a valid URL string as an argument, and uses that URL string
* as the event label. Setting the transport method to 'beacon' lets the hit be sent
* using 'navigator.sendBeacon' in browser that support it.
*/
  var trackOutboundLink = function(url) {
   ga('send', 'event', 'outbound', 'click', url, {
     'transport': 'beacon',
     'hitCallback': function(){document.location = url;}
   });
  }

</script>

<?php wp_footer(); ?>

</body>
</html>
