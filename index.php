<?php get_header(); ?>

<?php get_template_part( 'navigation', 'default' ); ?>
</nav>

<main>

  <div class="container-fluid home-header">
    <video class="vidBackgroundHeader" poster="<?php echo get_template_directory_uri();?>/_img/teq-home-page-header-bg.jpg" playsinline autoplay muted loop>
        <source src="<?php echo get_template_directory_uri();?>/_img/Teq_Website_Background_720.webm" type="video/webm">
    </video>
    <div class="row height-full">
      <div class="container flex-md-middle">
        <h1 class="display-2 white text-center">It’s all about learning.</h1>
        <h4 class="white text-center">Teq supports outcomes by evaluating and delivering products and services for the educational environment. We are dedicated to providing dynamic professional development and instructional support to educators.</h4>
        <center>
          <button class="learnhow lightBlue">Learn how</button>
        </center>
      </div>
    </div>
  </div>
  <div class="container-fluid nopadding opd scrollToDiv">
    <div class="row height-full">
      <div class="col-md-6">
      </div>
      <div class="col-md-5 padding-right flex-md-middle text-left">
        <h1 class="hideItem"><a href="http://www.teq.com/ctle-approved"><img src="<?php echo get_template_directory_uri(); ?>/_img/learn-professional-development.svg" alt="Learn" /></a></h1>
        <h2 class="productBlue display-5 hideItem">Professional Development</h2>
        <h4 class="white hideItem">Learn educational technology skills with PD designed around your needs; with options for on-site, online, or a blended learning model. </h4>
        <a href="/pd-platforms/"><button class="light hideItem">Discover more</button></a>
      </div>
      <div class="col-md-1">
      </div>
    </div>
  </div>
  <div class="container-fluid nopadding instructionalSoftware">
    <div class="row height-full">
      <div class="col-md-1">
      </div>
      <div class="col-md-5 padding-right flex-md-middle text-left">
        <h1 class="hideItem"><img src="<?php echo get_template_directory_uri(); ?>/_img/create-instructional-software.svg" alt="Create" /></h1>
        <h2 class="productBlue display-5 hideItem">Instructional Software</h2>
        <h4 class="hideItem">Create and deliver dynamic interactive lessons with formative assessments and gamification with the world's leading teaching and collaboration software. </h4>
        <a href="/instructional-software/"><button class="hideItem">Discover more</button></a>
      </div>
      <div class="col-md-6">
      </div>
    </div>
  </div>
  <div class="container-fluid nopadding stem-solutions">
    <div class="row height-full">
      <div class="col-md-6">
      </div>
      <div class="col-md-6 padding flex-md-middle text-left">
        <h1 class="hideItem"><img src="<?php echo get_template_directory_uri(); ?>/_img/discover-steam-stem.svg" alt="Discover" /></h1>
        <h2 class="pdGreen display-5 hideItem">STEM</h2>
        <h4 class="white hideItem">Discover activity-rich STEM environments personalized to your needs with Teq's consulting services, innovated product selection, and supportive professional development.</h4>
        <a href="/stem/"><button class="light d-inline-block hideItem">Discover more</button></a>
      </div>
    </div>
  </div>
  <div class="container-fluid nopadding sightSound">
    <div class="row height-full">
      <div class="col-md-6">
      </div>
      <div class="col-md-6 padding-left padding-right padding-top flex-md-middle text-left">
        <h1 class="hideItem"><img src="<?php echo get_template_directory_uri(); ?>/_img/enrich-sight-and-sound.svg" alt="Enrich" /></h1>
        <h2 class="classroomBlue display-5 hideItem">Sight and Sound</h2>
        <h4 class="hideItem">Enrich student experiences and cultivate collaborative learning with the latest interactive displays and classroom audio systems.</h4>
        <a href="/sight-and-sound/"><button class="hideItem">Discover Sight and Sound</button></a>
      </div>
    </div>
  </div>
  <div class="container-fluid nopadding sdwan">
    <div class="row height-full">
      <div class="col-md-1">
      </div>
      <div class="col-md-5 padding-right padding-top flex-md-middle text-left">
        <h1 class="hideItem"><img src="<?php echo get_template_directory_uri(); ?>/_img/simplify-sd-wan-from-cloudgenix.svg" alt="Simplify" /></h1>
        <h2 class="cloudgenixRed display-5 hideItem">SD-WAN from Cloudgenix</span></h2>
        <h4 class="white hideItem">Simplify your network and in the process gain the visibility to prioritize all the applications and IPs in use at your school, all from an easy to manage interface.</h4>
        <a href="/sd-wan/"><button class="light hideItem">Discover more</button></a>
      </div>
      <div class="col-md-6">
      </div>
    </div>
  </div>

</main>
<?php get_footer(); ?>
