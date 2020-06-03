<footer>
<div class="container">
    <?php
      if (function_exists('bootstrapwp_breadcrumbs')) {
        bootstrapwp_breadcrumbs();
      }
    ?>
  <div class="row">
    <div class="col-md-3">
      <h3 class="teqBlue">It's all about learning.</h3>
      <h6><a class="white" data-toggle="collapse" href="#footerProducts" aria-expanded="false" aria-controls="footerProducts">Products &amp; Things &#187;</a></h6>
      <ul class="footerLinks collapse" id="footerProducts">
        <li><a href="<?php echo site_url(); ?>/pd-platforms/" class="white">PD Platforms</a></li>
        <li><a href="<?php echo site_url(); ?>/instructional-software/" class="white">Instructional Software</a></li>
        <li><a href="<?php echo site_url(); ?>/stem/" class="white">STEM Solutions</a></li>
        <li><a href="<?php echo site_url(); ?>/sight-and-sound/" class="white">Sight and Sound</a></li>
      </ul>
      <h6><a href="<?php echo site_url(); ?>/evospaces/" class="white">evoSpaces &#187;</a></h6>
      <h6><a href="<?php echo site_url(); ?>/support-and-services/" class="white">Technical Support &#187;</a></h6>
      <h6><a class="white" data-toggle="collapse" href="#footerLearning" aria-expanded="false" aria-controls="footerLearning">Community &#187;</a></h6>
      <ul class="footerLinks collapse" id="footerLearning">
        <li><a href="/learning-community/teq-talk/" class="white">Teq Talk</a></li>
        <li><a href="/learning-community/teq-tips/" class="white">Teq Tips</a></li>
      </ul>
      <h6><a class="white" href="<?php echo site_url(); ?>/teq-events/">Events &#187;</a></h6>
      <h6><a href="<?php echo site_url(); ?>/about-us/" class="white">About &#187;</a></h6>
      <div class="row">
        <div class="col-md">
          <a href="https://www.facebook.com/myTeq/"><img src="<?php echo get_template_directory_uri();?>/_img/teq-footer-facebook-icon.png" /></a>
        </div>
        <div class="col-md">
          <a href="https://twitter.com/OTIS4educators"><img src="<?php echo get_template_directory_uri();?>/_img/teq-footer-twitter-icon.png" /></a>
        </div>
        <div class="col-md">
          <a href="https://www.linkedin.com/company/teq/"><img src="<?php echo get_template_directory_uri();?>/_img/teq-footer-linkedin-icon.png" /></a>
        </div>
        <div class="col-md">
          <a href="https://www.instagram.com/edteq/"><img src="<?php echo get_template_directory_uri();?>/_img/teq-footer-instagram-icon.png" /></a>
        </div>
      </div>
    </div>
    <div class="col-md-5 hidden-sm-down hidden-xs-down">
      <h3 class="teqBlue">Teq Talk</h3>
      <ul class="footerLinks">
      <?php $the_query = new WP_Query(array('posts_per_page' => '2' , 'category_name' => 'news')); ?>
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <li class="white"><a class="teqBlue" href="<?php the_permalink() ?>"> <?php the_title(); ?> </a> - <?php echo get_the_excerpt(); ?>...<small><a class="teqBlue" href="<?php the_permalink() ?>">READ MORE &#187;</a></small></p>
        </li>
			<?php endwhile; wp_reset_postdata(); ?>
      </ul>
    </div>
    <div class="col-md-4">
      <h3 class="teqBlue">Stay Connected</h3>
      <p class="white">Subscribe to receive email from Teq</p>
      <!--[if lte IE 8]>
      <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
      <![endif]-->
      <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
      <script>
        hbspt.forms.create({
          portalId: '182596',
          formId: 'ec8c46db-58d6-4267-9f39-6f3fc85bfc2f'
        });
      </script>
      <p class="white">7 Norden Lane<br /> Huntington Station, NY 11746 (US)<br />877.455.9369 | info@teq.com</p>
      <small></small>
    </div>
  </div>
  <div class="row">
    <div class="col-md">
      <small class="text-center">©2016 - Teq®, It’s all about learning.TM,  iBlocks TM, evoSpaces TM, pBlocks TM, Teq Essentials®, nOw Instructional Support®, OPD Online Professional Development®, Onsite Professional Development®, and Powered by Teq® are trademarks or registered trademarks of Tequipment, Inc. in the US. Other company names and product names appearing here are the trademarks and registered trademarks of their respective companies.</small>
    </div>
  </div>
</div>
</footer>
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

<!-- Custon Javascript Functions -->
<script src="<?php echo get_template_directory_uri();?>/js/teqCustom-scripts.js"></script>

<?php wp_footer(); ?>
</body>
</html>
