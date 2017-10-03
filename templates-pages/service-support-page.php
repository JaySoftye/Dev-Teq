<?php
/**
 * Template Name: Support Service Page without Teq Essentials
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
              <button class="d-inline-block learnhow light" type="button">Contact Support</button>
            </center>
          </div>
        </div>
      </div>

      <?php
      /**
*      <div class="container-fluid nopadding trialForm collapse" id="trialsignup">
*        <div class="container">
*          <div class="col-md nopadding">
*            <h6 class="white text-center">For more info or to <strong>request a call from our Support Staff</strong>, simply fill out the form below.</h6>
*            <!--[if lte IE 8]>
*              <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
*            <![endif]-->

*            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
*              <script>
*                hbspt.forms.create({
*                  portalId: '182596',
*                  formId: '<?php echo get_post_meta($postid, 'formId', true); ?>',
*                });
*              </script>
*          </div>
*        </div>
*      </div>
      **/
      ?>

    <?php wp_reset_query(); the_content(); ?>

  <div class="scrollToDiv container-fluid nopadding contact-support" id="contactSupportTeam">
    <div class="row padding-top padding-bottom">
      <div class="container padding">
        <div class="col-md-6 padding flex-md-middle">
          <h1 class="white"><strong>Having an issue?</strong></h1>
          <h3 class="productBlue">Contact our TEQ Support Specialists today.</h3>
          <h1 class="white"><strong>877.455.9369</strong></h1>
        </div>
        <div class="col-md-6 padding flex-md-middle">
          <h1 class="white"><strong>Teq Support Plans</strong></h1>
          <p class="white">We will happily provide tech support for you if you have:</p>
          <ol>
            <li class="product white">Have an active Teq service plan or warranty and are located in the NY and NJ area.</li>
            <li class="product white">Purchased SMART hardware within the last 24 months</li>
            <li class="product white">Have a license and active SMART Notebook Advantage Subscription</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid nopadding classroomConcepts hidden-sm-down hidden-xs-down">
    <div class="row height-full">
      <div class="col-md-2"></div>
      <div class="col-md-8 flex-md-middle text-center padding">
        <h2 class="white"><strong>Discover the new classroom for the 21st Century.</strong></h2>
        <h4 class="white">Teq offers full technology-based learning concepts for every level of K12 education. Select your school level below and discover the new modern classroom.</h4>
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
