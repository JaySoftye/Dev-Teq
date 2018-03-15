   <?php
/**
 * Template Name: Classroom Concepts Page
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
  <?php get_header(); ?>
    <?php get_template_part( 'navigation', 'default' ); ?>
    <?php

      global $wp_query;
        $postid = $wp_query->post->ID;
    ?>

</nav>
<div id="popInWindow">
  <a href="/roadmap"><img src="<?php echo get_template_directory_uri();?>/_img/teq-roadmap_icon-link.svg" alt="Teq 2018 Roadmap" /></a>
</div>

      <div class="container-fluid nopadding height-full concepts" style="background-image: url('<?php echo get_template_directory_uri(); ?>/_img/<?php echo get_post_meta($postid, 'headerBackground', true); ?>.jpg');">
        <div class="row">
          <div class="container conceptsMap">
              <svg class="height-full">
                <g>
                  <a href="#conceptOne" data-toggle="modal">
                    <circle cx="<?php echo get_post_meta($postid, 'conceptOneX', true); ?>%" cy="<?php echo get_post_meta($postid, 'conceptOneY', true); ?>%" r="23" stroke="#eceeef" stroke-width="2" fill="#4fc5dd" />
                    <text text-anchor="middle" x="<?php echo get_post_meta($postid, 'conceptOneX', true); ?>%" y="<?php echo get_post_meta($postid, 'conceptOneY', true); ?>%" fill="#4fc5dd">Sight and Sound</text>
                  </a>
                </g>
                <g>
                  <a href="#conceptTwo" data-toggle="modal">
                    <circle cx="<?php echo get_post_meta($postid, 'conceptTwoX', true); ?>%" cy="<?php echo get_post_meta($postid, 'conceptTwoY', true); ?>%" r="23" stroke="#eceeef" stroke-width="2" fill="#4fc5dd" />
                    <text text-anchor="middle" x="<?php echo get_post_meta($postid, 'conceptTwoX', true); ?>%" y="<?php echo get_post_meta($postid, 'conceptTwoY', true); ?>%" fill="#4fc5dd">Instructional Software</text>
                  </a>
                </g>
                <g>
                  <a href="#conceptThree" data-toggle="modal">
                    <circle cx="<?php echo get_post_meta($postid, 'conceptThreeX', true); ?>%" cy="<?php echo get_post_meta($postid, 'conceptThreeY', true); ?>%" r="23" stroke="#eceeef" stroke-width="2" fill="#4fc5dd" />
                    <text text-anchor="middle" x="<?php echo get_post_meta($postid, 'conceptThreeX', true); ?>%" y="<?php echo get_post_meta($postid, 'conceptThreeY', true); ?>%" fill="#4fc5dd">STEM</text>
                  </a>
                </g>
                <g>
                  <a href="#conceptFour" data-toggle="modal">
                    <circle cx="<?php echo get_post_meta($postid, 'conceptFourX', true); ?>%" cy="<?php echo get_post_meta($postid, 'conceptFourY', true); ?>%" r="23" stroke="#eceeef" stroke-width="2" fill="#4fc5dd" />
                    <text text-anchor="middle" x="<?php echo get_post_meta($postid, 'conceptFourX', true); ?>%" y="<?php echo get_post_meta($postid, 'conceptFourY', true); ?>%" fill="#4fc5dd">Professional Development</text>
                  </a>
                </g>
                <g>
                  <a href="#conceptFive" data-toggle="modal">
                    <circle cx="<?php echo get_post_meta($postid, 'conceptFiveX', true); ?>%" cy="<?php echo get_post_meta($postid, 'conceptFiveY', true); ?>%" r="23" stroke="#eceeef" stroke-width="2" fill="#4fc5dd" />
                    <text text-anchor="middle" x="<?php echo get_post_meta($postid, 'conceptFiveX', true); ?>%" y="<?php echo get_post_meta($postid, 'conceptFiveY', true); ?>%" fill="#4fc5dd">Cloudgenix</text>
                  </a>
                </g>
              </svg>
          </div>
        </div>
      </div>
  <div id="conceptsModals">
	   <?php wp_reset_query(); the_content(); ?>
  </div>

  <div class="container-fluid trialForm scrollToDiv nopadding padding-top padding-bottom">
    <div class="container">
      <h2 class="white text-center teqBlue">Let's put together <strong>a classroom plan for you</strong>.</h2>
      <h4 class="white text-center padding-bottom">If you would like schedule a specific time to discuss a more precise classroom plan to drive student engagement at your school simply fill out the form below and a Teq Representative will reach out to you directly.</h4>
        <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
        <![endif]-->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
        <script>
          hbspt.forms.create({
            portalId: '182596',
            formId: '68ffbe0d-eb5e-45f1-80ba-c3e8e7845abb'
          });
        </script>
    </div>
  </div>

<?php get_footer(); ?>
