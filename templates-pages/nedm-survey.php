<?php
/**
 * Template Name: Network-Enabled Device Management
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
 /** Validate your form **/

if (isset($_POST['submitted'])) {
  if (trim( $_POST['nedm-survey-first-name']) === '' ) {
    $firstNameError = 'is required';
    $firstClassError = 'errorfield';
    $hasError = true;
  }
  if (trim( $_POST['nedm-survey-last-name']) === '' ) {
    $lastNameError = 'is required';
    $lastClassError = 'errorfield';
    $hasError = true;
  }
  if (trim( $_POST['nedm-survey-school-name']) === '' ) {
    $schoolNameError = 'is required';
    $schoolClassError = 'errorfield';
    $hasError = true;
  }
  if (trim( $_POST['nedm-survey-contact-phone']) === '' ) {
    $contactPhoneError = 'is required';
    $phoneClassError = 'errorfield';
    $hasError = true;
  }
  if (trim( $_POST['nedm-survey-contact-email']) === '' ) {
    $contactEmailError = 'is required';
    $emailClassError = 'errorfield';
    $hasError = true;
  }
  if (trim( $_POST['nedm-survey-cloudgenix-device']) === '' ) {
    $cloudgenixDeviceError = 'This field is required';
    $cloudgenixClassError = 'errorfield';
    $hasError = true;
  }
  else {
    $hasError = false;
    header('Location: /nedm-survey-confirmation/');
  }
}

 add_action( 'post_edit_form_tag' , 'post_edit_form_tag' );
 function post_edit_form_tag( ) {
   echo ' enctype="multipart/form-data"';
 }

 $firstName = wp_strip_all_tags($_POST['nedm-survey-first-name']);
 $lastName = wp_strip_all_tags($_POST['nedm-survey-last-name']);
 $titleRole = wp_strip_all_tags($_POST['nedm-survey-title-role']);
 $schoolName = wp_strip_all_tags($_POST['nedm-survey-school-name']);
 $contactPhone = wp_strip_all_tags($_POST['nedm-survey-contact-phone']);
 $contactEmail = wp_strip_all_tags($_POST['nedm-survey-contact-email']);
 $totalDevices = wp_strip_all_tags($_POST['nedm-survey-total-devices']);
 $deviceVendor = wp_strip_all_tags($_POST['nedm-survey-device-vendor']);
 $connection = wp_strip_all_tags($_POST['nedm-survey-connection']);
 $proxyConnectivity = wp_strip_all_tags($_POST['nedm-survey-proxy-connectivity']);
 $wpadImplemented = wp_strip_all_tags($_POST['nedm-survey-wpad-implemented']);
 $filterFirewall = wp_strip_all_tags($_POST['nedm-survey-filter-firewall']);
 $vendorType = wp_strip_all_tags($_POST['nedm-survey-vendor-type']);
 $wirelessStandard = wp_strip_all_tags($_POST['nedm-survey-wireless-standard']);
 $schoolBroadcasting = wp_strip_all_tags($_POST['nedm-survey-school-broadcasting']);
 $averageDensity = wp_strip_all_tags($_POST['nedm-survey-average-density']);
 $technologyEnabled = wp_strip_all_tags($_POST['nedm-survey-technology-enabled']);
 $pointsDeployed = wp_strip_all_tags($_POST['nedm-survey-points-deployed']);
 $vlanTagging= wp_strip_all_tags($_POST['nedm-survey-vlan-tagging']);
 $wirelessSecurity = wp_strip_all_tags($_POST['nedm-survey-wireless-security']);
 $wmmQos = wp_strip_all_tags($_POST['nedm-survey-wmm-qos']);
 $totalIp = wp_strip_all_tags($_POST['nedm-survey-total-ip']);
 $sameVlan = wp_strip_all_tags($_POST['nedm-survey-same-vlan']);
 $hdcpContent = wp_strip_all_tags($_POST['nedm-survey-hdcp-content']);
 $browseInternet = wp_strip_all_tags($_POST['nedm-survey-browse-internet']);
 $teacherShare = wp_strip_all_tags($_POST['nedm-survey-teacher-share']);
 $totalSharing = wp_strip_all_tags($_POST['nedm-survey-total-sharing']);
 $wiredSharing = wp_strip_all_tags($_POST['nedm-survey-wired-sharing']);
 $automaticUpdates = wp_strip_all_tags($_POST['nedm-survey-automatic-updates']);
 $trafficTool = wp_strip_all_tags($_POST['nedm-survey-traffic-tool']);
 $reportSharing = wp_strip_all_tags($_POST['nedm-survey-report-sharing']);
 $cloudgenixDevice = wp_strip_all_tags($_POST['nedm-survey-cloudgenix-device']);

 /** Submit your form information **/
 if (isset($_POST['submitted']) && isset($_POST['post_nonce_field']) && wp_verify_nonce($_POST['post_nonce_field'], 'post_nonce') && ($hasError == false)) {

   $post_information = array(
     'post_title' => wp_strip_all_tags( $_POST['nedm-survey-school-name'] ),
     'post_type' => 'NEDM-Surveys',
     'post_status' => 'publish'
    );
    $new_post = wp_insert_post( $post_information );
      add_post_meta($new_post, "firstName", $firstName);
      add_post_meta($new_post, "lastName", $lastName);
      add_post_meta($new_post, "titleRole", $titleRole);
      add_post_meta($new_post, "schoolName", $schoolName);
      add_post_meta($new_post, "contactPhone", $contactPhone);
      add_post_meta($new_post, "contactEmail", $contactEmail);
      add_post_meta($new_post, "totalDevices", $totalDevices);
      add_post_meta($new_post, "deviceVendor", $deviceVendor);
      add_post_meta($new_post, "connection", $connection);
      add_post_meta($new_post, "proxyConnectivity", $proxyConnectivity);
      add_post_meta($new_post, "wpadImplemented", $wpadImplemented);
      add_post_meta($new_post, "filterFirewall", $filterFirewall);
      add_post_meta($new_post, "vendorType", $vendorType);
      add_post_meta($new_post, "wirelessStandard", $wirelessStandard);
      add_post_meta($new_post, "schoolBroadcasting", $schoolBroadcasting);
      add_post_meta($new_post, "averageDensity", $averageDensity);
      add_post_meta($new_post, "technologyEnabled", $technologyEnabled);
      add_post_meta($new_post, "pointsDeployed", $pointsDeployed);
      add_post_meta($new_post, "vlanTagging", $vlanTagging);
      add_post_meta($new_post, "wirelessSecurity", $wirelessSecurity);
      add_post_meta($new_post, "wmmQos", $wmmQos);
      add_post_meta($new_post, "totalIp", $totalIp);
      add_post_meta($new_post, "sameVlan", $sameVlan);
      add_post_meta($new_post, "hdcpContent", $hdcpContent);
      add_post_meta($new_post, "browseInternet", $browseInternet);
      add_post_meta($new_post, "teacherShare", $teacherShare);
      add_post_meta($new_post, "totalSharing", $totalSharing);
      add_post_meta($new_post, "wiredSharing", $wiredSharing);
      add_post_meta($new_post, "automaticUpdates", $automaticUpdates);
      add_post_meta($new_post, "trafficTool", $trafficTool);
      add_post_meta($new_post, "reportSharing", $reportSharing);
      add_post_meta($new_post, "cloudgenixDevice", $cloudgenixDevice);
 }

 get_template_part( 'lib/nedm-survey-post-header' ); wp_reset_query(); the_content();
