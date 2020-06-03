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
      <div class="container-fluid">
        <div class="col" id="bannerPlugin"></div>
      </div>
    </header>
    <?php } ?>
    <div class="mobileNav hidden-lg-up hidden-md-up row">
      <a class="col-xs-5" href="#navbarMobile" data-toggle="collapse" aria-expanded="false" aria-controls="classroomConceptsMenu" aria-label="Toggle navigation" title="menue"><img src="<?php echo get_template_directory_uri();?>/_img/mobilenav-logo-icon.svg" /></a>
      </ul>
      <ul id="navbarMobile" class="nav collapse">
        <li class="nav-item">
          <a class="nav-link subnav-link" href="/remote-learning/">Remote Learning Resources</a>
        </li>
        <li class="nav-item">
          <a class="nav-link subnav-link" href="/teq-blocks/">Teq Blocks</a>
        </li>
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
          <h6><a class="white nav-link" data-toggle="collapse" href="#mobileMenuServices" aria-expanded="false" aria-controls="mobileMenuServices">Support & Service</a></h6>
          <ul class="footerLinks subnav collapse" id="mobileMenuServices">
            <li><a href="<?php echo site_url(); ?>/support-and-services/" class="white">Service and Bundles</a></li>
            <li><a href="<?php echo site_url(); ?>/consulting-services/nedm" class="white">Network-Enabled Device Management</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <h6><a class="white nav-link" data-toggle="collapse" href="#mobileMenuLearning" aria-expanded="false" aria-controls="mobileMenuLearning">Resources</a></h6>
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
      </ul>
    </div>
    <div id="navMain" class="container-fluid collapse navbar-toggleable-sm">
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#mainTeqMenu" data-toggle="collapse" aria-expanded="false" aria-controls="mainTeqMenu"><img src="<?php echo get_template_directory_uri();?>/_img/teq-main-menu-hamburger.svg" /></a>
        </li>
        <li class="nav-item">
          <a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/_img/teq-logo-icon_black.svg" class="mainLogo" /></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#productsMenu" data-toggle="collapse" aria-expanded="false" aria-controls="productsMenu">Products &amp; Things</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/teq-blocks/">Teq Blocks</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(); ?>/evospaces/">evoSpaces</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#supportMenu" data-toggle="collapse" aria-expanded="false" aria-controls="supportMenu">Support and Service</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#learningMenu" data-toggle="collapse" aria-expanded="false" aria-controls="learningMenu">Resources</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(); ?>/teq-events/">Events</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#aboutMenu" data-toggle="collapse" aria-expanded="false" aria-controls="aboutMenu">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn yellow" href="https://otis.teq.com/" data-toggle="collapse" aria-expanded="false" aria-controls="aboutMenu"><strong>Go to OTIS.teq.com</strong></a>
        </li>
      </ul>
    </div>
    <div class="collapse fade subnav" id="mainTeqMenu">
      <div class="container">
        <ul class="nav row">
          <li class="col-sm">
            <a class="nav-link subnav-link" href="/remote-learning/">Remote Learning Resources</a>
          </li>
          <li class="col-sm">
            <a class="nav-link subnav-link" href="/teq-blocks/">Teq Blocks</a>
          </li>
          <li class="col-sm">
            <a class="nav-link subnav-link" href="/teq-blocks/">pBlocks</a>
          </li>
          <li class="col-sm">
            <a class="nav-link subnav-link" href="/teq-blocks/">sBlocks</a>
          </li>
          <li class="col-sm">
            <a class="nav-link subnav-link" href="https://www.iblocks.com">iBlocks</a>
          </li>
          <li class="col-sm">
            <a class="nav-link subnav-link" href="/teq-blocks/">Teq-tivities</a>
          </li>
          <li class="col-sm">
            <a class="nav-link subnav-link" href="/teq-stem-activities/">STEM Activity Packs</a>
          </li>
          <li class="nav-item closeMenuCell">
            <a href="#mainTeqMenu" data-toggle="collapse" aria-expanded="false" aria-controls="mainTeqMenu"><img class="mainLogo" src="<?php echo get_template_directory_uri();?>/_img/subnav-collapse-icon.svg" /></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="collapse fade subnav" id="productsMenu">
      <div class="container-fluid">
        <ul class="nav row">
          <li class="col-sm">
              <h5><a class="nav-link subnav-link" href="<?php echo site_url(); ?>/pd-platforms">PD Platforms</a></h5>
              <ul class="nav">
                <li><a href="<?php echo site_url(); ?>/pd-platforms/onsite-pd" class="subnav-link">Onsite & Virtual PD</a></li>
                <li><a href="<?php echo site_url(); ?>/pd-platforms/otis" class="subnav-link">OTIS for educators</a></li>
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
                <li><a href="<?php echo site_url(); ?>/stem/nyc-stem-carts/" class="subnav-link">Mobile STEM Carts</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/sparkfun/" class="subnav-link">Sparkfun</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/pi-top/" class="subnav-link">pi-top</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/sam-labs/" class="subnav-link">SAM Labs</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/littlebits/" class="subnav-link">littleBits by Sphero</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/bloxels/" class="subnav-link">Bloxels</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/osmo/" class="subnav-link">Osmo</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/farmshelf/" class="subnav-link">Farmshelf</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/squishy-circuits/" class="subnav-link">Squishy Circuits</a></li>
              </ul>
              <h5><a class="nav-link subnav-link" href="<?php echo site_url(); ?>/stem/additional-stem-offerings/">Additional STEM Offerings</a></h5>
          </li>
          <li class="col-sm">
            <h5><a class="nav-link subnav-link" href="<?php echo site_url(); ?>/stem/robotics/" class="subnav-link">Robotics</a></h5>
            <ul class="nav">
              <li><a href="<?php echo site_url(); ?>/stem/ubtech/" class="subnav-link">UBTECH</a></li>
              <li><a href="<?php echo site_url(); ?>/stem/robotis/" class="subnav-link">Robotis</a></li>
              <li><a href="<?php echo site_url(); ?>/stem/wonder-workshop/" class="subnav-link">Wonder Workshop</a></li>
              <li><a href="<?php echo site_url(); ?>/stem/sphero/" class="subnav-link">Sphero</a></li>
              <li><a href="<?php echo site_url(); ?>/stem/kibo/" class="subnav-link">KIBO</a></li>
              <li><a href="<?php echo site_url(); ?>/stem/cubelets/" class="subnav-link">Cubelets</a></li>
              <li><a href="<?php echo site_url(); ?>/stem/ozobot/" class="subnav-link">Ozobot</a></li>
            </ul>
            <h5><a class="nav-link subnav-link" href="<?php echo site_url(); ?>/stem/ar-and-vr/" class="subnav-link">AR / VR</a></h5>
              <ul class="nav">
                <li><a href="<?php echo site_url(); ?>/stem/zspace/" class="subnav-link">zSpace</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/veative/" class="subnav-link">Veative</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/merge/" class="subnav-link">Merge</a></li>
                  </ul>

          </li>
          <li class="col-sm">
            <h5><a class="nav-link subnav-link" href="<?php echo site_url(); ?>/stem/3d-printers/" class="subnav-link">3D Printers</a></h5>
              <ul class="nav">
                <li><a href="<?php echo site_url(); ?>/stem/ultimaker-3d-printer/" class="subnav-link">Ultimaker</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/makerbot-3d-printer/" class="subnav-link">MakerBot</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/matter-and-form/" class="subnav-link">Matter and Form</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/3d-doodler/" class="subnav-link">3D Doodler</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/glowforge/" class="subnav-link">Glowforge</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/3d-printer-labs/" class="subnav-link">3D Printer Labs</a></li>
              </ul>
              <h5><a class="nav-link subnav-link" href="<?php echo site_url(); ?>/makerspaces/">Makerspaces</a></h5>
              <ul class="nav">
                <li><a href="<?php echo site_url(); ?>/makerspaces/stem-labs/" class="subnav-link">Mobile STEM Labs</a></li>
                <li><a href="<?php echo site_url(); ?>/makerspaces/stem-maker-station/" class="subnav-link">STEM Maker Station</a></li>
                <li><a href="<?php echo site_url(); ?>/makerspaces/furniture/" class="subnav-link">Furniture</a></li>
                <li><a href="<?php echo site_url(); ?>/stem/electronics-coding-bundle/" class="subnav-link">Coding Bundles</a></li>
              </ul>
          </li>
          <li class="col-sm">
              <h5><a class="nav-link subnav-link" href="<?php echo site_url(); ?>/sight-and-sound/">Sight and Sound</a></h5>
              <ul class="nav">
                <li><a href="<?php echo site_url(); ?>/sight-and-sound/smart-board-7000/" class="subnav-link">SMART Board 7000R</a></li>
                <li><a href="<?php echo site_url(); ?>/sight-and-sound/smart-board-6000/" class="subnav-link">SMART Board 6000S</a></li>
                <li><a href="<?php echo site_url(); ?>/sight-and-sound/smart-board-mx/" class="subnav-link">SMART Board MX</a></li>
                <li><a href="<?php echo site_url(); ?>/sight-and-sound/activefloor/" class="subnav-link">Active Floor</a></li>
                <li><a href="<?php echo site_url(); ?>/sight-and-sound/lu/" class="subnav-link">Lu Interactive</a></li>
                <li><a href="<?php echo site_url(); ?>/sight-and-sound/smart-kapp/" class="subnav-link">SMART kapp</a></li>
                <li><a href="<?php echo site_url(); ?>/sight-and-sound/smart-podium-624/" class="subnav-link">SMART Podium 624</a></li>
                <li><a href="<?php echo site_url(); ?>/sight-and-sound/audio-enhancement/" class="subnav-link">Audio Enhancement</a></li>
                <li><a href="<?php echo site_url(); ?>/sight-and-sound/safe-system/" class="subnav-link">SAFE System</a></li>
                <!--
                <li><a href="<?php echo site_url(); ?>/sight-and-sound/smart-table/" class="subnav-link">SMART Table</a></li>
                -->
                <li><a href="<?php echo site_url(); ?>/sight-and-sound/wall-mounts-mobile-stands/" class="subnav-link">Wall Mounts/Mobile Stands</a></li>
                <li><a href="<?php echo site_url(); ?>/sight-and-sound/tech-tub/" class="subnav-link">Tech Tub</a></li>
              </ul>
          </li>
          <li class="nav-item closeMenuCell">
            <a href="#productsMenu" data-toggle="collapse" aria-expanded="false" aria-controls="productsMenu"><img class="mainLogo" src="<?php echo get_template_directory_uri();?>/_img/subnav-collapse-icon.svg" /></a>
          </li>
          <li class="col-sm nopadding">
            <img src="<?php echo get_template_directory_uri();?>/_img/teq-banner-opd-login-nav.png" />
            <a href="https://otis.teq.com/"><button class="salmon hideItem">Otis.teq.com</button></a>
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
          <li class="nav-item col-sm flex-md-middle closeMenuCell">
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
            <a class="nav-link subnav-link" href="<?php echo site_url(); ?>/about-us/">About Teq</a>
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
    <section id="breadCrumbs" class="hidden-sm-down hidden-xs-down">
      <div class="row">
        <div class="col-md">
          <?php if (function_exists('bootstrapwp_breadcrumbs')) { bootstrapwp_breadcrumbs(); } ?>
        </div>
      </div>
    </section>
  </nav>
