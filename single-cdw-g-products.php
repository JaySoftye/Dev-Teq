<?php
/**
 * Default Custom Post Type - FAMIS Product
 * Description: Post template with a content container.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_template_part('lib/cdw-g-header');
  global $wp_query;
    $postid = $wp_query->post->ID;
?>

<section class="container product-post-content">
  <div class="row">
    <div class="col-md">
      <img class="post-header-image" src="<?php echo get_post_meta($postid, 'headerBackground', true); ?>" />
      <h1><strong><?php the_title();?></strong><span class="blink"></span></h1>
      <div class="post-content">
        <?php wp_reset_query(); the_content(); ?>
      </div>
      <div class="hs-form-container">
        <h4>Interested in <strong><?php the_title();?></strong>?<br />Request a quote using the form below.</h4>
        <hr />
        <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
        <![endif]-->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
        <script>
          hbspt.forms.create({
	         portalId: "182596",
	         formId: "613107ff-4fb1-487a-8236-27ac48a54867"
          });
        </script>
      </div>
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