?>

<div class="container"><div class="row"><div class="col">
<form action="#" method="POST" id="nedm-survey" <?php do_action('post_edit_form_tag'); ?> enctype="multipart/form-data">

<div class="form-group">
  <?php if ($hasError == true) { ?>
  <h4 class="error"><img src="../consulting-services/public/images/network-enabled-form-error-icon.svg" alt="" /> Oops, it appears you forgot a few items, please fill in the missing information below and resubmit.</h4>
  <?php } ?>
</div>

<div class="row">
  <div class="col-md-6">
    <h2><strong>Let’s start with some basic information about you.</strong></h2>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="nedm-survey-first-name"><?php _e('First Name', 'framework') ?> <span class="errormsg"><?php echo $firstNameError; ?></span></label>
      <input type="text" class="form-control <?php echo $firstClassError; ?>" name="nedm-survey-first-name" id="nedm-survey-first-name" value="<?php echo $firstName; ?>" />
    </div>
    <div class="form-group">
      <label for="nedm-survey-last-name"><?php _e('Last Name', 'framework') ?> <span class="errormsg"><?php echo $lastNameError; ?></span></label>
      <input type="text" class="form-control <?php echo $lastClassError; ?>" name="nedm-survey-last-name" id="nedm-survey-last-name" value="<?php echo $lastName; ?>" />
    </div>
    <div class="form-group">
      <label for="nedm-survey-title-role"><?php _e('Title and/or Role', 'framework') ?></label>
      <select class="form-control" name="nedm-survey-title-role" id="nedm-survey-title-role" value="<?php echo $titleRole; ?>">
        <option value="" selected disabled></option>
        <option value="Academic Assessment Director">Academic Assessment Director</option>
        <option value="Assistant Principal">Assistant Principal</option>
        <option value="Assistant Superintendent">Assistant Superintendent</option>
        <option value="Business Administrator">Business Administrator</option>
        <option value="Curriculum Director">Curriculum Director</option>
        <option value="Curriculum Specialist">Curriculum Specialist</option>
        <option value="Director">Director</option>
        <option value="ELA Director/Chairperson">ELA Director/Chairperson</option>
        <option value="Grant Coordinator">Grant Coordinator</option>
        <option value="IT Director">IT Director</option>
        <option value="Math Director/Chairperson">Math Director/Chairperson</option>
        <option value="President">President</option>
        <option value="Principal">Principal</option>
        <option value="PTA/PTO President">PTA/PTO President</option>
        <option value="School Board Member">School Board Member</option>
        <option value="Science Director/Chairperson">Science Director/Chairperson</option>
        <option value="Social Studies Director/Chairperson">Social Studies Director/Chairperson</option>
        <option value="Staff Developer">Staff Developer</option>
        <option value="STEM Coordinator">STEM Coordinator</option>
        <option value="Superintendent">Superintendent</option>
        <option value="Teacher">Teacher</option>
        <option value="Teacher Effectiveness Coach">Teacher Effectiveness Coach</option>
        <option value="Technology Director">Technology Director</option>
        <option value="Technology Coordinator">Technology Coordinator</option>
        <option value="Technology SPOC">Technology SPOC</option>
        <option value="Instructional Media Services Director">Instructional Media Services Director</option>
        <option value="Technology Integration Specialist">Technology Integration Specialist</option>
        <option value="Technology Teacher">Technology Teacher</option>
      </select>
    </div>
    <div class="form-group">
      <label for="nedm-survey-school-name"><?php _e('School Name', 'framework') ?> <span class="errormsg"><?php echo $schoolNameError; ?></span></label>
      <input type="text" class="form-control <?php echo $schoolClassError; ?>" name="nedm-survey-school-name" id="nedm-survey-school-name" value="<?php echo $schoolName; ?>" />
    </div>
    <div class="form-group">
      <label for="nedm-survey-contact-phone"><?php _e('Phone', 'framework') ?> <span class="errormsg"><?php echo $contactPhoneError; ?></span></label>
      <input type="phone" class="form-control <?php echo $phoneClassError; ?>" name="nedm-survey-contact-phone" id="nedm-survey-contact-phone" value="<?php echo $contactPhone; ?>" />
    </div>
    <div class="form-group">
      <label for="nedm-survey-contact-email"><?php _e('Email', 'framework') ?> <span class="errormsg"><?php echo $contactEmailError; ?></span></label>
      <input type="phone" class="form-control <?php echo $emailClassError; ?>" name="nedm-survey-contact-email" id="nedm-survey-contact-email" value="<?php echo $contactEmail; ?>" />
    </div>
  </div>
