<?php
/**
 * Template Name: Epison SLS Bright Registration
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
    <!-- Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">

    <style>
      h2, h3, h4, h5, p, span {
        color: #FFFFFF;
      }
	    h1 {
        color: #00b3e3;
      }
      div.blue-background {
        background-color:#3c4852;
      }
      div.epson-notebook-bg {
        background-image: url(../wp-content/themes/BootstrapFour/_img/smart-notebook-epison-form-bg.jpg);
        background-size: cover;
      }
      div.section-padding {
        padding: 5%;
      }
      div.full-height {
        min-height: 100vh;
        position: relative;
        z-index: 20;
      }
      div.center-footer {
        width: 100%;
        margin: 0;
        position: absolute;
        bottom: 1%;
      }
      div.form-option, div.form-message {
        display: block;
        padding: 0 10px;
        margin-bottom: 20px;
      }
      div.form-message {
        color: #00b4e4;
        font-size: 1.5rem;
        padding-bottom: 25px;
      }
      div.form-option label {
        display: none;
      }
      div.form-option input, div.form-option select {
        width: 100%;
        height: 2.5rem;
        display: block;
        padding: 3px 10px;
        border: none;
        color:#000000;
        font-size: 100%;
        border-radius: 0;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
      }
      div.form-option.blue input, div.form-option.blue select {
        background-color: #e7e9e9;
      }
      div.form-option.green input, div.form-option.green select {
        background-color: #d6e2f1;
      }
      div.form-option input#submit {
        height: 3.5rem;
        display: block;
        background-color:#00b3e3;
        color: #FFFFFF;
        padding: 3px 10px;
        margin-top: 50px;
        border: none;
      }
      span.error {
        display: block;
        margin-left: 12px;
        font-size: .75rem;
        font-weight: 500;
        color: rgb(140, 0, 0);
      }
    </style>

</head>
<body <?php body_class(); wp_reset_query();?>>

<div class="container-fluid nopadding">
  <div class="row">
    <div class="col-sm-6 full-height section-padding blue-background">
      <div class="row">
        <div class="col-sm-3 col-xs-5">
          <h1><a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/_img/teq-logo-icon.svg" alt="Teq" /></a></h1>
        </div>
        <div class="col-sm-4 col-xs-6">
          <h1><a href="https://home.smarttech.com/"><img src="<?php echo get_template_directory_uri();?>/_img/smart-logo-icon.svg" alt="SMART" /></a></h1>
          </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <svg width="75" height="10">
            <rect width="50" height="5" style="fill:rgb(255, 255, 255);" />
          </svg>
          <div class="row">
            <div class="col-xs-12">
              <?php the_content(); ?>
              <h1>SMART Learning Suite Renewals for <strong>Epson BrightLink Customers</strong></h1>
              <h4>This form is for <em>authorized Epson BrightLink resellers</em> to provide customers with the SMART Learning Suite software. Once the form is submitted; Tequipment Finance will contact you with 5 business days to begin the onboarding process.</h4>
            </div>
          </div>
          <svg width="75" height="5">
            <rect width="50" height="5" style="fill:rgb(255, 255, 255);" />
          </svg>
          <div class="row">
            <div class="col-xs-12">
              <h4>For more information please contact us:</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5">
              <p>7 Norden Lane<br>Huntington Station, NY 11746 United States</p>
            </div>
            <div class="col-sm-5">
              <p>Phone: 877.455.9369<br>Email: <a href="mailto:epsonsls@teq.com" style="color: #00b3e3;">epsonsls@teq.com</a><br />Fax: 631.293.4951</p>
            </div>
          </div>
				<br>
          </div>
        </div>
        <div class="center-footer">
          <h6><a href="https://www.facebook.com/myTeq/"><img src="<?php echo get_template_directory_uri();?>/_img/teq-footer-facebook-icon.png" /></a><a href="https://twitter.com/TeqPD"><img src="<?php echo get_template_directory_uri();?>/_img/teq-footer-twitter-icon.png" /></a><a href="https://www.linkedin.com/company/teq/"><img src="<?php echo get_template_directory_uri();?>/_img/teq-footer-linkedin-icon.png" /></a> <small class="white">©2016 Teq - all rights reserved</small></h6>
        </div>
      </div>

      <div class="col-sm-6 full-height section-padding epson-notebook-bg">
        <div id="primary" class="middle-center">
          <div class="form-message">

          <?php

            if(isset($_POST['submit'])) {
              $flag=1;

              if (empty($_POST['companyname']))
              {
                $flag=0;
                $companynameerr = '* PLEASE ENTER A COMPANY NAME';
              }
              if (empty($_POST['billtoaddress1']))
              {
                $flag=0;
                $billtoaddress1err = '* PLEASE ENTER AN ADDRESS';
              }
              if (empty($_POST['companycity']))
              {
                $flag=0;
                $companycityerr = '* PLEASE ENTER A CITY';
              }
              if (empty($_POST['companyzip']))
              {
                $flag=0;
                $companyziperr = '* PLEASE ENTER A ZIP/POSTAL CODE';
              }
              if (empty($_POST['companyphonenumber']))
              {
                $flag=0;
                $companyphonenumbererr = '* PLEASE ENTER A PHONE NUMBER';
              }
              if (empty($_POST['contactname']))
              {
                $flag=0;
                $contactnameerr = '* PLEASE ENTER A CONTACT NAME';
              }
              if (empty($_POST['contactphonenumber']))
              {
                $flag=0;
                $contactphonenumbererr = '* PLEASE ENTER A CONTACT NUMBER';
              }
              if (empty($_POST['contactemail']))
              {
                $flag=0;
                $contactemailerr = '* PLEASE ENTER A CONTACT EMAIL';
              }
              if (empty($_POST['contactconfirmemail']))
              {
                $flag=0;
                $contactconfirmemailerr = '* THE EMAIL ADDRESSES DO NOT MATCH, PLEASE TRY AGAIN';
              }

            else {
              if($flag==1)
              {

                $email_message .= "Company Name: " . $_POST['companyname'] . "\r\n";
                $email_message .= "Company Address Line 1: " . $_POST['billtoaddress1'] . "\r\n";
                $email_message .= "Company Address Line 2: " . $_POST['billtoaddress2'] . "\r\n";
                $email_message .= "Company City: " . $_POST['companycity'] . "\r\n";
                $email_message .= "Company State: " . $_POST['companystate'] . "\r\n";
                $email_message .= "Company Zip/Postal Code: " . $_POST['companyzip'] . "\r\n";
                $email_message .= "Company Country: " . $_POST['companycountry'] . "\r\n";
                $email_message .= "Company Phone: " . $_POST['companyphonenumber'] . "\r\n";
                $email_message .= "Company Fax: " . $_POST['companyfaxnumber'] . "\r\n" . "\r\n";
                $email_message .= "Contact Name: " . $_POST['contactname'] . "\r\n";
                $email_message .= "Contact Phone: " . $_POST['contactphonenumber'] . "\r\n";
                $email_message .= "Contact Email: " . $_POST['contactemail'] . "\r\n";

                echo "* Thank you, your message has been successfully sent. You should hear from us within 5 business days. If you have any further questions please contact us at: 877.455.9369";
                $to = 'epsonsls@teq.com';
                $subject = 'SMART Learning Suite Epson Request';
                $body = $email_message;
                $headers = 'From: Epson-Teq <epsonsls@teq.com>';
                  wp_mail( $to, $subject, $body, $headers );
                  exit;
                }
              }

            }
          ?>
        </div>

        <form method="post" id="contactus_form">
          <div class="form-option blue">
            <label for="">Company Name</label>
            <input type="text" name="companyname" id="companyname" value="<?php echo isset($_POST["companyname"]) ? $_POST["companyname"] : ''; ?>" placeholder="Company Name" />
            <span class="error"><?php echo $companynameerr; ?></span>
          </div>
          <div class="form-option blue">
            <label for="">Bill to Address 1</label>
            <input type="text" name="billtoaddress1" id="billtoaddress1" value="<?php echo isset($_POST["billtoaddress1"]) ? $_POST["billtoaddress1"] : ''; ?>" placeholder="Bill to Address 1" />
            <span class="error"><?php echo $billtoaddress1err; ?></span>
          </div>
          <div class="form-option blue">
            <label for="">Bill to Address 2</label>
            <input type="text" name="billtoaddress2" id="billtoaddress2" value="<?php echo isset($_POST["billtoaddress2"]) ? $_POST["billtoaddress2"] : ''; ?>" placeholder="Bill to Address 2" />
          </div>
          <div class="row">
            <div class="form-option blue col-md-6">
              <label for="">City</label>
              <input type="text" name="companycity" id="companycity" value="<?php echo isset($_POST["companycity"]) ? $_POST["companycity"] : ''; ?>" placeholder="City" >
              <span class="error"><?php echo $companycityerr; ?></span>
            </div>
            <div class="form-option blue col-md-6">
              <label for="">State</label>
              <select name="companystate" id="companystate" value="<?php echo isset($_POST["companystate"]) ? $_POST["companystate"] : ''; ?>">
  <option value="" disabled selected>State/Province</option>
  <option value="AL">Alabama</option>
  <option value="AK">Alaska</option>
  <option value="AZ">Arizona</option>
  <option value="AR">Arkansas</option>
  <option value="CA">California</option>
  <option value="CO">Colorado</option>
  <option value="CT">Connecticut</option>
  <option value="DE">Delaware</option>
  <option value="DC">District Of Columbia</option>
  <option value="FL">Florida</option>
  <option value="GA">Georgia</option>
  <option value="HI">Hawaii</option>
  <option value="ID">Idaho</option>
  <option value="IL">Illinois</option>
  <option value="IN">Indiana</option>
  <option value="IA">Iowa</option>
  <option value="KS">Kansas</option>
  <option value="KY">Kentucky</option>
  <option value="LA">Louisiana</option>
  <option value="ME">Maine</option>
  <option value="MD">Maryland</option>
  <option value="MA">Massachusetts</option>
  <option value="MI">Michigan</option>
  <option value="MN">Minnesota</option>
  <option value="MS">Mississippi</option>
  <option value="MO">Missouri</option>
  <option value="MT">Montana</option>
  <option value="NE">Nebraska</option>
  <option value="NV">Nevada</option>
  <option value="NH">New Hampshire</option>
  <option value="NJ">New Jersey</option>
  <option value="NM">New Mexico</option>
  <option value="NY">New York</option>
  <option value="NC">North Carolina</option>
  <option value="ND">North Dakota</option>
  <option value="OH">Ohio</option>
  <option value="OK">Oklahoma</option>
  <option value="OR">Oregon</option>
  <option value="PA">Pennsylvania</option>
  <option value="RI">Rhode Island</option>
  <option value="SC">South Carolina</option>
  <option value="SD">South Dakota</option>
  <option value="TN">Tennessee</option>
  <option value="TX">Texas</option>
  <option value="UT">Utah</option>
  <option value="VT">Vermont</option>
  <option value="VA">Virginia</option>
  <option value="WA">Washington</option>
  <option value="WV">West Virginia</option>
  <option value="WI">Wisconsin</option>
  <option value="WY">Wyoming</option>
  <option value="AB">Alberta</option>
	<option value="BC">British Columbia</option>
	<option value="MB">Manitoba</option>
	<option value="NB">New Brunswick</option>
	<option value="NL">Newfoundland and Labrador</option>
	<option value="NS">Nova Scotia</option>
	<option value="ON">Ontario</option>
	<option value="PE">Prince Edward Island</option>
	<option value="QC">Quebec</option>
	<option value="SK">Saskatchewan</option>
	<option value="NT">Northwest Territories</option>
	<option value="NU">Nunavut</option>
	<option value="YT">Yukon</option>
              </select>
              <span class="error"><?php echo $companystateerr; ?></span>
            </div>
          </div>
          <div class="row">
            <div class="form-option blue col-md-6">
              <label for="">Zip/Postal Code</label>
              <input type="number" name="companyzip" id="companyzip" value="<?php echo isset($_POST["companyzip"]) ? $_POST["companyzip"] : ''; ?>" placeholder="Zip/Postal Code" >
              <span class="error"><?php echo $companyziperr; ?></span>
            </div>
            <div class="form-option blue col-md-2">
              <label for="">Country</label>
              <select name="companycountry" id="companycountry" value="<?php echo isset($_POST["companycountry"]) ? $_POST["companycountry"] : ''; ?>">
  <option value="" disabled selected>Country</option>
  <option value="US">US</option>
  <option value="Canada">Canada</option>
              </select>
              <span class="error"><?php echo $companycountryerr; ?></span>
            </div>
          </div>
          <div class="row">
            <div class="form-option blue col-md-6">
              <label for="">Company Fax Number</label>
              <input type="tel" name="companyfaxnumber" id="companyfaxnumber" value="<?php echo isset($_POST["companyfaxnumber"]) ? $_POST["companyfaxnumber"] : ''; ?>" placeholder="Company Fax Number" >
            </div>
            <div class="form-option blue col-md-6">
              <label for="">Company Phone Number</label>
              <input type="get_template_directory_uri" name="companyphonenumber" id="companyphonenumber" value="<?php echo isset($_POST["companyphonenumber"]) ? $_POST["companyphonenumber"] : ''; ?>" placeholder="Company Phone Number" >
              <span class="error"><?php echo $companyphonenumbererr; ?></span>
            </div>
          </div>

          <div class="row">
            <div class="form-option green col-md-6">
              <label for="">Contact Name</label>
              <input type="text" name="contactname" id="contactname" value="<?php echo isset($_POST["contactname"]) ? $_POST["contactname"] : ''; ?>" placeholder="Contact Name" >
              <span class="error"><?php echo $contactnameerr; ?></span>
            </div>
            <div class="form-option green col-md-6">
              <label for="">Phone Number</label>
              <input type="tel" name="contactphonenumber" id="contactphonenumber" value="<?php echo isset($_POST["contactphonenumber"]) ? $_POST["contactphonenumber"] : ''; ?>" placeholder="Phone Number" >
              <span class="error"><?php echo $contactphonenumbererr; ?></span>
            </div>
          </div>
          <div class="form-option green">
            <label for="">Contact Email</label>
            <input type="email" name="contactemail" id="contactemail" value="<?php echo isset($_POST["contactemail"]) ? $_POST["contactemail"] : ''; ?>" placeholder="Email" >
            <span class="error"><?php echo $contactemailerr; ?></span>

          </div>
          <div class="form-option green">
            <label for="">Confirm Email</label>
            <input type="email" name="contactconfirmemail" id="contactconfirmemail" value="<?php echo isset($_POST["contactconfirmemail"]) ? $_POST["contactconfirmemail"] : ''; ?>" placeholder="Confirm Email" >
            <span class="error"><?php echo $contactconfirmemailerr; ?></span>
          </div>
          <div class="form-option green">
            <input type="submit" name="submit" id="submit" value="SUBMIT"/>
          </div>
        </form>

      </div>

    </div>
  </div>

<?php wp_footer(); ?>
</body>
</html>
