<?php
/**
 * Template Name: Consulting Services Template
 * Description: Teq consulting services page template
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */

  get_template_part('lib/consulting-services-header');
  get_template_part( 'navigation', 'default' );
    global $wp_query;
      $postid = $wp_query->post->ID;
?>

</nav>

<div class="modal fade" id="brochureform" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body row">
        <div class="col-md text-center centeredForm padding-sm">
          <h5>To <strong>Request a Consulting Services meeting</strong> simply fill out the form below and one or our Educational Specialists will reach out to you directly.</h5>
          <!--[if lte IE 8]>
          <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
          <![endif]-->
          <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
          <script>
          hbspt.forms.create({
            portalId: '182596',
            formId: '<?php echo get_post_meta($postid, 'formId', true); ?>',
          });
          </script>
        </div>
      </div>
    </div>
  </div>
</div>

<main>
  <?php wp_reset_query(); the_content(); ?>
</main>

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
