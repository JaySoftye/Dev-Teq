<footer>
<div class="container">

    <?php
      if (function_exists('bootstrapwp_breadcrumbs')) {
        bootstrapwp_breadcrumbs();
      }
    ?>
  <div class="row">

    <div class="col-md-3">
      <h3 class="teqBlue">Its all about learning.</h3>
      <h6><a class="white" data-toggle="collapse" href="#footerProducts" aria-expanded="false" aria-controls="footerProducts">Products &amp; Things &#187;</a></h6>
      <ul class="footerLinks collapse" id="footerProducts">
        <li><a href="<?php echo site_url(); ?>/pd-platforms/" class="white">PD Platforms</a></li>
        <li><a href="<?php echo site_url(); ?>/instructional-software/" class="white">Instructional Software</a></li>
        <li><a href="<?php echo site_url(); ?>/stem/" class="white">STEM Solutions</a></li>
        <li><a href="<?php echo site_url(); ?>/sight-and-sound/" class="white">Sight and Sound</a></li>
        <li><a href="<?php echo site_url(); ?>/sd-wan/" class="white">SD-Wan from Cloudgenix</a></li>
      </ul>
      <h6><a class="white" data-toggle="collapse" href="#footerConcepts" aria-expanded="false" aria-controls="footerConcepts">Consulting Services &#187;</a></h6>
      <ul class="footerLinks collapse" id="footerConcepts">
        <li><a href="<?php echo site_url(); ?>/consulting-services/" class="white">About Teq Consulting</a></li>
        <li><a href="http://www.teq.com/consulting-services/eils/" class="white">Effective Educational Leadership &amp; Supervision</a></li>
        <li><a href="http://www.teq.com/consulting-services/nedm/" class="white">Network Enabled Device Management</a></li>
        <li><a href="http://www.teq.com/consulting-services/si/" class="white">Stem Initiatives</a></li>
      </ul>
      <h6><a class="white" data-toggle="collapse" href="#footerServices" aria-expanded="false" aria-controls="footerServices">Support &amp; Services &#187;</a></h6>
      <ul class="footerLinks collapse" id="footerServices">
        <li><a href="<?php echo site_url(); ?>/support-and-services/" class="white">Service Plans</a></li>
        <li><a href="<?php echo site_url(); ?>/support-and-services/support-resources/" class="white">Product Guides</a></li>
      </ul>
      <h6><a class="white" data-toggle="collapse" href="#footerLearning" aria-expanded="false" aria-controls="footerLearning">Community &#187;</a></h6>
      <ul class="footerLinks collapse" id="footerLearning">
        <li><a href="/learning-community/teq-talk/" class="white">Teq Talk</a></li>
        <li><a href="/learning-community/teq-tips/" class="white">Teq Tips</a></li>
        <li><a href="/learning-community/media-resource-center/" class="white">Media Center</a></li>
        <li><a href="/learning-community/social-media-center/" class="white">Social Media </a></li>
      </ul>
      <h6><a class="white" href="<?php echo site_url(); ?>/teq-events/">Events &#187;</a></h6>
      <h6><a class="white" data-toggle="collapse" href="#footerAbout" aria-expanded="false" aria-controls="footerAbout">About &#187;</a></h6>
      <ul class="footerLinks collapse" id="footerAbout">
        <li><a href="<?php echo site_url(); ?>/about-us/" class="white">About Us</a></li>
        <li><a href="<?php echo site_url(); ?>/about-us/press-releases/" class="white">Press Releases</a></li>
        <li><a href="<?php echo site_url(); ?>/about-us/testimonials/" class="white">Testimonials</a></li>
        <li><a href="<?php echo site_url(); ?>/about-us/teq-careers/" class="white">Teq Careers</a></li>
        <li><a href="<?php echo site_url(); ?>/contact-us/" class="white">Contact Us</a></li>
      </ul>
      <h6><a href="https://www.facebook.com/myTeq/"><img src="<?php echo get_template_directory_uri();?>/_img/teq-footer-facebook-icon.png" /></a><a href="https://twitter.com/TeqPD"><img src="<?php echo get_template_directory_uri();?>/_img/teq-footer-twitter-icon.png" /></a><a href="https://www.linkedin.com/company/teq/"><img src="<?php echo get_template_directory_uri();?>/_img/teq-footer-linkedin-icon.png" /></a></h6>
      <small>©2016 Teq - all rights reserved</small>
    </div>
    <div class="col-md-5 padding-right hidden-sm-down hidden-xs-down">
      <h3 class="teqBlue">Teq Talk</h3>

      <?php $the_query = new WP_Query( 'posts_per_page=2' ); ?>
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <div>
          <p class="white"><a class="teqBlue" href="<?php the_permalink() ?>"> <?php the_title(); ?> </a> - <?php echo get_the_excerpt(); ?>...<small><a class="white bold" href="<?php the_permalink() ?>">READ MORE &#187;</a></small></p>
        </div>
			<?php endwhile; wp_reset_postdata(); ?>

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
      <div class="col-md-12 nopadding">
        <img src="<?php echo get_template_directory_uri();?>/_img/teq-footer-teq-icon.png" />
      </div>
      <div class="col-md-6 nopadding">
        <p class="white">7 Norden Lane<br />Huntington Station, NY 11746 United States</p>
      </div>
      <div class="col-md-6 nopadding">
        <p class="white">Phone: 877.455.9369<br />Email: info@teq.com<br />Fax: 631.293.4951</p>
      </div>
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
