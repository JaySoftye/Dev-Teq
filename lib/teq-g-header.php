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
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <link href="<?php echo get_stylesheet_directory_uri();?>/css/teq-g-style.css" rel="stylesheet" type="text/css" media="screen, projection">
    <link href="<?php echo get_stylesheet_directory_uri();?>/css/teq-g-print-style.css" rel="stylesheet" type="text/css" media="print" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,500,700|Roboto+Condensed:300,500,700" rel="stylesheet" type="text/css">

</head>
<body <?php body_class(); ?>>

  <script>
  $(document).ready(function(){
    $("a.registerForm").click(function(){
      $("div#hbspot-register-form").slideToggle();
    });
  });
  </script>

  <header class="container-fluid" id="main-nav">
    <nav class="row align-items-end">
      <ul class="col-md nav">
        <li class="nav-item">
          <a class="nav-link" href="https://www.teq.com/">
            <img src="<?php echo get_template_directory_uri(); ?>/images/teq-tagline-logo.svg" alt="Teq It's all about learning" />
          </a>
        </li>
      </ul>
      <ul class="col-md nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" href="/cdw-g-stem-products/">STEM Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cdw-g-professional-development/">Professional Development</a>
        </li>
        <li class="nav-item">
          <a class="nav-link registerForm" href="#"><strong>Register Your Deal</strong></a>
        </li>
      </ul>
    </nav>
    <div id="hbspot-register-form" class="container-fluid" style="padding: 2rem; display: none;">
      <div class="row">
        <div class="col-md">
          <h5>Register you deal using the form below.</h5><br />
        </div>
        <div class="col-md text-right">
          <a class="nav-link registerForm" href="#"><small>[close]</small></a>
        </div>
      </div>
      <div class="row">
        <div class="col-md">

<!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
  hbspt.forms.create({
	portalId: "182596",
	formId: "239ef9d7-666a-4a6c-83f9-ec34e5e37a42"
});
</script>
        </div>
      </div>
    </div>
  </header>
