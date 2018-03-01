<?php
/**
 * Template Name: Channel Partners Welcome Page
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
      <meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
      <meta name="description" content="<?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
      <?php wp_head(); ?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link href="<?php echo get_stylesheet_directory_uri();?>/css/teq-brand-style.css" rel="stylesheet" type="text/css">
      <link href="<?php echo get_stylesheet_directory_uri();?>/css/addingstyle.css" rel="stylesheet" type="text/css">
      <!-- Roboto -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">

      <script>
$(document).ready(function(){
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 500, function(){
        window.location.hash = hash;
      });
    }
  });
});
</script>

  </head>
  <body <?php body_class(); ?>>
    <?php get_template_part( 'navigation', 'default' );
      global $wp_query;
        $postid = $wp_query->post->ID;
    ?>

      <div class="container-fluid" style="background-image: url('<?php echo get_template_directory_uri(); ?>/_img/<?php echo get_post_meta($postid, 'headerBackground', true); ?>.jpg');">
        <div class="container padding-top">
          <div class="row">
            <div class="col-md-7">
              <ul class="nav navbar-nav">
                <li class="nav-item"><a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/_img/<?php echo get_post_meta($postid, 'headerCaption', true); ?>.png" /></a></li>
                <li class="nav-item"><a href="http://onlinepd.teq.com" class="white">More about Online PD</a></li>
                <li class="nav-item"><a href="#form" class="white"><button class="rounded-rectangle">Customize a PD plan</button></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="container flex-md-bottom">
            <div class="col-md-12 flex-md-bottom padding">
              <h1 class="padding-top display-3 white bold text-center"><strong><?php echo get_post_meta($postid, 'headerTitle', true); ?></strong></h1>
              <h2 class="white text-center">Finally Professional Development designed around you.</h2>
            </div>
            <div class="col-md-12 flex-md-bottom text-center padding-top">
              <img src="<?php echo get_template_directory_uri();?>/_img/channel-partners-welcome-opd-window.png" class="fullWidthImage" />
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid" id="form">
        <div class="row padding-top">
          <div class="container">
            <div class="col-sm text-center">
              <p class="lead">Teq is a full-fledged PD vendor whose primary goal is to deliver easy-to-understand and up-to-date instructional technology aide where and when you need it most. <strong>We would love the opportunity to customize a PD plan suited to your specific educational goals</strong>. To see more of our PD offerings simply fill out the form below and a PD Specialist will contact you directly.</p>
            </div>
          </div>
        </div>
        <div class="row nopadding">
          <div class="container">
            <div class="col-sm standardForm">
              <!--[if lte IE 8]>
              <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
              <![endif]-->
              <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                <script>
                  hbspt.forms.create({
                    portalId: '182596',
                    formId: '86c1596f-82aa-4f66-bca5-ad0ded9fb0af'
                  });
                </script>
            </div>
          </div>
        </div>
        <div class="row nopadding">
          <div class="container">
            <div class="col-sm text-center">
              <img src="<?php echo get_template_directory_uri();?>/_img/channel-partners-welcome-pd-catalog.jpg" />
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 flex-md-bottom padding-top">
            <h5 class="text-center">Professional Development that works for you</h5>
            <h1 class="bold text-center"><strong>Learn when you want to. Receive help when you need to.</strong></h1>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row padding-bottom">
          <div class="container">
            <div class="col-md-4 nopadding text-center">
                <a href="<?php echo get_site_url(); ?>" class="teqBlue"><img src="<?php echo get_template_directory_uri();?>/_img/channel-partners-welcome-its-all-about-learning.jpg" /></a>
              <h5><strong>It's all about learning.</strong></h5>
              <a href="<?php echo get_site_url(); ?>" class="teqBlue">Learn more about Teq and how we help drive student achievement.</a>
            </div>
            <div class="col-md-4 nopadding text-center">
              <a href="http://onlinepd.teq.com" class="teqBlue"><img src="<?php echo get_template_directory_uri();?>/_img/channel-partners-welcome-the-fusion-of-technology-and-learning.jpg" /></a>
              <h5><strong>The fusion of technology and learning.</strong></h5>
              <a href="http://onlinepd.teq.com" class="teqBlue">Learn more about Teq Online PD and create your own customized PD plan.</a>
            </div>
            <div class="col-md-4 nopadding text-center">
              <a href="<?php echo get_site_url(); ?>/ctle-approved/" class="teqBlue"><img src="<?php echo get_template_directory_uri();?>/_img/channel-partners-welcome-ensure-your-pd-is-state-approved.jpg" /></a>
              <h5><strong>Ensure your PD is state approved.</strong></h5>
              <a href="<?php echo get_site_url(); ?>/ctle-approved/" class="teqBlue">See our complete list of State Approved Professional Development.</a>
            </div>
          </div>
        </div>
      </div>

      <?php wp_reset_query(); the_content(); ?>

      <?php get_footer(); ?>
  </body>

</html>
