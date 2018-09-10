<?php
/**
 * The template for gathering the custom post META fields to the Post Type NEDM Survey
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
      <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>

      <link href="<?php echo get_stylesheet_directory_uri();?>/css/nyc-doe.css" rel="stylesheet" type="text/css">
      <!-- Roboto -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">

  </head>

<body <?php body_class(); ?>>

  <div class="container-fluid main-header">

    <nav class="row navbar padding-sm">
      <div class="col-md flex-md-middle">
        <a class="navbar-brand teq-cdw" href="/nycdoe">
          <img src="<?php echo get_template_directory_uri();?>/_img/teq-cdw-g-contract-no-B220901.svg" style="margin: 0;" />
        </a>
      </div>
      <div class="col-md flex-md-middle navbar-text">
        <a href="/nycdoe/#famis-products">NYC Product Catalog</a> | <strong>877.455.9369</strong>
      </div>
    </nav>
