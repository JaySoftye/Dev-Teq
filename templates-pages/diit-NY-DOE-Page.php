<?php
/**
 * Template Name: DIIT NY Department of Educatioin Page
 * Description: Displays NYDOE Products ONLY
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

  <style>

  p, li {
  	font-weight: normal;
  }

  h3 {
    padding-top: 0;
    padding-bottom: 0;
    text-align: center;
  }

  img {
  	display: block;
  	margin: 0 auto;
  }

  div.tab-pane .col-sm-4 {
    padding-top: 5rem;
  }

  div.tab-pane .col-sm-4:nth-child(3n+0) {
    clear: left;
  }

  button.btn-form {
  	display: block;
  	font-size: 1em;
  	outline: none;
    background: transparent;
  	color: #00b4e1;
  	border: 2px solid #00b4e1;
    padding: 12px 32px;
  	margin: 50px auto 0 auto;
    -webkit-border-radius: 40px;
    -moz-border-radius: 40px;
    border-radius: 40px;
    -webkit-box-shadow: 0px 0px 2px 0px rgba(0,0,0,0.2);
    -moz-box-shadow: 0px 0px 2px 0px rgba(0,0,0,0.2);
    box-shadow: 0px 0px 2px 0px rgba(0,0,0,0.2);
  }

  button.btn-form:hover, button.btn-form:focus  {
  	outline: none;
  	background: #00b4e1;
  	color: #eceeef;
    -webkit-transition: background-color ease-out 400ms;
    -moz-transition: background-color ease-out 400ms;
    transition: background-color ease-out 400ms;
  }

  div.buttonRow {
  	text-align: center;
  	display: block;
  	margin: 0 auto;
  }

  button {
  	display: inline;
  	font-size: .9em;
  	outline: none;
    background: transparent;
    padding: 10px 20px;
  	margin-right: 10px;
    -webkit-border-radius: 40px;
    -moz-border-radius: 40px;
    border-radius: 40px;
  }

  button:hover, button:focus  {
  	outline: none;
    -webkit-transition: background-color ease-out 400ms;
    -moz-transition: background-color ease-out 400ms;
    transition: background-color ease-out 400ms;
  }

  button.moreInfo {
  	color: #7fa8e0;
  	border: 2px solid #7fa8e0;
  }

  button.moreInfo:hover, button.moreInfo:focus  {
  	background: #7fa8e0;
  	color: #eceeef;
  }

  button.quote {
  	color: #768693;
  	border: 2px solid #768693;
  }

  button.quote:hover, button.quote:focus  {
  	background: #768693;
  	color: #eceeef;
  }

  section.post {
  	min-height: 25rem;
  	border-bottom: 2px solid #ffffff;
  	display: flex;
    flex-direction: column;
    margin-bottom: 0;
  }

  .post > div {
  	width: 50%;
  	flex: 1;
  	background-color: rgba(23, 27, 31, 0.9);
  	padding: 3rem 2rem 2rem 2rem;
  }

  .postInfo p {
  	display: block;
  	font-weight: 200;
  	font-size: 1.5rem;
  	color: #00b4e1;
  }

  .postInfo h3 a {
  	display: block;
  	font-weight: 300;
  	color: #eceeef;
  }

  .postInfo h3 a:hover {
  	color: #ff923a;
  }

  .nav {
    margin-left: 0;
    padding-top: 20px;
  }

  a.nav-link {
    margin-bottom: 0;
  }

  .modal {
  	top: 10%;
  }

  .modal-content {
  	border-radius: 0;
  }

  .modal-body {
  	padding: 0 0;
  	max-height: 60%;
  }

  .modal-copy {
  	padding: 1.2rem;
  }

  .hs-form-field {
      float: left;
  		margin: 0 auto;
      width: 50%;
  }

  input[type="submit"] {
      float: left;
      height: 34px;
  		display: block;
  		font-size: 1.2em;
  		outline: none;
  	  background: transparent;
  		border: 2px solid #0075c9;
  	  padding: 7px 30px;
  		margin-top: 20px;
  	  -webkit-border-radius: 40px;
  	  -moz-border-radius: 40px;
  	  border-radius: 40px;
      color: #00b4e1;
  }

  table.famis {
  	width: 70%;
  	max-width: 70%;
  	margin: 0 auto 20px auto;
  	table-layout: fixed;
  	color: #3c4852;
    font-size: .7rem;
  }

  table.famis td {
  	padding: .3rem;
  }

  table td.three-col {
  	width: 33%;
  }

  table td.three-col h2, table td.three-col p {
  	padding: 0 20px;
  }

  table.landing-data td {
  	vertical-align: top;
  }

  table.landing-data tr {
  	border-top: 1px solid #3c4852;
  	border-right: 1px solid #3c4852;
  	border-bottom: 2px solid #3c4852;
  	border-left: 1px solid #3c4852;
  }

  table.landing-data tr:nth-child(1) {
  	border-bottom: 4px solid #3c4852;
  }

  table.landing-data td {
  	padding: 14px 7px;
  	background-color: #d2d4d4;
  	text-align: center;
  	width: 12%;
  }

  table.landing-data td:nth-child(2) {
  	font-size: 1.5em;
  	font-weight: bold;
  }

  table.landing-data td:nth-child(even) {
  	background-color: #eceeef;
  	webkit-box-shadow: -4px 0px 4px -2px rgba(0,0,0,0.5);
  	-moz-box-shadow: -4px 0px 4px -2px rgba(0,0,0,0.5);
  	box-shadow: -4px 0px 4px -2px rgba(0,0,0,0.5);
  }

  table.landing-data td:nth-child(1), table.landing-data td:nth-child(2) {
  	width: 20%;
  }

  table.landing-data td.orange {
  	color: #ff681d;
  }

  table.landing-data td.five-col {
  	width: 20%;
  	font-size: 1em;
  	font-weight: normal;
  	padding: 20px 10px;
  }

  </style>

<body <?php body_class(); ?>>

  <!-- End Header. Begin Template Content -->

  <div class="modal" id="requestPrice" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="modal-copy">
            <h4>We want to hear from you. Simply fill out the form below and a Teq Representative will reach out to you directly.</h4>

            <!--[if lte IE 8]>
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
            <![endif]-->
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
            <script>
              hbspt.forms.create({
                portalId: '182596',
                formId: '42b188a8-165d-4be0-af27-ce6016a04a8a',
                submitButtonClass: 'btn-form'
              });
            </script>

          </div>
          <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-quote-footer.jpg" />
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">[Close X]</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="smart2000-details" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="modal-copy">
            <p><strong>WIRELESS SCREEN-SHARING</strong><br />Students and teachers can show whatever is on their Android, iOS and Microsoft devices, and laptops on the display with a few easy taps.</p>
            <p><strong>SMART LEARNING SUITE INCLUDED </strong><br /> SMART Learning Suite’s interactive lessons, game-based activities, formativeassessment, online co-creation and more.</p>
            <p><strong>MORE STUDENT ENGAGEMENT</strong><br />Students who are engaged learn more. The 2000 series gives every student a chance tocontribute, which builds confidence.</p>
            <p><strong>4K ULTRA HD RESOLUTION</strong><br />SMART Notebook lessons. Videos. Web browsing. Brilliant 4K resolution ensures whatever you show on your 2000 series looks its best.</p>
            <p><strong>EASY TO AFFORD</strong><br />Sometimes you don’t need an interactive display for your lessons. With the 2000 series, you get wireless screen-sharing and 4K resolution on a 75” display at a great price.</p>
          </div>
          <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-quote-footer.jpg" />
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">[Close X]</button>
          </div>
        </div>
      </div>
    </div>
  </div>

<div>
  <div class="container-fluid" style="background: transparent url(<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-top-header-bg.jpg) no-repeat top center; background-size: cover;">
    <div class="row product-md-text">
      <div class="container"><div class="row">
        <div class="col-sm-7">
          <h3 class="text-left"><img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-top-header-logo.png" style="margin: 0;" /></h3>
          <p class="white text-left" style="padding-top: 36px; padding-bottom: 2px; margin-bottom: 0;">Welcome to Teq's Online Product Catalog for the</p>
          <h1 class="white text-left"><strong>New York City Department of Education</strong></h1>
        </div>
        <div class="col-sm-5">
          <a href="http://www.teq.com/onlinepd"><img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-online-pd-bannerAD-badge.png" style="cursor:pointer;" /></a>
        </div>
      </div></div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="container">
    <row>
      <div class="col-sm-4">
        <section style="padding-bottom: 3px; padding-top: 5px;">
          <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-free-online-pd-account-compare.png" />
          <p class="text-center">Compare a FREE Account with a Teq Online PD School Subscription</p>
        </section>
          <div class="buttonRow">
            <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/teq_opd_comparison.pdf"><button class="small download" type="button">Compare now</button></a>
          </div>
      </div>
      <div class="col-sm-4">
        <section style="padding-bottom: 3px; padding-top: 5px;">
          <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-smart-notebook-compare.png" />
          <p class="text-center">Compare SMART Notebook to a SMART Learning Suite or Teq Unlimited Subscription</p>
        </section>
          <div class="buttonRow">
            <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/teq_sls_unlimited_comparison.pdf"><button class="small download" type="button">Compare now</button></a>
          </div>
      </div>
      <div class="col-sm-4">
        <section style="padding-bottom: 3px; padding-top: 5px;">
          <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-subscription-compare.png" />
          <p class="text-center">Find a plan thats fits your school's needs</p>
        </section>
          <div class="buttonRow">
            <button class="small download" type="button" data-toggle="modal" data-target="#requestPrice">Request a full quote</button>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="container promo-sm-text promo-md-text">
  <h2>Teq's <strong>Educational</strong> Product Options</h2>
  <h6>Choose a product from the categories below.</h6>

  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#classroomTech">Classroom Technology</a></li>
    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#stemProducts">STEAM Products</a></li>
    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#software">Instructional Software</a></li>
    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#pdSupport">Professional Development / Support & Services</a></li>
  </ul>

  <div class="tab-content">

    <div id="classroomTech" class="tab-pane fade in active">
      <div class="row">
      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-smart-7000.jpg" />
        <h3><strong>SMART 7000 Series</strong></h3>
        <p>The pinnacle of interactive classroom displays.</p>
        <table class="table famis">
          <thead>
            <tr>
              <th>Product</th>
              <th>FAMIS #</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>7275</td>
              <td>358570018</td>
            </tr>
          </tbody>
        </table>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Tech Catalog-2017-smart-7000.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>

      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-smart-6000.jpg" />
        <h3><strong>SMART 6000 Series</strong></h3>
        <p>The most popular SMART Board in the world just got even better.</p>
        <table class="table famis">
          <thead>
            <tr>
              <th>Product</th>
              <th>FAMIS #</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>6065</td>
              <td>35803602X</td>
            </tr>
            <tr>
              <td>6075</td>
              <td>358036062</td>
            </tr>
          </tbody>
        </table>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Tech Catalog-2017-smart-6000.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>

      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-smart-2000.jpg" />
        <h3><strong>SMART 2000 Series</strong></h3>
        <p>Designed for classrooms that need more than just a basic consumer display.</p>
        <table class="table famis">
          <thead>
            <tr>
              <th>Product</th>
              <th>FAMIS #</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2075</td>
              <td>358569672</td>
            </tr>
          </tbody>
        </table>
        <div class="buttonRow">
          <a href="#"><button class="moreInfo" type="button" data-toggle="modal" data-target="#smart2000-details">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>
<!--
      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-smart-2000.jpg" />
        <h3><strong>SMART 2000 Series</strong></h3>
        <p>The SMART Board 2000 series is designed for classrooms that need more than just a basic consumer display.</p>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Tech Catalog-2017-smart-2000.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>
-->
      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-smart-kapp.jpg" />
        <h3><strong>SMART kapp</strong></h3>
        <p>Have students focus on class discussion, rather than taking notes, with the SMART kapp®.</p>
        <table class="table famis">
          <thead>
            <tr>
              <th>Product</th>
              <th>FAMIS #</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>42"</td>
              <td>316545716</td>
            </tr>
            <tr>
              <td>84"</td>
              <td>316545724</td>
            </tr>
          </tbody>
        </table>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Tech Catalog-2017-smart-kapp.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>

      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-audio-enhancement.jpg" />
        <h3><strong>Audio Enhancement</strong></h3>
        <p>Increase student engagement, improve teacher effectiveness, and maximize academic success with Audio Enhancement.</p>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Tech Catalog-2017-audio-enhancement.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>
<!--
      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-smart-table.jpg" />
        <h3><strong>SMART Table</strong></h3>
        <p>Provide your students with an interactive space to develop collaboration skills, and learn through play.</p>
        <table class="table famis">
          <tbody>
            <tr>
              <td>Famis#</td>
              <td>1588164X</td>
            </tr>
          </tbody>
        </table>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Tech Catalog-2017-smart-table.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>
-->
      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-document-camera.jpg" />
        <h3><strong>Document Camera</strong></h3>
        <p>Create exciting multimedia content by turning everyday objects into captivating digital visuals.</p>
        <table class="table famis">
          <tbody>
            <tr>
              <td>Famis#</td>
              <td>315881437</td>
            </tr>
          </tbody>
        </table>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Tech Catalog-2017-smart-doc-camera.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>

      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-techtub.jpg" />
        <h3><strong>Tech Tub 2</strong></h3>
        <p>In the classroom or on a fieldtrip, the Tech Tub2® takes the stress out of protecting and transporting classroom devices.</p>
        <table class="table famis">
          <tbody>
            <tr>
              <td>Famis#</td>
              <td>358040736</td>
            </tr>
          </tbody>
        </table>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Tech Catalog-2017-techtub2.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>

      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-irover2.jpg" />
        <h3><strong>iRover 2</strong></h3>
        <p>Make interactive flat panels more accessible and safer to move with the adjustable and mobile iRover2™.</p>
        <table class="table famis">
          <tbody>
            <tr>
              <td>Famis#</td>
              <td>358037980</td>
            </tr>
          </tbody>
        </table>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Tech Catalog-2017-irover2.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>

      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-conen-mounts.jpg" />
        <h3><strong>Conen Mounts</strong></h3>
        <p>Classroom technology should reach as many people as possible. Conen's motorized mounts makes that possible, giving every teacher and student the opportunity to participate.</p>
        <table class="table famis">
          <tbody>
            <tr>
              <td>Famis#</td>
              <td>316574074</td>
            </tr>
          </tbody>
        </table>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Tech Catalog-2017-conenmounts.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>
    </div>
    </div>

    <div id="stemProducts" class="tab-pane fade">
      <div class="row">
      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-mobile-stem-labs.jpg" />
        <h3><strong>Mobile STEM Lab</strong></h3>
        <p>Includes everything you need to bring STEM topics into each classroom. Available in Elementary, Middle, and High School configurations.</p>
        <table class="table famis">
          <thead>
            <tr>
              <th>Product</th>
              <th>FAMIS #</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Elementary Bundle</td>
              <td>358422868</td>
            </tr>
            <tr>
              <td>Expanded ElementaryBundle</td>
              <td>358422876</td>
            </tr>
            <tr>
              <td>Middle School Bundle</td>
              <td>358422884</td>
            </tr>
            <tr>
              <td>Expanded Middle School Bundle</td>
              <td>358422892</td>
            </tr>
            <tr>
              <td>High School Bundle</td>
              <td>358422906</td>
            </tr>
            <tr>
              <td>Expanded High School Bundle</td>
              <td>358422914</td>
            </tr>
          </tbody>
        </table>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Teq-Mobile-STEM-Lab-datasheet_web.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>

      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-labdisc.jpg" />
        <h3><strong>Labdisc</strong></h3>
        <p>Revolutionize the way students learn with this portable and cost-effective science lab.</p>
        <table class="table famis">
          <tbody>
            <tr>
              <td>Famis#</td>
              <td>316594660</td>
            </tr>
          </tbody>
        </table>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Tech Catalog-2017-labdisc.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>

      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-labdisc-mobile-cart.jpg" />
        <h3><strong>Labdisc Mobile Cart</strong></h3>
        <p>Experience the entire all-in-one modular science lab with the Labdisc Mobile Science Cart.</p>
        <table class="table famis">
          <tbody>
            <tr>
              <td>Famis#</td>
              <td>316594555</td>
            </tr>
          </tbody>
        </table>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Tech Catalog-2017-labdisc.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>

      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-nao-robot.jpg" />
        <h3><strong>JumpStart NAO</strong></h3>
        <p>Revolutionize the way your students learn with the most engaging robot on the planet.</p>
        <table class="table famis">
          <tbody>
            <tr>
              <td>Famis#</td>
              <td>358029732</td>
            </tr>
          </tbody>
        </table>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Tech Catalog-2017-jumpstart-nao.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>

      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-ultimaker.jpg" />
        <h3><strong>Ultimaker</strong></h3>
        <p>Enjoy a seamlessly integrated 3D printing experience, where hardware, software, and materials work in perfect harmony.</p>
        <table class="table famis">
          <tbody>
            <tr>
              <td>Famis#</td>
              <td>358425018</td>
            </tr>
          </tbody>
        </table>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Tech Catalog-2017-ultimaker.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>

      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-3d-printer-cart.jpg" />
        <h3><strong>3D Printer Cart</strong></h3>
        <p>Allow 3D printing to happen whenever, wherever.</p>
        <table class="table famis">
          <tbody>
            <tr>
              <td>Famis#</td>
              <td>358424976</td>
            </tr>
          </tbody>
        </table>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Tech Catalog-2017-3dprintercart.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>

      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-stem-maker-station.jpg" />
        <h3><strong>STEM Maker Station</strong></h3>
        <p>Make building and hands-on learning experiences readily available to your students with the STEM Maker Station—a mobile cart that stores essential maker materials in one secure place.</p>
        <table class="table famis">
          <tbody>
            <tr>
              <td>Famis#</td>
              <td>358424984</td>
            </tr>
          </tbody>
        </table>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Tech Catalog-2017-stemmakerstation.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>
      </div>
    </div>

    <div id="software" class="tab-pane fade">
      <div class="row">
      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-sls.jpg" />
        <h3><strong>SMART Learning Suite</strong></h3>
        <p>Create and deliver hands-on, collaborative learning experiences with the SMART Learning Suite.</p>
        <table class="table famis">
          <tbody>
            <tr>
              <td>Famis#</td>
              <td>358034116</td>
            </tr>
          </tbody>
        </table>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Tech Catalog-2017-smart-learning-suite.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>

      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-stemfuse.jpg" />
        <h3><strong>STEM Fuse</strong></h3>
        <p>Encourage students of any grade level to experience STEM activities like 3D printing, coding, and website design with STEM Fuse.</p>
        <table class="table famis">
          <thead>
            <tr>
              <th>Product</th>
              <th>FAMIS #</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Elementary</td>
              <td>358043964</td>
            </tr>
            <tr>
              <td>Middle</td>
              <td>358043999</td>
            </tr>
            <tr>
              <td>High</td>
              <td>358044022</td>
            </tr>
          </tbody>
        </table>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Tech Catalog-2017-stemfuse.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>

      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-teq-essentials.jpg" />
        <h3><strong>Teq Essentials (formerly known as Unlimited)</strong></h3>
        <p>A PD and software package that supports the successful adoption of the latest instructional techniques and classroom technologies.</p>
        <table class="table famis">
          <tbody>
            <tr>
              <td>Famis#</td>
              <td>316546046</td>
            </tr>
          </tbody>
        </table>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Tech Catalog-2017-teq-essentials.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>
      </div>
    </div>

    <div id="pdSupport" class="tab-pane fade">
      <div class="row">
      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-onlinepd.jpg" />
        <h3><strong>Teq Online PD</strong></h3>
        <p>Learn when you want to; receive help when you need to.</p>
        <table class="table famis">
          <tbody>
            <tr>
              <td>Famis#</td>
              <td>316546038</td>
            </tr>
          </tbody>
        </table>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Tech Catalog-2017-online-pd.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>

      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-onsitepd.jpg" />
        <h3><strong>Teq Onsite PD</strong></h3>
        <p>Achieving absolute success through unparalleled professional development. We provide mentoring and coaching programs designed to breed success in the classroom.</p>
        <table class="table famis">
          <tbody>
            <tr>
              <td>Famis#</td>
              <td>316545910</td>
            </tr>
          </tbody>
        </table>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Tech Catalog-2017-onsite-pd.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>

      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-now-instructional-support.jpg" />
        <h3><strong>nOw Instructional Support</strong></h3>
        <p>Feel confident knowing help is just a click away.</p>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Tech Catalog-2017-now-instructional-support.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>

      <div class="col-sm-4">
        <img src="<?php echo get_template_directory_uri();?>/_img/diit-nycdoe-product-support-plans.jpg" />
        <h3><strong>Teq Support Plans</strong></h3>
        <p>When the technology you use every day goes down, helping you becomes our priority.</p>
        <table class="table famis">
          <tbody>
            <tr>
              <td>Famis#</td>
              <td>316546127</td>
            </tr>
          </tbody>
        </table>
        <div class="buttonRow">
          <a target="_blank" href="<?php echo get_template_directory_uri();?>/_img/Tech Catalog-2017-teqsupport.pdf"><button class="moreInfo" type="button">More Details</button></a><button class="quote" type="button" data-toggle="modal" data-target="#requestPrice">Request a quote</button>
        </div>
      </div>
      </div>
    </div>

   <h2><img src="<?php echo get_template_directory_uri();?>/_img/Teq-CDWG-contract-no-B220901.png" /></h2>
  </div>

</div>

<div class="promo-sm-text full-page-nav-section">
	<div class="container-fluid">
    <div class="row">
      <?php $the_query = new WP_Query( 'posts_per_page=3&cat=-894,-888,-52' );

        while ($the_query -> have_posts()) : $the_query -> the_post();
      ?>

      <?php
        $thumb_id = get_post_thumbnail_id();
        $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
      ?>

      <section class="col-md-4 nopadding post" style="background-color: #3c4852; background-size: cover; background-repeat: no-repeat; background-position: top center; background-image: url('<?php echo $thumb_url[0]; ?>');">

        <div class="postInfo">
          <p class="postDate"><?php the_date(); ?></p>
          <h3><a href="<?php the_permalink() ?>"> <?php the_title(); ?> &#187;</a></h3>
        </div>

      </section>

      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
</div>

<!-- Footer section -->
 <div class="container-fluid" style="background-color: #323e48;">
 <div class="container">
   <div class="row product-sm-text">
     <div class="col-md text-center">
       <p class="footer-text white"><span class="blue">Its all about learning.</span><br>7 Norden Lane<br>Huntington Station<br>NY 11746<br>United States<br></p>
    </div>
           </div>
         </div>

     </div>
 </div>
</div>

       <?php wp_footer(); ?>

<!-- Start of Async HubSpot Analytics Code -->
 <script type="text/javascript">
   (function(d,s,i,r) {
     if (d.getElementById(i)){return;}
     var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
     n.id=i;n.src="//js.hs-analytics.net/analytics/"+(Math.ceil(new Date()/r)*r)+ '/182596.js';
     e.parentNode.insertBefore(n, e);
   })(document,"script","hs-analytics",300000);
 </script>

<!-- End of Async HubSpot Analytics Code -->

   </body>
</html>
