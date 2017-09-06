<?php
/**
 * Template Name: Form Submission Thank You
 * Description: Displays blog posts with pagination and featured image.
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

      <link href="<?php echo get_stylesheet_directory_uri();?>/css/teq-brand-style.css" rel="stylesheet" type="text/css">
      <link href="<?php echo get_stylesheet_directory_uri();?>/css/addingstyle.css" rel="stylesheet" type="text/css">
      <!-- Roboto -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">

  </head>
  <body <?php body_class(); ?>>

<div class="container-fluid" style="background: transparent url(<?php echo get_template_directory_uri();?>/_img/form-submission-thank-you-smart-learning-bg.jpg) no-repeat top center; background-size: cover; -webkit-box-shadow: 0px 5px 10px 0px rgba(0,0,0,0.1); -moz-box-shadow: 0px 5px 10px 0px rgba(0,0,0,0.1); box-shadow: 0px 5px 10px 0px rgba(0,0,0,0.1);">
  <div class="row height-three-quarters padding">

    <div class="container flex-md-middle padding-top padding-bottom">
      <div class="col text-center">
        <h1 class="white display-4 teqBlue"><strong>Thank you</strong> for your interest.</h1>
        <h3 class="white">A Teq Representative will reach out to you shortly. Please feel free to contact us with any additional questions at <strong>877.455.9369</strong> or online at <a class="white" href="http://www.teq.com">Teq.com</a>.</h3>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>