</div>

<div class="row group-row">
  <div class="col-md-6">
    <h2><strong>Let’s talk about your school or district network setup.</strong></h2>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="nedm-survey-total-devices"><?php _e('What is total number of client devices on your network?', 'framework') ?></label>
      <input type="text" class="form-control" name="nedm-survey-total-devices" id="nedm-survey-total-devices" value="<?php echo $totalDevices; ?>" />
    </div>
    <div class="form-group">
      <label for="nedm-survey-device-vendor"><?php _e('Is there a device vendor that is more prevalent? (Apple, Google, Microsoft etc.)', 'framework') ?></label>
      <input type="text" class="form-control" name="nedm-survey-device-vendor" id="nedm-survey-device-vendor" value="<?php echo $deviceVendor; ?>" />
    </div>
    <div class="form-group row">
      <div class="form-check col-md-6">
        <label>How will the IFPs be connecting to the network?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-connection" id="nedm-survey-wired-connection" value="Wired connection" checked="checked"><span class="form-check-input-text"><?php _e('Wired', 'framework') ?></span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-connection" id="nedm-survey-wireless-connection" value="Wireless connection"><span class="form-check-input-text"><?php _e('Wireless', 'framework') ?></span>
        </label>
      </div>
    </div>
    <div class="form-group row">
      <div class="form-check col-md-6">
        <label>Is your school using a proxy for connectivity and content filtering?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-proxy-connectivity" id="nedm-survey-proxy-connectivity-yes" value="A proxy is being used for connectivity and content filtering" checked="checked"><span class="form-check-input-text"><?php _e('Yes', 'framework') ?></span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-proxy-connectivity" id="nedm-survey-proxy-connectivity-no" value="A proxy is NOT being used for connectivity and content filtering?"><span class="form-check-input-text"><?php _e('No', 'framework') ?></span>
        </label>
      </div>
      <div class="form-check col-md-6">
        <label>Is WPAD implemented?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-wpad-implemented" id="nedm-survey-wpad-implemented-yes" value="WPAD is implemented" checked="checked"><span class="form-check-input-text"><?php _e('Yes', 'framework') ?></span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-wpad-implemented" id="nedm-survey-wpad-implemented-no" value="WPAD is NOT implemented"><span class="form-check-input-text"><?php _e('No', 'framework') ?></span>
        </label>
      </div>
    </div>
    <div class="form-group row">
      <div class="form-check col-md-6">
        <label>Is there an In-Line content filter or firewall deployed?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-filter-firewall" id="nedm-survey-filter-firewall-yes" value="There is an In-Line content filter or firewall deployed" checked="checked"><span class="form-check-input-text"><?php _e('Yes', 'framework') ?></span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-filter-firewall" id="nedm-survey-filter-firewall-no" value="There is NOT an In-Line content filter or firewall deployed"><span class="form-check-input-text"><?php _e('No', 'framework') ?></span>
        </label>
      </div>
      <div class="form-check col-md-6">
        <label for="nedm-survey-vendor-type"><?php _e('What vendor or type?', 'framework') ?></label>
        <input type="text" class="form-control" name="nedm-survey-vendor-type" id="nedm-survey-vendor-type" value="<?php echo $vendorType; ?>" />
      </div>
    </div>
  </div>
