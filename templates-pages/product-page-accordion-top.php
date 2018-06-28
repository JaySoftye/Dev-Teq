<?php
/**
 * Template Name: Product Page with a Top Accordion
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
              <p class="gdpr-form">By submitting this form I confirm that I would like to receive email from Teq</p>
          </div>
        </div>
      </div>

      <div class="container-fluid accordionContainer" style="background-image: url('<?php echo get_template_directory_uri(); ?>/_img/<?php echo get_post_meta($postid, 'accordionBackground', true); ?>.jpg');">
        <div class="container">
          <div class="row height-full">
            <div class="col-md flex-md-middle">

              <ul class="nav navbar-nav">
                <li class="nav-item accordion active"><a data-toggle="tab" href="#menu1"><img src="<?php echo get_template_directory_uri(); ?>/_img/<?php echo get_post_meta($postid, 'accordionItemOneIcon', true); ?>.svg" /><span><?php echo get_post_meta($postid, 'accordionItemOneTitle', true); ?></span></a></li>
                <li class="nav-item accordion"><a data-toggle="tab" href="#menu2"><img src="<?php echo get_template_directory_uri(); ?>/_img/<?php echo get_post_meta($postid, 'accordionItemTwoIcon', true); ?>.svg" /><span><?php echo get_post_meta($postid, 'accordionItemTwoTitle', true); ?></span></a></li>
                <li class="nav-item accordion"><a data-toggle="tab" href="#menu3"><img src="<?php echo get_template_directory_uri(); ?>/_img/<?php echo get_post_meta($postid, 'accordionItemThreeIcon', true); ?>.svg" /><span><?php echo get_post_meta($postid, 'accordionItemThreeTitle', true); ?></span></a></li>
              </ul>

              <div class="tab-content">
                <div id="menu1" class="tab-pane fade in active">
                  <h2 class="white text-center"><?php echo get_post_meta($postid, 'accordionItemOneDescription', true); ?></h2>
                </div>
                <div id="menu2" class="tab-pane fade">
                  <h2 class="white text-center"><?php echo get_post_meta($postid, 'accordionItemTwoDescription', true); ?></h2>
                </div>
                <div id="menu3" class="tab-pane fade">
                  <h2 class="white text-center"><?php echo get_post_meta($postid, 'accordionItemThreeDescription', true); ?></h2>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

    <?php wp_reset_query(); the_content(); ?>

  <div class="container-fluid">
    <div id="essentialCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">

        <div class="carousel-item active essentialsBackground1">
          <div class="container-fluid carousel-item-container-blue">
          <div class="container padding-top padding-bottom">
            <div class="col-md-6 nopadding">
              <h1 class="white display-1">Combine.</h1>
              <h3 class="white">Combine the learning power of <?php the_title( '<strong>', '</strong>' ); ?> with <a class="white bold" href="<?php echo site_url(); ?>/pd-platforms/online-pd"/>Online</a> and <a class="white bold" href="<?php echo site_url(); ?>/pd-platforms/onsite-pd">Onsite PD</a> and an unparalleled level of Instructional Support for your Essential Learning Package.</h3><a class="white" href="http://onlinepd.teq.com">onlinepd.teq.com</a>
              <center><a href="<?php echo site_url(); ?>/pd-platforms/teq-essentials/"><button class="light">Find out more</button></a></center>
            </div>
            <div class="col-md-6 nopadding flex-md-middle">
              <img class="essentialImg hidden-sm-down hidden-xs-down" src="<?php echo get_template_directory_uri(); ?>/_img/teq-essentials-slider-product-box-image.png" />
            </div>
          </div>
          </div>
        </div>

        <div class="carousel-item essentialsBackground2">
          <div class="container-fluid carousel-item-container-green">
          <div class="container padding-top padding-bottom">
            <div class="col-md-6 nopadding">
              <h1 class="white display-1">Support.</h1>
              <h3 class="white">Support <?php the_title( '<strong>', '</strong>' ); ?> with a fast, personalized way to get instructional technology help from a state-certified PD specialist, right when you need it most.</h3><a class="white" href="http://now.teq.com">now.teq.com</a>
              <center><a href="<?php echo site_url(); ?>/pd-platforms/now-instructional-support/"><button class="light">Find out more</button></a></center>
            </div>
            <div class="col-md-6 nopadding flex-md-middle">
              <img class="essentialImg hidden-sm-down hidden-xs-down" src="<?php echo get_template_directory_uri(); ?>/_img/teq-essentials-slider-now-ipad-product-image.png" />
            </div>
          </div>
          </div>
        </div>

        <div class="carousel-item essentialsBackground3">
          <div class="container-fluid carousel-item-container-blue-full">
          <div class="container">
            <div class="col-md-6 nopadding">
              <h1 class="white display-1">Learn. <img src="<?php echo get_template_directory_uri(); ?>/_img/teq-essentials-slider-learn-ctle-approved.png" /></h1>
              <h3 class="white">Learn to utilize the potential <?php the_title( '<strong>', '</strong>' ); ?> can have inside the classroom with Teq online PD.</h3>
              <h5><a class="white" href="<?php echo get_post_meta($postid, 'PdRecOneURL', true); ?>"><strong><?php echo get_post_meta($postid, 'PdRecOneTitle', true); ?></strong></a> <img src="<?php echo get_template_directory_uri(); ?>/_img/teq-essentials-slider-learn-schedule-icon.png" /></h5>
              <p class="white"><?php echo get_post_meta($postid, 'PdRecOneDescription', true); ?></p>
              <center><a href="<?php echo get_post_meta($postid, 'PdRecOneURL', true); ?>"><button class="light">Register for this course</button></a></center>
            </div>
            <div class="col-md-6 nopadding flex-md-middle">
              <img class="essentialImg hidden-sm-down hidden-xs-down" src="<?php echo get_template_directory_uri(); ?>/_img/teq-essentials-slider-pd-recommend-image.png" />
            </div>
          </div>
          </div>
        </div>

      </div>
      <a class="left carousel-control" href="#essentialCarousel" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#essentialCarousel" role="button" data-slide="next">
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="container-fluid nopadding scrollToBottom classroomConcepts hidden-xs-down hidden-sm-down">
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
