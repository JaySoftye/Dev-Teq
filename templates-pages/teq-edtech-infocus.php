<?php
/**
 * Template Name: EdTech in Focus
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
      <link href="<?php echo get_stylesheet_directory_uri();?>/css/teq-edtech-infocus.css" rel="stylesheet" type="text/css">
      <!-- Roboto -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">

  </head>
<body <?php body_class(); ?>>
  <main>
    <?php

      $formMessage = '<h1>Let’s host a day of learning together with <strong>EdTech in Focus.</strong></h1>';

      if(isset($_POST['submit'])) {
        $flag=1;

        if(!empty($_POST['session_delivery'])){
          foreach($_POST['session_delivery'] as $sessionSelected => $sessionValue) {
            $sessionDelivery .= $sessionValue . '<br />';
          }
        }
        if(!empty($_POST['event_time'])){
          foreach($_POST['event_time'] as $timeSelected => $timeValue) {
            $eventTime .= $timeValue . '<br />';
          }
        }
        if(!empty($_POST['administrative_courses'])){
          foreach($_POST['administrative_courses'] as $adminCourseSelected => $adminCourseValue) {
            $adminCourses .= $adminCourseValue . '<br />';
          }
        }
        if(!empty($_POST['teacher_courses'])){
          foreach($_POST['teacher_courses'] as $teacherCourseSelected => $teacherCourseValue) {
            $teacherCourses .= $teacherCourseValue . '<br />';
          }
        }

        if (empty($_POST['edtechname'])) {
          $flag=0; $edtechnameerr = '* You forgot to tell us your name'; $formMessage = '<h1><strong>Oh no, it looks like you forgot a few fields.</strong></h1><h3>Use the <em>Schedule your event</em> button below to revisit your submission and try again.</h3>';
        }
        if (empty($_POST['edtechtitle'])) {
          $flag=0; $edtechtitleerr = '* You forgot to tell us your title'; $formMessage = '<h1><strong>Oh no, it looks like you forgot a few fields.</strong></h1><h3>Use the <em>Schedule your event</em> button below to revisit your submission and try again.</h3>';
        }
        if (empty($_POST['edtechphone'])) {
          $flag=0; $edtechphoneerr = '* You forgot to give us a phone number'; $formMessage = '<h1><strong>Oh no, it looks like you forgot a few fields.</strong></h1><h3>Use the <em>Schedule your event</em> button below to revisit your submission and try again.</h3>';
        }
        if (empty($_POST['edtechemail'])) {
          $flag=0; $edtechemailerr = '* You forgot to list an email address'; $formMessage = '<h1><strong>Oh no, it looks like you forgot a few fields.</strong></h1><h3>Use the <em>Schedule your event</em> button below to revisit your submission and try again.</h3>';
        }

      else {
        if($flag==1) {

          $email_message .= "<html><body><h1>EdTech in Focus Contact Info:</h1>" . "\r\n\r\n";
          $email_message .= "<p><strong>" . $_POST['edtechname'] . "</strong><br /> \r\n";
          $email_message .= "<strong>" . $_POST['edtechtitle'] . "</strong><br /> \r\n";
          $email_message .= $_POST['edtechphone'] . "<br /> \r\n";
          $email_message .= $_POST['edtechemail'] . "</p> \r\n";
          $email_message .= "<hr /><h2>Date and Space Info:</h2> \r\n\r\n";
          $email_message .= "<p><strong>Preferred Event Dates:</strong><br />" . $_POST['edtechdateone'] . "<br />" . $_POST['edtechdatetwo'] . "</p> \r\n";
          $email_message .= "<p><strong>Size and space of the area:</strong><br />" . $_POST['edtechsizedescription'] . "</p> \r\n";
          $email_message .= "<p><strong>Electricity of space:</strong><br />" . $_POST['edtechelectricavailable'] . "</p> \r\n";
          $email_message .= "<p><strong>Space Accommodations:</strong><br />" . $_POST['edtechpeoplespace'] . "</p> \r\n";
          $email_message .= "<hr /><h3>Session Delivery Method:</h3> \r\n";
          $email_message .= "<p>" . $sessionDelivery . "</p> \r\n";
          $email_message .= "<hr /><h3>Event time preference:</h3> \r\n";
          $email_message .= "<p>" . $eventTime . "</p> \r\n";
          $email_message .= "<hr /><h3>Administrative Course(s) Selected:</h3> \r\n";
          $email_message .= "<p>" . $adminCourses . "</p> \r\n";
          $email_message .= "<hr /><h3>Teacher Course(s) Selected:</h3> \r\n";
          $email_message .= "<p>" . $teacherCourses . "</p> \r\n";
          $email_message .= "<hr /> \r\n";

          $formMessage = '<div class="row main-header"><div class="col-md-6"></div><div class="col-md-5 header-content"><h1><strong>Thank you for your interest.</strong></h1><h4>Your message has been successfully sent. You should hear from our EdTech Team shortly, but if you have any further questions please contact us at: 877.455.9369</h4><p><a class="button red" href="https://www.teq.com/edtech-in-focus/">Back to Hosting Page</a></p></div></div>';
          print $formMessage;

          $to = 'events@teq.com';
          $subject = 'NEW EdTech in Focus Request';
          $body = $email_message;
          $headers = array('Content-Type: text/html; charset=UTF-8' , 'From: Teq <teq@teq.com>' , 'Cc: BethBonner@teq.com, Marketing@teq.com, Events@teq.com, RobertWayneHarris@teq.com, JosephSanfilippo@teq.com, AndrewGrefig@teq.com, jonathansoftye@teq.com');
            wp_mail( $to, $subject, $body, $headers );
            exit;
          }
        }

      }
    ?>

    <div class="container-fluid">
      <div class="row main-header">
        <nav id="edtech-main-nav">
          <ul class="nav navbar-nav">
            <li class="nav-item">
              <a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/_img/teq-logo-icon.svg" class="mainLogo" /></a> EdTech in Focus | <strong>877.455.9369</strong>
            </li>
          </ul>
        </nav>
        <div class="col-md-6"></div>
        <div class="col-md-5 header-content">
          <?php echo $formMessage; ?>
          <p><a class="button grey" id="learn-btn" href="#">Learn more</a><a class="button red" id="schedule-btn" href="#">Schedule your event</a></p>
        </div>
      </div>
      <div class="row main-content">
        <div class="container edtech-content">
          <header class="edtech-header">
            <h1>An EdTech in Focus event provides administrators and teachers with an overview of Teq’s products and professional development. Participants leave excited by what’s possible with Teq’s hardware and professional development offerings.</h1>
            <div class="col-md-6">
              <dl class="faq one">
                <img src="<?php echo get_template_directory_uri();?>/images/edtec-infocus-edtech-content1.jpg" />
                <dt>What it can do for you? <small>more info &#187;</small></dt>
                <dd>An EdTech in Focus event is a great opportunity for your teachers and administrators to learn about new classroom technologies, and to learn how to better integrate the technologies they already have. EdTech in Focus is also a fantastic way to network with nearby districts and learn about their successes and challenges when implementing their technology initiatives.</dd>
              </dl>
            </div>
            <div class="col-md-6">
              <dl class="faq two">
                <img src="<?php echo get_template_directory_uri();?>/images/edtec-infocus-edtech-content2.jpg" />
                <dt>How does it work? <small>more info &#187;</small></dt>
                <dd>The host district will be able to pick from a menu of courses aimed at either administrators or teachers. All sessions will be 45 minutes long and include audience participation. While we encourage teachers to attend, the primary audience should be administrators from the host district and surrounding districts (we recommend hosting a minimum of 10 administrators from neighboring districts). All EdTech in Focus events include a brief keynote speech delivered by a member of the Teq team or, if preferred, delivered by a member of the host school. Sessions can be run in two different models depending on the space, staffing, and agenda of the event:<br /><br /><strong>Option 1:</strong> Station-based sessions that are run simultaneously and have participants rotate between the stations.<br /><br /><strong>Option 2:</strong> A single session where all participants attend together with short breaks in between.</dd>
              </dl>
            </div>
            <div class="col-md-6">
              <dl class="faq three">
                <img src="<?php echo get_template_directory_uri();?>/images/edtec-infocus-edtech-content3.jpg" />
                <dt>What does the schedule typically look like? <small>more info &#187;</small></dt>
                <dd>
                  <ul>
                    <li>Meal (either breakfast or lunch depending on start time) - 30 minutes</li>
                    <li>Opening keynote – 10 minutes</li>
                    <li>Break – 10 minutes</li>
                    <li>Session 1 – 45 minutes</li>
                    <li>Break – 10 minutes</li>
                    <li>Session 2 – 45 minutes</li>
                    <li>Break – 10 minutes</li>
                    <li>Session 3 – 45 minutes</li>
                    <li>Closing statements – 5-10 minutes</li>
                  </ul>
                  <strong>Total run time: 3 ½ hours</strong>
                </dd>
              </dl>
            </div>
            <div class="col-md-6">
              <dl class="faq four">
                <img src="<?php echo get_template_directory_uri();?>/images/edtec-infocus-edtech-content4.jpg" />
                <dt>What type of equipment is included for the event? <small>more info &#187;</small></dt>
                <dd>We provide all the technology and take care of the set-up, so you don’t have to! Typically, we bring 3-4 SMART Interactive Flat Panels (all updated with the SMART Learning Suite) and a variety of STEM solutions including the following:
                  <ul>
                    <li>Makerbot 3D Printer</li>
                    <li>Ultimaker 3D Printer</li>
                    <li>Copernicus 3D Printer Carts</li>
                    <li>Ozobots - Evo and Bit</li>
                    <li>Robotis robotics solutions</li>
                    <li>Wonder Workshop - Dash and Dot</li>
                    <li>Labdisc</li>
                    <li>Pi-top</li>
                    <li>SparkFun</li>
                    <li>Audio Enhancements Classroom Audio Solutions</li>
                  </ul>
                </dd>
              </dl>
            </div>
          </header>
          <div class="col-md-12 text-center">
            <img src="<?php echo get_template_directory_uri();?>/images/edtec-infocus-edtech-content5.jpg" />
          </div>
        </div>
      </div>
      <div class="row main-content form-start">
        <div class="container edtech-content-form">
          <div class="form-group edtech row">
            <h1>Want to schedule an EdTech in Focus Event?<br /><strong>Let's get started.</strong></h1>
          </div>
          <form action="" method="POST" id="edtech-infocus-form">
            <div class="form-group edtech row">
              <div class="col-md-6">
                <label>What is your name?</label>
                <input type="text" class="form-control" id="edtechname" name="edtechname" placeholder="Name">
                <span class="error"><?php echo $edtechnameerr; ?></span>
              </div>
              <div class="col-md-6">
                <label>What is your title?</label>
                <input type="text" class="form-control" id="edtechtitle" name="edtechtitle"  placeholder="Title">
                <span class="error"><?php echo $edtechtitleerr; ?></span>
              </div>
            </div>
            <div class="form-group edtech row">
              <div class="col-md-6">
                <label>Please provide a phone number for us to confirm your event.</label>
                <input type="text" class="form-control" id="edtechphone" name="edtechphone" placeholder="Phone Number">
                <span class="error"><?php echo $edtechphoneerr; ?></span>
              </div>
              <div class="col-md-6">
                <label>Please provide an email address for event coordination.</label>
                <input type="text" class="form-control" id="edtechemail" name="edtechemail"  placeholder="Email">
                <span class="error"><?php echo $edtechemailerr; ?></span>
              </div>
            </div>
            <div class="form-group edtech row">
              <div class="col-md-6">
                <label>Please provide a potentional date.</label>
                <input type="date" class="form-control" id="edtechdateone" name="edtechdateone" placeholder="mm/dd/yyyy">
              </div>
              <div class="col-md-6">
                <label>And backup date.</label>
                <input type="date" class="form-control" id="edtechdatetwo" name="edtechdatetwo"  placeholder="mm/dd/yyyy">
              </div>
            </div>
            <div class="form-group edtech row">
              <div class="col-md-12">
                <label>Please provide the size and a brief description of the space</label>
                <input type="text" class="form-control" id="edtechsizedescription" name="edtechsizedescription" placeholder="">
              </div>
            </div>
            <div class="form-group edtech row">
              <div class="col-md-12">
                <label>Is electric available in the space? Does the space have A/C?</label>
                <input type="text" class="form-control" id="edtechelectricavailable" name="edtechelectricavailable" placeholder="">
              </div>
            </div>
            <div class="form-group edtech row">
              <div class="col-md-12">
                <label>How many people can the space accommodate? Would the catering and sessions take place in the same space?</label>
                <input type="text" class="form-control" id="edtechpeoplespace" name="edtechpeoplespace" placeholder="">
              </div>
            </div>
            <div class="form-group edtech row">
              <div class="col-md-6">
                <h5><strong>Session delivery</strong></h5>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Station-based sessions that are run simultaneously and have participants rotate between the stations." id="edtechstationbased" name="session_delivery[]">
                  <label class="form-check-label" for="edtechstationbased">Station-based sessions that are run simultaneously and have participants rotate between the stations.</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="A single session where all participants attend together with short breaks in between." id="edtechsinglesession" name="session_delivery[]">
                  <label class="form-check-label" for="edtechsinglesession">A single session where all participants attend together with short breaks in between.</label>
                </div>
              </div>
              <div class="col-md-6">
                <h5><strong>Event time preference:</strong></h5>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Morning event" id="edtech-morning-event" name="event_time[]">
                  <label class="form-check-label" for="edtech-morning-event">Morning Event</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="Afternoon event" id="edtech-afternoon-event" name="event_time[]">
                  <label class="form-check-label" for="edtech-afternoon-event">Afternoon Event</label>
                </div>
              </div>
            </div>
            <div class="form-group edtech row">
              <h5><strong>Administrative Courses</strong> <small>(please select one)</small></h5>
              <div class="col-md-12 form-check course">
                <input class="form-check-input" type="checkbox" value="Identifying Effective Technology in the Classroom with SAMR" id="Identifying-Effective-Technology-in-the-Classroom-with-SAMR" name="administrative_courses[]">
                <label class="form-check-label" for="Identifying-Effective-Technology-in-the-Classroom-with-SAMR">Identifying Effective Technology in the Classroom with SAMR</label>
                <span class="info-button"></span>
                  <p>What makes a great technology-infused lesson? How can you encourage teachers to better utilize their available classroom technology more effectively? Participants leave with an understanding of two popular model frameworks for integrating technology tools: SAMR and T-PACK. Administrators will be better able to motivate their teachers into higher levels of effective technology usage, and teachers will be able to do lesson planning to enable deeper understanding and increased engagement from their students.</p>
              </div>
              <div class="col-md-12 form-check course">
                <input class="form-check-input" type="checkbox" value="Evaluating Effective Classroom Technology Usage" id="Evaluating-Effective-Classroom-Technology-Usage" name="administrative_courses[]">
                <label class="form-check-label" for="Evaluating-Effective-Classroom-Technology-Usage">Evaluating Effective Classroom Technology Usage</label>
                <span class="info-button"></span>
                  <p>It’s easy to walk into a classroom and see that a teacher has something displayed on an interactive whiteboard, but how do you really assess what type of learning is taking place? During this session, we will examine the utilization of Interactive Whiteboards, Laptops/ Chromebooks, and iPads/Tablets in classroom instruction. We will look at effective tools for evaluation including lesson planning templates and rubrics. If you are concerned that your school technology investments may be underutilized, or if you want to highlight your great technology pioneers, this session is for you.</p>
              </div>
              <div class="col-md-12 form-check course">
                <input class="form-check-input" type="checkbox" value="Branding Your School with Social Media" id="Branding-Your-School-with-Social-Media" name="administrative_courses[]">
                <label class="form-check-label" for="Branding-Your-School-with-Social-Media">Branding Your School with Social Media</label>
                <span class="info-button"></span>
                  <p>Social media has become an excellent tool for opening communication between teachers, students, and parents, but did you know it’s also a great way to build your schools’ brand? In this session, we’ll discuss best practices for using popular social media networks (Twitter, Facebook, Instagram, and Pinterest) to promote school and district initiatives, while creating a line of communication between your school and community.</p>
              </div>
              <div class="col-md-12 form-check course">
                <input class="form-check-input" type="checkbox" value="Managing Student Accounts" id="Managing-Student-Accounts" name="administrative_courses[]">
                <label class="form-check-label" for="Managing-Student-Accounts">Managing Student Accounts</label>
                <span class="info-button"></span>
                  <p>Are you in the process of setting up students with accounts to various online services? Not sure how the laws surrounding student privacy work? Join us as we take a look at some of the laws protecting students and how they could affect the accounts they need.</p>
              </div>
              <div class="col-md-12 form-check course">
                <input class="form-check-input" type="checkbox" value="Intro to Design Challenges Admin" id="Intro-to-Design-Challenges-Admin" name="administrative_courses[]">
                <label class="form-check-label" for="Intro-to-Design-Challenges-Admin">Intro to Design Challenges</label>
                <span class="info-button"></span>
                <p>In this session, Teq’s PD specialists flex their technological expertise and share with you their favorite version of the cyclical Engineering Design Process: Build, Test, Learn, Design. Whether you’re practicing this process in relation to 3D printing or low-tech technologies it will help students build transferable 21st-century skills like critical thinking and create a student-focused environment. Learn how to get started with engineering design thinking in your classroom today!</p>
              </div>
            </div>
            <div class="form-group edtech row">
              <h5><strong>Teacher Courses</strong> <small>(please select two)</small></h5>

              <div class="col-md-12 form-check course">
                <input class="form-check-input" type="checkbox" value="You Got a 3D Printer Now What" id="You-Got-a-3D-Printer-Now-What" name="teacher_courses[]">
                <label class="form-check-label" for="You-Got-a-3D-Printer-Now-What">You Got a 3D Printer! Now What?</label>
                <span class="info-button"></span>
                  <p>Join us as we discuss important details to consider when implementing 3D printing in your classroom. This session will give you suggestions for successful workflow design, preparing your classroom space, making curricular connections, and more!.</p>
              </div>

              <div class="col-md-12 form-check course">
                <input class="form-check-input" type="checkbox" value="SMART Learning Suite The Fusion of Technology and Learning" id="SMART-Learning-Suite-The-Fusion-of-Technology-and-Learning" name="teacher_courses[]">
                <label class="form-check-label" for="SMART-Learning-Suite-The-Fusion-of-Technology-and-Learning">SMART Learning Suite - The Fusion of Technology and Learning</label>
                <span class="info-button"></span>
                  <p>Experience a hands-on demonstration of SMART iQ and the SMART Learning Suite Online! See how the SMART Learning Suite can focus student engagement, differentiate instruction, and collect data in real time. Great for interacting with students, sharing content, and giving all students a voice in the classroom.</p>
              </div>

              <div class="col-md-12 form-check course">
                <input class="form-check-input" type="checkbox" value="Connecting Chromebooks SMART Learning Suite" id="Connecting-Chromebooks-SMART-Learning-Suite" name="teacher_courses[]">
                <label class="form-check-label" for="Connecting-Chromebooks-SMART-Learning-Suite">Connecting Chromebooks & SMART Learning Suite</label>
                <span class="info-button"></span>
                  <p>With the growing popularity of Chromebooks and other student devices, learn the connection between SMART Learning Suite and Chromebooks. See how students can interact with their own content, complete assessments, and become fully engaged without having to come to the front of the room. While this session will focus on Chromebooks, the same concepts can apply to any web-enabled device.</p>
              </div>

              <div class="col-md-12 form-check course">
                <input class="form-check-input" type="checkbox" value="Dash Dot CS for Early Learners" id="Dash-Dot—CS-for-Early-Learners" name="teacher_courses[]">
                <label class="form-check-label" for="Dash-Dot—CS-for-Early-Learners">Dash & Dot — CS for Early Learners</label>
                <span class="info-button"></span>
                  <p>Can you imagine a small robot asking for a hug or guiding you to the fiction section of the library? With Dash and Dot robots, that’s all possible. Learn how this perfect addition to a computer science curriculum can teach students how to code using block-based language.</p>
              </div>

              <div class="col-md-12 form-check course">
                <input class="form-check-input" type="checkbox" value="SMART Board Basics iQ" id="SMART-Board-Basics-iQ" name="teacher_courses[]">
                <label class="form-check-label" for="SMART-Board-Basics-iQ">SMART Board Basics and iQ</label>
                <span class="info-button"></span>
                  <p>The SMART kapp iQ is an add-on module to the SMART IFP 6000, 7000, and MX series. This add-on will free the teacher’s computer from the SMART IFP and allows student to interact with a variety of apps built right into the 6000 series SMART Interactive Flat Panel. These applications include collaboration tools, access to SMART lab activities, Chrome, Screensharing, and more. </p>
              </div>

              <div class="col-md-12 form-check course">
                <input class="form-check-input" type="checkbox" value="Pi-top Byte of Raspberry Pi" id="Pi-top-Byte-of-Raspberry-Pi" name="teacher_courses[]">
                <label class="form-check-label" for="Pi-top-Byte-of-Raspberry-Pi">Pi-top and a Byte of Raspberry Pi</label>
                <span class="info-button"></span>
                  <p>Inspire and nurture the hidden inventors in your classroom with pi-top! A modular laptop powered by raspberry pi, pi-top is the perfect tool for students to learn to code and create interactive physical systems that can sense and respond to the analog world. Join us as we go over the basics of pi-topOS and what it can do for your classroom!</p>
              </div>

              <div class="col-md-12 form-check course">
                <input class="form-check-input" type="checkbox" value="Enhancing Science Experiments with Labdisc" id="Enhancing-Science-Experiments-with-Labdisc" name="teacher_courses[]">
                <label class="form-check-label" for="Enhancing-Science-Experiments-with-Labdisc">Enhancing Science Experiments with Labdisc</label>
                <span class="info-button"></span>
                  <p>Join us to learn about Labdisc, an engaging data collection tool to help bring your science experiments to a whole new level. Labdisc can be used for a variety of experimental procedures and can assist in many parts of the scientific process. Come see it in action and look at its functionality in a classroom-relevant situation.</p>
              </div>

              <div class="col-md-12 form-check course">
                <input class="form-check-input" type="checkbox" value="Intro to Design Challenges teacher" id="Intro-to-Design-Challenges-Teacher" name="teacher_courses[]">
                <label class="form-check-label" for="Intro-to-Design-Challenges-Teacher">Intro to Design Challenges</label>
                <span class="info-button"></span>
                  <p>In this session, Teq’s PD specialists flex their technological expertise and share with you their favorite version of the cyclical Engineering Design Process: Build, Test, Learn, Design. Whether you’re practicing this process in relation to 3D printing or low-tech technologies it will help students build transferable 21st-century skills like critical thinking and create a student-focused environment. Learn how to get started with engineering design thinking in your classroom today!</p>
              </div>

              <div class="col-md-12 form-check course">
                <input class="form-check-input" type="checkbox" value="Hack Hack Revolution" id="Hack-Hack-Revolution" name="teacher_courses[]">
                <label class="form-check-label" for="Hack-Hack-Revolution">Hack Hack Revolution</label>
                <span class="info-button"></span>
                  <p>Are your old gaming systems collecting dust? Join us as we show you how to repurpose them! In this session, we will detail the process of hacking a Dance Dance Revolution mat with an Arduino to reinvent a popular game. Don’t forget to bring your dancing shoes!</p>
              </div>

              <div class="col-md-12 form-check course">
                <input class="form-check-input" type="checkbox" value="Circuitry with Breadboards" id="Circuitry-with-Breadboards" name="teacher_courses[]">
                <label class="form-check-label" for="Circuitry-with-Breadboards">Circuitry with Breadboards</label>
                <span class="info-button"></span>
                <p>Do you build circuits with your students to teach them about electronics? Are you looking for a better way to do it? Join us as we introduce you to the world of breadboards. Build solderless circuits with these easy-to-use (and inexpensive) tools. Reinvent the way you teach students about electron flow, voltage, current, resistance, circuit functions, and more!</p>
              </div>

              <div class="col-md-12 form-check course">
                <input class="form-check-input" type="checkbox" value="Learning to Code with Ozobot" id="Learning-to-Code-with-Ozobot" name="teacher_courses[]">
                <label class="form-check-label" for="Learning-to-Code-with-Ozobot">Learning to Code with Ozobot</label>
                <span class="info-button"></span>
                <p>Join us to code with colors! See Ozobot’s Evo and Bit robots in action and learn strategies for introducing coding and robotics to your students.</p>
              </div>

              <div class="col-md-12 form-check course">
                <input class="form-check-input" type="checkbox" value="PBL with G Suite" id="PBL-with-G-Suite" name="teacher_courses[]">
                <label class="form-check-label" for="PBL-with-G-Suite">PBL with G Suite</label>
                <span class="info-button"></span>
                <p>See how Google can improve the quality of your project-based learning activities. Learn how to implement Google-based PBL activities to promote critical thinking, communication, and collaboration in your classroom. See how Google’s free tools promote the key elements of PBL, such as research, collaboration, gathering (and analyzing) feedback, and presenting knowledge in your classroom.</p>
              </div>

              <div class="col-md-12 form-check course">
                <input class="form-check-input" type="checkbox" value="Running a Smooth Classroom with G Suite" id="Running-a-Smooth-Classroom-with-G-Suite" name="teacher_courses[]">
                <label class="form-check-label" for="Running-a-Smooth-Classroom-with-G-Suite">Running a Smooth Classroom with G Suite</label>
                <span class="info-button"></span>
                <p>Join Teq as we highlight our favorite G Suite tools for education. We will cover the essential resources and tools that help students succeed and your school run smoothly. See what you can implement in your classroom to effectively manage their laptop checkout system, apply a digital skills curriculum, and help your students “be Internet awesome.”</p>
              </div>

              <div class="col-md-12 form-check course">
                <input class="form-check-input" type="checkbox" value="Using the Makey Makey Across Content Areas" id="Using-the-Makey-Makey-Across-Content-Areas" name="teacher_courses[]">
                <label class="form-check-label" for="Using-the-Makey-Makey-Across-Content-Areas">Using the Makey Makey Across Content Areas</label>
                <span class="info-button"></span>
                <p>The Makey Makey is a simple invention kit for beginners to experts in art, engineering, and everything in between. Students use the Makey Makey to show off their creativity and solve realworld design challenges. In this session, we will look at how the Makey Makey can be utilized by teachers of all grade levels and content areas to integrate computer programming and electrical literacy in a cross curricular, project-based environment. We will review why teachers would use the Makey Makey, how to use Scratch in conjunction with the Makey Makey, as well as the design process and examples of potential projects.</p>
              </div>
            </div>

            <div class="form-group edtech row">
              <div class="col-md-12">
                <input type="submit" name="submit" id="submit" value="Let the learning begin!" />
              </div>
            </div>

          </form>
        </div>

      </div></div>

    </div>


    <?php wp_reset_query(); the_content(); ?>
  </main>
<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
<?php get_footer(); wp_footer(); ?>

<script type="text/javascript">
  $(document).ready(function(){
    $('dl.faq').each(function() {
      $(this).click(function() {
        $(this).children('dd').slideToggle();
      });
    });
    $('div.form-check.course span.info-button').each(function() {
      $(this).click(function() {
        $(this).parent().toggleClass('info-show');
      });
    });
    $('a#learn-btn').click(function() {
      $('html, body').animate({ scrollTop: $("header.edtech-header").offset().top }, 1000);
    });
    $('a#schedule-btn').click(function() {
      $('html, body').animate({ scrollTop: $("div.edtech-content-form").offset().top }, 1000);
    });
  });
</script>
</body>
</html>