</div>

<div class="row group-row">
  <div class="col-md-6">
    <h2><strong>What does the WIFI landscape look like in your school?</strong></h2>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <div class="form-check col-md-6">
        <label for="nedm-survey-wireless-standard"><?php _e('Highest wireless standard supported?', 'framework') ?> </label>
        <select class="form-control" name="nedm-survey-wireless-standard" id="nedm-survey-wireless-standard">
          <option value="" selected disabled></option>
          <option value="802.11g">802.11g</option>
          <option value="802.11n">802.11n</option>
          <option value="802.11ac">802.11ac</option>
        </select>
      </div>
      <div class="form-check col-md-6">
        <label>Is your school currently broadcasting?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-school-broadcasting" id="nedm-survey-school-broadcasting-two" value="2.5Ghz" checked="checked"><span class="form-check-input-text"><?php _e('2.4Ghz', 'framework') ?></span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-school-broadcasting" id="nedm-survey-school-broadcasting-five" value="5Ghz"><span class="form-check-input-text"><?php _e('5Ghz', 'framework') ?></span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-school-broadcasting" id="nedm-survey-school-broadcasting-both" value="both"><span class="form-check-input-text"><?php _e('Both', 'framework') ?></span>
        </label>
      </div>
    </div>
    <div class="form-group">
      <label for="nedm-survey-average-density"><?php _e('Average density of clients per access point?', 'framework') ?></label>
      <input type="text" class="form-control" name="nedm-survey-average-density" id="nedm-survey-average-density" value="<?php echo $averageDensity; ?>" />
    </div>
    <div class="form-group">
      <label for="nedm-survey-technology-enabled"><?php _e('What feature technology is enabled if any? (Band steering, Airtime Fairness, Min. RSSI values etc.)', 'framework') ?></label>
      <input type="text" class="form-control" name="nedm-survey-technology-enabled" id="nedm-survey-technology-enabled" value="<?php echo $technologyEnabled; ?>">
    </div>
    <div class="form-group">
      <label for="nedm-survey-points-deployed"><?php _e('How many access points are deployed in each build?', 'framework') ?></label>
      <input type="text" class="form-control" name="nedm-survey-points-deployed" id="nedm-survey-points-deployed" value="<?php echo $pointsDeployed; ?>">
    </div>
    <div class="form-group row">
      <div class="form-check col-md-6">
        <label>Is VLAN tagging at the SSID part of your deployment?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-vlan-tagging" id="nedm-survey-vlan-tagging-yes" value="VLAN tagging is part of the SSID part of your deployment" checked="checked"><span class="form-check-input-text"><?php _e('Yes', 'framework') ?></span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-vlan-tagging" id="nedm-survey-vlan-tagging-no" value="VLAN tagging is NOT part of the SSID part of your deployment"><span class="form-check-input-text"><?php _e('No', 'framework') ?></span>
        </label>
      </div>
    </div>
    <div class="form-group">
      <label for="nedm-survey-wireless-security"><?php _e('What type of wireless security is being implemented at your school? (WEP, WPA/WPA2, WPA Enterprise etc.)', 'framework') ?></label>
      <input type="text" class="form-control" name="nedm-survey-wireless-security" id="nedm-survey-wireless-security" value="<?php echo $wirelessSecurity; ?>">
    </div>
  </div>
