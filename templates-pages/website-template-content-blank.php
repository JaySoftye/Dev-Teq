<?php
/**
 * Template Name: Website Template BLANK
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

    <!-- Custom CSS -->
    <link href="<?php echo get_stylesheet_directory_uri();?>/css/teq-brand-style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_stylesheet_directory_uri();?>/css/teq-brand-style-mobile.css" rel="stylesheet" type="text/css">
    <!-- Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">

</head>
<body <?php body_class(); ?>>

<?php wp_reset_query(); the_content(); ?>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-67374790-2', 'auto');
    ga('send', 'pageview');

    /**
  * Function that tracks a click on an outbound link in Analytics.
  * This function takes a valid URL string as an argument, and uses that URL string
  * as the event label. Setting the transport method to 'beacon' lets the hit be sent
  * using 'navigator.sendBeacon' in browser that support it.
  */
    var trackOutboundLink = function(url) {
     ga('send', 'event', 'outbound', 'click', url, {
       'transport': 'beacon',
       'hitCallback': function(){document.location = url;}
     });
    }

  </script>

<!-- Custon Javascript Functions -->
<script src="<?php echo get_template_directory_uri();?>/js/teqCustom-scripts.js"></script>

<?php wp_footer(); ?>
</body>
</html>
