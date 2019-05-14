<?php
/**
 * The template for displaying 404 pages (Not Found).
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

    <!-- Custom CSS -->
    <link href="<?php echo get_stylesheet_directory_uri();?>/css/teq-brand-style.css" rel="stylesheet" type="text/css">
    <!-- Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">

</head>
<body <?php body_class(); ?>>
<main>
  <div class="container-fluid error-header">
    <div class="row height-full">
      <div class="container flex-md-middle text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/_img/404-snap-icon.svg" class="halfWidth" />
        <h1 class="display-3 white text-center">Oh Snap! this page cannot be found!</h1>
        <h4 class="white text-center">It seems we can’t find what you’re looking for, try and start from the home page using the link below.</h4>
        <center>
          <a href="http://www.teq.com"><button class="learnhow lightBlue">Back to home</button></a>
        </center>
      </div>
    </div>
  </div>
</main>

  <?php get_footer();
