<?php
/**
 * Template Name: Classroom Concepts Mobile Page
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

      <div class="container-fluid nopadding padding-top">
          <?php the_content(); ?>
      </div>

  <?php wp_reset_query(); the_content(); ?>

  <div class="container-fluid trialForm scrollToDiv nopadding padding-top padding-bottom">
    <div class="container">
      <h4 class="white padding-bottom text-center">If you would like schedule a specific time to discuss a more precise plan to drive student engagement at your school simply fill out the form below and a Teq Representative will reach out to you directly.</h4>
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
