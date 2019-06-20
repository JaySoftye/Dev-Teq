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

    <!-- Custom CSS -->
    <link href="<?php echo get_stylesheet_directory_uri();?>/css/teq-brand-style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_stylesheet_directory_uri();?>/css/teq-brand-style-mobile.css" rel="stylesheet" type="text/css">
    <!-- Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">

</head>
<body <?php body_class(); ?>>
  <?php if( is_home() ) { do_action('after_body_open_tag'); } ?>

  <nav id="mainNav">
    <?php
      if ( is_page_template( 'templates-pages/classroom-concepts.php' ) || is_page_template( 'templates-pages/learning-community.php' ) || is_page_template( 'templates-pages/learning-community-teq-talk.php' ) || is_page_template( 'templates-pages/learning-community-media-resource-center.php' ) || is_page_template( 'templates-pages/learning-community-educator-resource-center.php' ) || is_archive() || is_search() || is_404() ) {
    ?>
      <header id="mainBanner" class="hidden-sm-down hidden-xs-down collapse in"></header>

    <?php
      } else {
    ?>
    <header id="mainBanner" class="hidden-sm-down hidden-xs-down collapse in">
      <div class="container">
        <?php if( is_home() ) { ?>
          <div class="col" id="bannerPlugin"></div>
        <?php } elseif(metadata_exists('post', $post->ID,'bannerHeaderImg')) { ?>
          <div class="col">
            <a href="<?php echo get_post_meta($post->ID, 'bannerHeaderURL', true); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo get_post_meta($post->ID, 'bannerHeaderImg', true); ?>.jpg" />
            </a>
          </div>
        <?php } else { ?>
          <span></span>
        <?php } ?>
      </div>
    </header>
    <?php } ?>
    <div class="mobileNav hidden-lg-up hidden-md-up">
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a href="#navbarMobile" data-toggle="collapse" aria-expanded="false" aria-controls="classroomConceptsMenu" aria-label="Toggle navigation" title="menue"><img src="<?php echo get_template_directory_uri();?>/_img/mobilenav-logo-icon.svg" class="mainLogo" /></a>
        </li>
      </ul>
      <ul id="navbarMobile" class="nav collapse">
        <li class="nav-item">
          <h6><a class="white nav-link" data-toggle="collapse" href="#mobileMenuProducts" aria-expanded="false" aria-controls="mobileMenuProducts">Products and Things</a></h6>
          <ul class="footerLinks subnav collapse" id="mobileMenuProducts">
            <li><a href="<?php echo site_url(); ?>/pd-platforms/" class="white">PD Platforms</a></li>
            <li><a href="<?php echo site_url(); ?>/instructional-software/" class="white">Instructional Software</a></li>
            <li><a href="<?php echo site_url(); ?>/stem/" class="white">STEM Solutions</a></li>
            <li><a href="<?php echo site_url(); ?>/stem/3d-printers/" class="white">3D Printing</a></li>
            <li><a href="<?php echo site_url(); ?>/makerspaces/" class="white">Makerspaces</a></li>
            <li><a href="<?php echo site_url(); ?>/sight-and-sound/" class="white">Sight and Sound</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <h6><a class="white nav-link" href="/iblocks">iBlocks</a></h6>
        </li>
        <li class="nav-item">
          <h6><a class="white nav-link" data-toggle="collapse" href="#mobileMenuServices" aria-expanded="false" aria-controls="mobileMenuServices">Support & Service</a></h6>
          <ul class="footerLinks subnav collapse" id="mobileMenuServices">
            <li><a href="<?php echo site_url(); ?>/support-and-services/" class="white">Service and Bundles</a></li>
            <li><a href="<?php echo site_url(); ?>/consulting-services/nedm" class="white">Network-Enabled Device Management</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <h6><a class="white nav-link" data-toggle="collapse" href="#mobileMenuLearning" aria-expanded="false" aria-controls="mobileMenuLearning">Learning Community</a></h6>
          <ul class="footerLinks subnav collapse" id="mobileMenuLearning">
            <li><a href="<?php echo site_url(); ?>/learning-community/teq-talk/" class="white">Teq Talk</a></li>
            <li><a href="<?php echo site_url(); ?>/learning-community/teq-tips/" class="white">Teq Tips</a></li>
            <li><a href="<?php echo site_url(); ?>/learning-community/datasheet-downloads/" class="white">Downloads</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <h6><a class="white nav-link" href="<?php echo site_url(); ?>/teq-events/">Teq Events</a></h6>
        </li>
        <li class="nav-item">
          <h6><a class="white nav-link" data-toggle="collapse" href="#mobileMenuAbout" aria-expanded="false" aria-controls="mobileMenuAbout">About Us</a></h6>
          <ul class="footerLinks subnav collapse" id="mobileMenuAbout">
            <li><a href="<?php echo site_url(); ?>/about-us/" class="white">About Teq</a></li>
            <li><a href="<?php echo site_url(); ?>/about-us/testimonials/" class="white">Testimonials</a></li>
            <li><a href="<?php echo site_url(); ?>/about-us/teq-careers/" class="white">Careers at Teq</a></li>
            <li><a href="<?php echo site_url(); ?>/contact-us/" class="white">Contact Us</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <h6><a id="freeNavLink" class="white nav-link" data-toggle="collapse" href="#mobileFreeOffer" aria-expanded="false" aria-controls="mobileFreeOffer">FREE OFFER</a></h6>
          <ul class="footerLinks subnav collapse" id="mobileFreeOffer">
            <li><h2 class="white">Get started with your <span class="teqBlue">new classroom technology</span> today.</h2><p class="white">You’ll learn all the skills you need to start using your new products and software right away. Teq's Getting Started option gives you access to an entire library of <a href="http://www.teq.com/ctle-approved"><span class="teqBlue">State-approved PD content</span></a> as well as hours of complementary onsite PD.</p><p class="white bold">To see what PD courses are available for you, visit <a class="teqBlue bold" href="http://onlinepd.teq.com/gettingstarted/" onclick="trackOutboundLink('http://onlinepd.teq.com/gettingstarted/'); return false;">onlinepd.teq.com/gettingstarted</a>.</p></li>
          </ul>
        </li>
      </ul>
    </div>
    <div id="navMain" class="container-fluid collapse navbar-toggleable-sm">
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/_img/teq-logo-icon.svg" class="mainLogo" /></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#productsMenu" data-toggle="collapse" aria-expanded="false" aria-controls="productsMenu">Products &amp; Things</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/iblocks">iBlocks</a>
        </li>
        <li class="nav-item new">
            <a class="nav-link" href="<?php echo site_url(); ?>/evospaces/">evoSpaces</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#supportMenu" data-toggle="collapse" aria-expanded="false" aria-controls="supportMenu">Support and Service</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#learningMenu" data-toggle="collapse" aria-expanded="false" aria-controls="learningMenu">Community</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(); ?>/teq-events/">Events</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#aboutMenu" data-toggle="collapse" aria-expanded="false" aria-controls="aboutMenu">About</a>
        </li>
        <li class="nav-item">
            <a id="freeNavLink" class="nav-link bold" href="#freeOffer" data-toggle="collapse" aria-expanded="false" aria-controls="freeOffer" onclick="ga('send', 'event', 'FREE Link', 'Action label', 'Action Value');">FREE</a>
        </li>
        <li class="nav-item search-form-container">
          <?php get_search_form( $echo = true ); ?>
        </li>
      </ul>
    </div>
    <div class="collapse fade subnav" id="productsMenu">
      <div class="container-fluid">
        <ul class="nav row">
          <li class="col-sm">
              <h5><a class="nav-link subnav-link" href="<?php echo site_url(); ?>/pd-platforms">PD Platforms</a></h5>
              <ul class="nav">
                <li><a href="<?php echo site_url(); ?>/pd-platforms/onsite-pd" class="subnav-link">Onsite PD</a></li>
                <li><a href="<?php echo site_url(); ?>/pd-platforms/online-pd" class="subnav-link">Online PD</a></li>
                <li><a href="<?php echo site_url(); ?>/pd-platforms/teacher-certifications/" class="subnav-link">Teq Digital Teacher Certifications</a></li>
                <li><a href="<?php echo site_url(); ?>/pd-platforms/eils/" class="subnav-link">Effective Instructional Leadership & Supervision</a></li>
              </ul>
              <h5><a class="nav-link subnav-link" href="<?php echo site_url(); ?>/instructional-software/">Instructional <br />Software</a></h5>
              <ul class="nav">
                <li><a href="<?php echo site_url(); ?>/instructional-software/smart-learning-suite" class="subnav-link">SMART Learning Suite</a></li>
                <li><a href="<?php echo site_url(); ?>/instructional-software/stemfuse/" class="subnav-link">STEM Fuse</a></li>
                <li><a href="<?php echo site_url(); ?>/pd-platforms/teq-essentials" class="subnav-link">Teq Essentials</a></li>
              </ul>
          </li>
          <li class="col-sm">
              <h5><a class="nav-link subnav-link" href="<?php echo site_url(); ?>/stem/">STEM</a></h5>
              <ul class="nav">
                <li><a href="<?php echo site_url(); ?>/stem/si/" class="subnav-link">STEM Initiatives</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/zspace/" class="subnav-link">zSpace</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/labdisc/" class="subnav-link">Labdisc</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/sparkfun/" class="subnav-link">Sparkfun</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/pi-top/" class="subnav-link">pi-top</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/sam-labs/" class="subnav-link">SAM Labs</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/littlebits/" class="subnav-link">littleBits</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/bloxels/" class="subnav-link">Bloxels</a></li>
              </ul>
          </li>
          <li class="col-sm">
            <h5><a href="<?php echo site_url(); ?>/stem/robotics/" class="subnav-link">Robotics</a></h5>
            <ul class="nav">
              <li><a href="<?php echo site_url(); ?>/stem/jumpstart-nao/" class="subnav-link">Jumpstart NAO</a></li>
              <li><a href="<?php echo site_url(); ?>/stem/robotis/" class="subnav-link">Robotis</a></li>
              <li><a href="<?php echo site_url(); ?>/stem/wonder-workshop/" class="subnav-link">Wonder Workshop</a></li>
              <li><a href="<?php echo site_url(); ?>/stem/sphero/" class="subnav-link">Sphero</a></li>
              <li><a href="<?php echo site_url(); ?>/stem/kibo/" class="subnav-link">KIBO</a></li>
              <li><a href="<?php echo site_url(); ?>/stem/cubelets/" class="subnav-link">Cubelets</a></li>
              <li><a href="<?php echo site_url(); ?>/stem/ozobot/" class="subnav-link">Ozobot</a></li>
            </ul>
          </li>
          <li class="col-sm">
              <h5><a class="nav-link subnav-link" href="<?php echo site_url(); ?>/makerspaces/">Makerspaces</a></h5>
              <ul class="nav">
                <li><a href="<?php echo site_url(); ?>/makerspaces/stem-labs/" class="subnav-link">Mobile STEM Labs</a></li>
                <li><a href="<?php echo site_url(); ?>/makerspaces/stem-maker-station/" class="subnav-link">STEM Maker Station</a></li>
                <li><a href="<?php echo site_url(); ?>/makerspaces/furniture/" class="subnav-link">Furniture</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/electronics-coding-bundle/" class="subnav-link">Coding Bundles</a></li>
              </ul>
              <h5><a class="nav-link subnav-link" href="<?php echo site_url(); ?>/stem/3d-printers/" class="subnav-link">3D Printers</a></h5>
                <ul class="nav">
                  <li><a href="<?php echo site_url(); ?>/stem/ultimaker-3d-printer/" class="subnav-link">Ultimaker</a></li>
                  <li><a href="<?php echo site_url(); ?>/stem/makerbot-3d-printer/" class="subnav-link">MakerBot</a></li>
                  <li><a href="<?php echo site_url(); ?>/stem/matter-and-form/" class="subnav-link">Matter and Form</a></li>
                  <li><a href="<?php echo site_url(); ?>/stem/3d-printer-labs/" class="subnav-link">3D Printer Labs</a></li>
                </ul>
          </li>
          <li class="col-sm">
              <h5><a class="nav-link subnav-link" href="<?php echo site_url(); ?>/sight-and-sound/">Sight and Sound</a></h5>
              <ul class="nav">
                <li><a href="<?php echo site_url(); ?>/sight-and-sound/smart-boards/" class="subnav-link">SMART</a>
                  <ul class="nav">
                    <li class="level2"><a href="<?php echo site_url(); ?>/sight-and-sound/smart-board-7000/">7000 Series</a></li>
                    <li class="level2"><a href="<?php echo site_url(); ?>/sight-and-sound/smart-board-6000/">6000 Series</a></li>
                    <li class="level2"><a href="<?php echo site_url(); ?>/sight-and-sound/smart-board-mx/">MX  Series</a></li>
                    <li class="level2"><a href="<?php echo site_url(); ?>/sight-and-sound/smart-kapp/">kapp</a></li>
                    <li class="level2"><a href="<?php echo site_url(); ?>/sight-and-sound/smart-podium-624/">Podium 624</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo site_url(); ?>/sight-and-sound/audio-enhancement/" class="subnav-link">Audio Enhancement</a></li>
                <li><a href="<?php echo site_url(); ?>/sight-and-sound/safe-system/" class="subnav-link">SAFE System</a></li>
                <!--
                  <li><a href="<?php echo site_url(); ?>/sight-and-sound/smart-table/" class="subnav-link">SMART Table</a></li>
                -->
                <li><a href="<?php echo site_url(); ?>/sight-and-sound/wall-mounts-mobile-stands/" class="subnav-link">Wall Mounts/Mobile Stands</a></li>
                <li><a href="<?php echo site_url(); ?>/sight-and-sound/tech-tub/" class="subnav-link">Tech Tub</a></li>
                <li><a href="<?php echo site_url(); ?>/sight-and-sound/activefloor/" class="subnav-link">Active Floor</a></li>
                <li><a href="<?php echo site_url(); ?>/sight-and-sound/accessories/" class="subnav-link">Accessories</a></li>
              </ul>
          </li>
          <li class="nav-item closeMenuCell">
            <a href="#productsMenu" data-toggle="collapse" aria-expanded="false" aria-controls="productsMenu"><img class="mainLogo" src="<?php echo get_template_directory_uri();?>/_img/subnav-collapse-icon.svg" /></a>
          </li>
          <li class="col-sm nopadding">
            <img src="<?php echo get_template_directory_uri();?>/_img/teq-banner-opd-login-nav.png" />
            <a href="https://onlinepd.teq.com/"><button class="salmon hideItem">Opd.teq.com</button></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="collapse fade subnav" id="classroomConceptsMenu">
      <div class="container">
        <ul class="nav row">
          <li class="col-sm">
            <a class="nav-link subnav-link" href="<?php echo site_url(); ?>/elementary-classroom-concepts/">Elementary &amp; Early Childhood Concepts</a>
          </li>
          <li class="col-sm">
            <a class="nav-link subnav-link" href="<?php echo site_url(); ?>/middle-classroom-concepts/">Middle School Concepts</a>
          </li>
          <li class="col-sm">
            <a class="nav-link subnav-link" href="<?php echo site_url(); ?>/high-classroom-concepts/">High School Concepts</a>
          </li>
          <li class="col-sm">
            <a class="nav-link subnav-link" href="<?php echo site_url(); ?>/special-education-classroom-concepts/">Special Ed / Inclusion Classroom Concepts</a>
          </li>
          <li class="nav-item col-sm closeMenuCell">
            <a href="#classroomConceptsMenu" data-toggle="collapse" aria-expanded="false" aria-controls="classroomConceptsMenu"><img class="mainLogo" src="<?php echo get_template_directory_uri();?>/_img/subnav-collapse-icon.svg" /></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="collapse fade subnav" id="supportMenu">
      <div class="container">
        <ul class="nav row">
          <li class="col-sm">
            <a class="nav-link subnav-link" href="https://www.teq.com/consulting-services/nedm">Network-Enabled Device Management</a>
          </li>
          <li class="col-sm">
            <a class="nav-link subnav-link" href="<?php echo site_url(); ?>/support-and-services/">Service Plans</a>
          </li>
          <li class="col-sm">
            <a class="nav-link subnav-link" href="<?php echo site_url(); ?>/support-and-services/#contactSupportTeam">Contact Support</a>
          </li>
          <li class="col-sm">
            <a class="nav-link subnav-link" href="<?php echo site_url(); ?>/support-and-services/teqsquad/">Teq Squad</a>
          </li>
          <li class="nav-item col-sm closeMenuCell">
            <a href="#supportMenu" data-toggle="collapse" aria-expanded="false" aria-controls="supportMenu"><img class="mainLogo" src="<?php echo get_template_directory_uri();?>/_img/subnav-collapse-icon.svg" /></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="collapse fade subnav" id="learningMenu">
      <div class="container">
        <ul class="nav row">
          <li class="col-sm">
            <a class="nav-link subnav-link" href="/learning-community/teq-talk/">Teq Talk</a>
          </li>
          <li class="col-sm">
            <a class="nav-link subnav-link" href="/learning-community/teq-tips/">Teq Tips</a>
          </li>
          <li class="col-sm">
            <a class="nav-link subnav-link" href="<?php echo site_url(); ?>/learning-community/datasheet-downloads/">Downloads</a>
          </li>
          <li class="col-sm">
            <a class="nav-link subnav-link" href="/learning-community/media-resource-center/">Media Center</a>
          </li>
          <li class="col-sm">
            <a class="nav-link subnav-link" href="/learning-community/social-media-center/">Social Media</a>
          </li>
          <li class="nav-item closeMenuCell">
            <a href="#learningMenu" data-toggle="collapse" aria-expanded="false" aria-controls="learningMenu"><img class="mainLogo" src="<?php echo get_template_directory_uri();?>/_img/subnav-collapse-icon.svg" /></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="collapse fade subnav" id="aboutMenu">
      <div class="container">
        <ul class="nav row">
          <li class="col-sm">
            <a class="nav-link subnav-link" href="<?php echo site_url(); ?>/about-us/">About</a>
          </li>
          <li class="col-sm">
            <a class="nav-link subnav-link" href="<?php echo site_url(); ?>/roadmap/">Roadmap</a>
          </li>
          <li class="col-sm">
            <a class="nav-link subnav-link" href="<?php echo site_url(); ?>/about-us/press-releases/">Press Releases</a>
          </li>
          <li class="col-sm">
            <a class="nav-link subnav-link" href="<?php echo site_url(); ?>/about-us/testimonials/">Testimonials</a>
          </li>
          <li class="col-sm">
            <a class="nav-link subnav-link" href="<?php echo site_url(); ?>/about-us/teq-careers/">Careers at Teq</a>
          </li>
          <li class="col-sm">
            <a class="nav-link subnav-link" href="<?php echo site_url(); ?>/contact-us/">Contact Us</a>
          </li>
          <li class="nav-item col-sm closeMenuCell">
            <a href="#aboutMenu" data-toggle="collapse" aria-expanded="false" aria-controls="aboutMenu"><img class="mainLogo" src="<?php echo get_template_directory_uri();?>/_img/subnav-collapse-icon.svg" /></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="collapse fade subnav" id="freeOffer">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
              <h2 class="white">Get started with your <span class="teqBlue">new classroom technology</span> today.</h2>
          </div>
          <div class="col-md-6">
            <a href="http://onlinepd.teq.com/gettingstarted/" onclick="trackOutboundLink('http://onlinepd.teq.com/gettingstarted/'); return false;"><img src="<?php echo get_template_directory_uri();?>/_img/teq-headernav-GettingStartedAd.png" /></a>
          </div>
          <div class="col-md-3">
            <p class="white">You’ll learn all the skills you need to start using your new products and software right away. Teq's Getting Started option gives you access to an entire library of <a target="_blank" href="http://www.teq.com/ctle-approved"><span class="teqBlue">State-approved PD content</span></a> as well as hours of complementary online PD.</p><p class="white bold">To see what PD courses are available for you, visit <a class="teqBlue bold" href="http://onlinepd.teq.com/gettingstarted/" onclick="trackOutboundLink('http://onlinepd.teq.com/gettingstarted/'); return false;">onlinepd.teq.com/gettingstarted</a>.</p>
          </div>
          <div class="col-md-1">
            <a href="#freeOffer" data-toggle="collapse" aria-expanded="false" aria-controls="freeOffer"><img class="mainLogo" src="<?php echo get_template_directory_uri();?>/_img/subnav-collapse-icon.svg" /></a>
          </div>
        </div>
      </div>
    </div>
    <section id="breadCrumbs" class="hidden-sm-down hidden-xs-down">
      <div class="row">
        <div class="col-md">
          <?php if (function_exists('bootstrapwp_breadcrumbs')) { bootstrapwp_breadcrumbs(); } ?>
        </div>
        <div class="col-md">
          <?php global $wp_query;
            $postid = $wp_query->post->ID;
            if ( is_page_template( 'templates-pages/product-page.php' ) && get_post_meta($postid, 'titleRoleOne', true) || is_page_template( 'templates-pages/product-pd-page.php' ) && get_post_meta($postid, 'titleRoleOne', true) || is_page_template( 'templates-pages/product-page-slider-top.php' ) && get_post_meta($postid, 'titleRoleOne', true) || is_page_template( 'templates-pages/product-page-accordion-top.php' ) && get_post_meta($postid, 'titleRoleOne', true) || is_page_template( 'templates-pages/product-page-more-info-no-demo-form-open.php' ) && get_post_meta($postid, 'titleRoleOne', true)) {
          ?>
          <a class="title-link text-right menu-open" href="#title-roles-nav" data-toggle="collapse" aria-expanded="false" aria-controls="title-roles-nav"><strong>What's Your School Role?</strong></a>
            <div id="title-roles-nav" class="collapse">
                <ul class="nav title-roles-menu">
                  <?php
                    if ( get_post_meta($postid, 'titleRoleOne', true)) {
                  ?>
                    <li><a href="#One" class="title-roles-menu-item1" data-toggle="collapse" aria-expanded="false" aria-controls="One"><?php echo get_post_meta($postid, 'titleRoleOne', true); ?></a></li>
                  <?php
                    }
                    if ( get_post_meta($postid, 'titleRoleTwo', true)) {
                  ?>
                    <li><a href="#Two" class="title-roles-menu-item2" data-toggle="collapse" aria-expanded="false" aria-controls="Two"><?php echo get_post_meta($postid, 'titleRoleTwo', true); ?></a></li>
                  <?php
                    }
                    if ( get_post_meta($postid, 'titleRoleThree', true)) {
                  ?>
                    <li><a href="#Three" class="title-roles-menu-item3" data-toggle="collapse" aria-expanded="false" aria-controls="Three"><?php echo get_post_meta($postid, 'titleRoleThree', true); ?></a></li>
                  <?php
                    }
                  ?>
                </ul>
                <ul id="One" class="collapse nav title-roles-content">
                  <li>
                    <article>
                      <p><?php echo get_post_meta($postid, 'titleRoleOneDescription', true); ?></p>
                    </article>
                  </li>
                </ul>
                <ul id="Two" class="collapse nav title-roles-content">
                  <li>
                    <article>
                      <p><?php echo get_post_meta($postid, 'titleRoleTwoDescription', true); ?></p>
                    </article>
                  </li>
                </ul>
                <ul id="Three" class="collapse nav title-roles-content">
                  <li>
                    <article>
                      <p><?php echo get_post_meta($postid, 'titleRoleThreeDescription', true); ?></p>
                    </article>
                  </li>
                </ul>
              </div>
          <?php } ?>
        </div>
      </div>
    </section>
  </nav>