</div>

<div class="row group-row">
  <div class="col-md-6">
    <h2><strong>Just a little bit more about your local network environment.</strong></h2>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <div class="form-check col-md-6">
        <label>Are WMM or other QoS policies defined and enabled on your LAN</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-wmm-qos" id="nedm-survey-wmm-qos-yes" value="WMM and/or QoS policies are defined and/or enabled on my LAN" checked="checked"><span class="form-check-input-text"><?php _e('Yes', 'framework') ?></span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-wmm-qos" id="nedm-survey-wmm-qos-no" value="WMM and/or QoS policies are NOT defined and/or enabled on my LAN"><span class="form-check-input-text"><?php _e('No', 'framework') ?></span>
        </label>
      </div>
    </div>
    <div class="form-group row">
      <div class="form-check col-md-6">
        <label for="nedm-survey-total-ip"><?php _e('How many IP addresses are available in the current DHCP scope?', 'framework') ?></label>
        <input type="text" class="form-control" name="nedm-survey-total-ip" id="nedm-survey-total-ip" value="<?php echo $totalIp; ?>">
      </div>
      <div class="form-check col-md-6">
        <label>Will the client devices and IFP be on the same VLAN?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-same-vlan" id="nedm-survey-same-vlan-yes" value="Client devices and IFP's will be on the same VLAN" checked="checked"><span class="form-check-input-text"><?php _e('Yes', 'framework') ?></span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-same-vlan" id="nedm-survey-same-vlan-no" value="Client devices and IFP's will NOT be on the same VLAN"><span class="form-check-input-text"><?php _e('No', 'framework') ?></span>
        </label>
      </div>
    </div>
  </div>
