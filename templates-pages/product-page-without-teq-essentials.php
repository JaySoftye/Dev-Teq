<?php
/**
 * Template Name: Product Page without Teq Essentials
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

      <div class="container-fluid nopadding main-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/_img/<?php echo get_post_meta($postid, 'headerBackground', true); ?>.jpg');">
        <div class="row height-full bottomGradient">
          <div class="container flex-md-bottom">
            <div>
              <h2 class="white text-center"><?php echo get_post_meta($postid, 'headerTitle', true); ?></h2>
              <h4 class="white text-center"><strong><?php echo get_post_meta($postid, 'headerCaption', true); ?></strong></h4>
            </div>
            <center>
              <button class="d-inline-block trialScroll light" type="button" data-toggle="collapse" data-target="#trialsignup" aria-expanded="false" aria-controls="trialsignup">Request a Demo</button>
            </center>
          </div>
        </div>
      </div>

      <div class="container-fluid nopadding trialForm collapse" id="trialsignup">
        <button class="trialClose" type="button" aria-label="Close" data-toggle="collapse" data-target="#trialsignup" aria-expanded="true" aria-controls="trialsignup"><span aria-hidden="true">×</span></button>
        <div class="container">
          <div class="col-md nopadding">
            <h6 class="white text-center">For more info or to <strong>request a product demo</strong>, simply fill out the form below and a Teq Representative will reach out to you directly.</h6>
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

    <?php wp_reset_query(); the_content(); ?>

  <div class="container-fluid nopadding scrollToBottom classroomConcepts hidden-xs-down hidden-sm-down">
    <div class="row height-full">
      <div class="col-md-2"></div>
      <div class="col-md-8 flex-md-middle text-center padding">
        <h2 class="white"><strong>Discover the new classroom for the 21st Century.</strong></h2>
        <h4 class="white">Teq offers full technology based learning concepts for every level of k12 education. Select your school level below and discover the new modern classroom.</h4>
        <div class="row">
          <div class="col-sm">
            <a href="/elementary-classroom-concepts/"><img src="<?php echo get_template_directory_uri(); ?>/_img/teq-classroom-concepts-elementary-school-icons.png" /></a>
          </div>
          <div class="col-sm">
            <a href="/middle-classroom-concepts/"><img src="<?php echo get_template_directory_uri(); ?>/_img/teq-classroom-concepts-middle-school-icons.png" /></a>
          </div>
          <div class="col-sm">
            <a href="/high-classroom-concepts/"><img src="<?php echo get_template_directory_uri(); ?>/_img/teq-classroom-concepts-high-school-icons.png" /></a>
          </div>
          <div class="col-sm">
            <a href="/special-education-classroom-concepts/"><img src="<?php echo get_template_directory_uri(); ?>/_img/teq-classroom-concepts-special-inclusive-icons.png" /></a>
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>

<?php get_footer(); ?>
