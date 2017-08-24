<?php
/**
 * Template Name: Landing Page - BootstrapFour
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
    <?php get_template_part( 'navigation', 'default' ); ?>

	   <?php wp_reset_query(); the_content(); ?>

<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
<?php wp_footer(); ?>

<script type="text/javascript">
$(document).ready(function(){

  $(".header-form").on("click", function(){
    $(".header-form").html('Learn More');
  });

});
</script>

  </body>

</html>