</div>

<div class="row group-row">
  <div class="col-md-6">
    <h2><strong>How will you be utilizing your IFP's in the classroom?</strong></h2>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <div class="form-check col-md-6">
        <label>Will the IFPs be used to play any HDCP content, including Blu-rays, DVDs, and other HD media?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-hdcp-content" id="nedm-survey-hdcp-content-yes" value="The IFPs will be used to play HDCP content" checked="checked"><span class="form-check-input-text"><?php _e('Yes', 'framework') ?></span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-hdcp-content" id="nedm-survey-hdcp-content-no" value="The IFPs will NOT be used to play HDCP content"><span class="form-check-input-text"><?php _e('No', 'framework') ?></span>
        </label>
      </div>
      <div class="form-check col-md-6">
        <label>Will teachers and students be allowed to browse the Internet from the IFPs?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-browse-internet" id="nedm-survey-browse-internet-yes" value="Teachers and students will be allowed to browse the Internet from the IFPs" checked="checked"><span class="form-check-input-text"><?php _e('Yes', 'framework') ?></span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-browse-internet" id="nedm-survey-browse-internet-no" value="Teachers and students will NOT be allowed to browse the Internet from the IFPs"><span class="form-check-input-text"><?php _e('No', 'framework') ?></span>
        </label>
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <label>Should teachers and students be able to share their device’s screen to the IFPs?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-teacher-share" id="nedm-survey-teacher-share-yes" value="Teachers and students will be able to share their device’s screen to the IFPs" checked="checked"><span class="form-check-input-text"><?php _e('Yes', 'framework') ?></span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-teacher-share" id="nedm-survey-teacher-share-no" value="Teachers and students will NOT be able to share their device’s screen to the IFPs"><span class="form-check-input-text"><?php _e('No', 'framework') ?></span>
        </label>
      </div>
    </div>
    <div class="form-group row">
      <div class="form-check col-md-6">
        <label for="nedm-survey-total-sharing"><?php _e('How many classrooms with device screen sharing capabilities will there be?', 'framework') ?></label>
        <input type="text" class="form-control" name="nedm-survey-total-sharing" id="nedm-survey-total-sharing" value="<?php echo $totalSharing; ?>">
      </div>
      <div class="form-check col-md-6">
        <label>Will wired devices such as desktops be expected to share their screen on the IFPs?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-wired-sharing" id="nedm-survey-wired-sharing-yes" value="Wired devices such as desktops will be expected to share their screen on the IFPs" checked="checked"><span class="form-check-input-text"><?php _e('Yes', 'framework') ?></span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-wired-sharing" id="nedm-survey-wired-sharing-no" value="Wired devices such as desktops will NOT be expected to share their screen on the IFPs"><span class="form-check-input-text"><?php _e('No', 'framework') ?></span>
        </label>
      </div>
    </div>
  </div>
</div>

<div class="row group-row">
  <div class="col-md-6">
    <h2><strong>You're just about done, just a few more questions to go.</strong></h2>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <div class="form-check">
        <label>Will your school be leveraging automatic updates for IFP firmware/software? </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-automatic-updates" id="nedm-survey-automatic-updates-yes" value="The school will be leveraging automatic updates for IFP firmware/software" checked="checked"><span class="form-check-input-text"><?php _e('Yes', 'framework') ?></span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-automatic-updates" id="nedm-survey-automatic-updates-no" value="The school will NOT be leveraging automatic updates for IFP firmware/software"><span class="form-check-input-text"><?php _e('No', 'framework') ?></span>
        </label>
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <label>Does your school have a tool/tools deployed in the environment that can profile traffic by type and bandwidth?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-traffic-tool" id="nedm-survey-traffic-tool-yes" value="The school does have tools deployed in the environment that can profile traffic by type and bandwidth" checked="checked"><span class="form-check-input-text"><?php _e('Yes', 'framework') ?></span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-traffic-tool" id="nedm-survey-traffic-tool-no" value="The school does NOT have tools deployed in the environment that can profile traffic by type and bandwidth"><span class="form-check-input-text"><?php _e('No', 'framework') ?></span>
        </label>
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <label>If available, are you willing to share some of the reporting with us in order have better visibility into possible bottlenecks or configuration challenges?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-report-sharing" id="nedm-survey-report-sharing-yes" value="The school is willing to share some of the reporting" checked="checked"><span class="form-check-input-text"><?php _e('Yes', 'framework') ?></span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-report-sharing" id="nedm-survey-report-sharing-no" value="The school is NOT willing to share some of the reporting"><span class="form-check-input-text"><?php _e('No', 'framework') ?></span>
        </label>
      </div>
    </div>
  </div>
</div>

<div class="row group-row">
  <div class="col-md-6">
    <h2><strong>Say goodbye to legacy hardware.</strong></h2>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <div class="form-check">
        <span class="errormsg"><?php echo $cloudgenixDeviceError; ?></span>
        <label>To better understand the advantages of a software-defined wide area network (SD-WAN). It is best to have a network device from Cloudgenix, monitor and leverage innovative application and network performance monitoring tools, so our IT staff can quickly discover, isolate, and solve problems that negatively impact network performance. </label>
        <label class="form-check-label">
          <input class="form-check-input <?php echo $cloudgenixClassError; ?>" type="radio" name="nedm-survey-cloudgenix-device" id="nedm-survey-cloudgenix-device-yes" value="I agree to have a SD-WAN device placed on our internal network"><span class="form-check-input-text"><?php _e('I agree', 'framework') ?></span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input <?php echo $cloudgenixClassError; ?>" type="radio" name="nedm-survey-cloudgenix-device" id="nedm-survey-cloudgenix-device-no" value="I do not wish to have a SD-WAN device placed on our internal network"><span class="form-check-input-text"><?php _e('I disagree', 'framework') ?></span>
        </label>
      </div>
    </div>
  </div>
</div>

<div class="row group-row">
  <div class="col-md-6">
    <img src="../consulting-services/public/images/network-enabled-form-report-image.jpg" alt="SD-WAN utilization reporting" class="full" />
  </div>
  <div class="col-md-6 padding">
    <label>Please take a second to read over <a href="#">Teq's network consulation terms</a> and agree to placing a network device on our WAN monitoring purposes only.</label>
    <a href="#"><button class="button sm nedm-button">Download a Sample Report</button></a>
  </div>
</div>

<div class="row group-row">
  <div class="col-md">
    <input type="hidden" name="submitted" id="submitted" value="true" />
    <?php wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>
    <button type="submit" value="submit" id="submit-survey">Find your solution now</button>
  </div>
</div>

</form>
</div></div></div>

<?php get_template_part( 'lib/nedm-survey-post-footer' ); ?>
