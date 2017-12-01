<?php
/**
 * Template Name: Network-Enabled Device Management
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
 get_template_part( 'lib/nedm-survey-post-header' );

 if (isset($_POST['submitted'])) {
  if (trim( $_POST['nedm-survey-school-name']) === '' ) {
    $schoolNameError = 'is required';
    $schoolClassError = 'errorfield';
    $hasError = true;
   } else {
     $hasError = false;
   }
 }

 wp_reset_query();
  the_content();
?>

<div class="container"><div class="row"><div class="col">
<form action="#" method="POST" id="nedm-survey" <?php do_action('post_edit_form_tag'); ?> enctype="multipart/form-data">

<div class="form-group">
  <?php if ($hasError == true ) { ?>
  <h4 class="error"><img src="../consulting-services/public/images/network-enabled-form-error-icon.svg" alt="" /> Oops, it appears you forgot a few items, please fill in the missing fields below and resubmit.</h4>
  <?php } ?>
</div>

<div class="row">
  <div class="col-md-6">
    <h2><strong>Let’s start with some basic information about you.</strong></h2>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="nedm-survey-first-name">First Name</label>
      <input type="text" class="form-control" name="nedm-survey-first-name" id="nedm-survey-first-name">
    </div>
    <div class="form-group">
      <label for="nedm-survey-last-name">Last Name</label>
      <input type="text" class="form-control" name="nedm-survey-last-name" id="nedm-survey-last-name">
    </div>
    <div class="form-group">
      <label for="nedm-survey-title-role">Title or Role</label>
      <select class="form-control" name="nedm-survey-title-role" id="nedm-survey-title-role">
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
      <label for="nedm-survey-school-name">School <span class="errormsg"><?php echo $schoolNameError; ?></span></label>
      <input type="text" class="form-control <?php echo $schoolClassError; ?>" name="nedm-survey-school-name" id="nedm-survey-school-name">
    </div>
    <div class="form-group">
      <label for="nedm-survey-contact-phone">Phone</label>
      <input type="phone" class="form-control" name="nedm-survey-contact-phone" id="nedm-survey-contact-phone">
    </div>
    <div class="form-group">
      <label for="nedm-survey-contact-email">Email</label>
      <input type="phone" class="form-control" name="nedm-survey-contact-email" id="nedm-survey-contact-email">
    </div>
  </div>
</div>

<div class="row group-row">
  <div class="col-md-6">
    <h2><strong>Let’s talk about your school or district network setup.</strong></h2>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="nedm-survey-total-devices">What is total number of client devices on your network?</label>
      <input type="text" class="form-control" name="nedm-survey-total-devices" id="nedm-survey-total-devices">
    </div>
    <div class="form-group">
      <label for="nedm-survey-device-vendor">Is there a device vendor that is more prevalent? (Apple, Google, Microsoft etc.)</label>
      <input type="text" class="form-control" name="nedm-survey-device-vendor" id="nedm-survey-device-vendor">
    </div>
    <div class="form-group row">
      <div class="form-check col-md-6">
        <label>How will the IFPs be connecting to the network?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-connection" id="nedm-survey-wired-connection" value="Wired connection"><span class="form-check-input-text">Wired</span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-connection" id="nedm-survey-wireless-connection" value="Wireless connection"><span class="form-check-input-text">Wireless</span>
        </label>
      </div>
    </div>
    <div class="form-group row">
      <div class="form-check col-md-6">
        <label>Is your school using a proxy for connectivity and content filtering?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-proxy-connectivity" id="nedm-survey-proxy-connectivity-yes" value="A proxy is being used for connectivity and content filtering"><span class="form-check-input-text">Yes</span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-proxy-connectivity" id="nedm-survey-proxy-connectivity-no" value="A proxy is NOT being used for connectivity and content filtering?"><span class="form-check-input-text">No</span>
        </label>
      </div>
      <div class="form-check col-md-6">
        <label>Is WPAD implemented?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-wpad-implemented" id="nedm-survey-wpad-implemented-yes" value="WPAD is implemented"><span class="form-check-input-text">Yes</span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-wpad-implemented" id="nedm-survey-wpad-implemented-no" value="WPAD is NOT implemented"><span class="form-check-input-text">No</span>
        </label>
      </div>
    </div>
    <div class="form-group row">
      <div class="form-check col-md-6">
        <label>Is there an In-Line content filter or firewall deployed?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-filter-firewall" id="nedm-survey-filter-firewall-yes" value="There is an In-Line content filter or firewall deployed"><span class="form-check-input-text">Yes</span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-filter-firewall" id="nedm-survey-filter-firewall-no" value="There is NOT an In-Line content filter or firewall deployed"><span class="form-check-input-text">No</span>
        </label>
      </div>
      <div class="form-check col-md-6">
        <label for="nedm-survey-vendor-type">What vendor or type?</label>
        <input type="text" class="form-control" name="nedm-survey-vendor-type" id="nedm-survey-vendor-type">
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
        <label for="nedm-survey-wireless-standard">Highest wireless standard supported? </label>
        <select class="form-control" name="nedm-survey-title-role" id="nedm-survey-wireless-standard">
          <option value="" selected disabled></option>
          <option value="802.11g">802.11g</option>
          <option value="802.11n">802.11n</option>
          <option value="802.11ac">802.11ac</option>
        </select>
      </div>
      <div class="form-check col-md-6">
        <label>Is your school currently broadcasting?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-school-broadcasting" id="nedm-survey-school-broadcasting-two" value="2.5Ghz"><span class="form-check-input-text">2.4Ghz</span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-school-broadcasting" id="nedm-survey-school-broadcasting-five" value="5Ghz"><span class="form-check-input-text">5Ghz</span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-school-broadcasting" id="nedm-survey-school-broadcasting-both" value="both"><span class="form-check-input-text">Both</span>
        </label>
      </div>
    </div>
    <div class="form-group">
      <label for="nedm-survey-average-density">Average density of clients per access point?</label>
      <input type="text" class="form-control" name="nedm-survey-average-density" id="nedm-survey-average-density">
    </div>
    <div class="form-group">
      <label for="nedm-survey-technology-enabled">What feature technology is enabled if any? (Band steering, Airtime Fairness, Min. RSSI values etc.)</label>
      <input type="text" class="form-control" name="nedm-survey-technology-enabled" id="nedm-survey-technology-enabled">
    </div>
    <div class="form-group">
      <label for="nedm-survey-points-deployed">How many access points are deployed in each build?</label>
      <input type="text" class="form-control" name="nedm-survey-points-deployed" id="nedm-survey-points-deployed">
    </div>
    <div class="form-group row">
      <div class="form-check col-md-6">
        <label>Is VLAN tagging at the SSID part of your deployment?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-vlan-tagging" id="nedm-survey-vlan-tagging-yes" value="VLAN tagging is part of the SSID part of your deployment"><span class="form-check-input-text">Yes</span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-vlan-tagging" id="nedm-survey-vlan-tagging-no" value="VLAN tagging is NOT part of the SSID part of your deployment"><span class="form-check-input-text">No</span>
        </label>
      </div>
    </div>
    <div class="form-group">
      <label for="nedm-survey-wireless-security">What type of wireless security is being implemented at your school? (WEP, WPA/WPA2, WPA Enterprise etc.)</label>
      <input type="text" class="form-control" name="nedm-survey-wireless-security" id="nedm-survey-wireless-security">
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
          <input class="form-check-input" type="radio" name="nedm-survey-wmm-qos" id="nedm-survey-wmm-qos-yes" value="WMM and/or QoS policies are defined and/or enabled on my LAN"><span class="form-check-input-text">Yes</span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-vlan-tagging" id="nedm-survey-wmm-qos-no" value="WMM and/or QoS policies are NOT defined and/or enabled on my LAN"><span class="form-check-input-text">No</span>
        </label>
      </div>
    </div>
    <div class="form-group row">
      <div class="form-check col-md-6">
        <label for="nedm-survey-total-ip">How many IP addresses are available in the current DHCP scope?</label>
        <input type="text" class="form-control" name="nedm-survey-total-ip" id="nedm-survey-total-ip">
      </div>
      <div class="form-check col-md-6">
        <label>Will the client devices and IFP be on the same VLAN?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-same-vlan" id="nedm-survey-same-vlan-yes" value="Client devices and IFP's will be on the same VLAN"><span class="form-check-input-text">Yes</span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-same-vlan" id="nedm-survey-same-vlan-no" value="Client devices and IFP's will NOT be on the same VLAN"><span class="form-check-input-text">No</span>
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
          <input class="form-check-input" type="radio" name="nedm-survey-hdcp-content" id="nedm-survey-hdcp-content-yes" value="The IFPs will be used to play HDCP content"><span class="form-check-input-text">Yes</span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-hdcp-content" id="nedm-survey-hdcp-content-no" value="The IFPs will NOT be used to play HDCP content"><span class="form-check-input-text">No</span>
        </label>
      </div>
      <div class="form-check col-md-6">
        <label>Will teachers and students be allowed to browse the Internet from the IFPs?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-browse-internet" id="nedm-survey-browse-internet-yes" value="Teachers and students will be allowed to browse the Internet from the IFPs"><span class="form-check-input-text">Yes</span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-browse-internet" id="nedm-survey-browse-internet-no" value="Teachers and students will NOT be allowed to browse the Internet from the IFPs"><span class="form-check-input-text">No</span>
        </label>
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <label>Should teachers and students be able to share their device’s screen to the IFPs?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-teacher-share" id="nedm-survey-teacher-share-yes" value="Teachers and students will be able to share their device’s screen to the IFPs"><span class="form-check-input-text">Yes</span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-teacher-share" id="nedm-survey-teacher-share-no" value="Teachers and students will NOT be able to share their device’s screen to the IFPs"><span class="form-check-input-text">No</span>
        </label>
      </div>
    </div>
    <div class="form-group row">
      <div class="form-check col-md-6">
        <label for="nedm-survey-total-sharing">How many classrooms with device screen sharing capabilities will there be?</label>
        <input type="text" class="form-control" name="nedm-survey-total-sharing" id="nedm-survey-total-sharing">
      </div>
      <div class="form-check col-md-6">
        <label>Will wired devices such as desktops be expected to share their screen on the IFPs?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-wired-sharing" id="nedm-survey-wired-sharing-yes" value="Wired devices such as desktops will be expected to share their screen on the IFPs"><span class="form-check-input-text">Yes</span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-wired-sharing" id="nedm-survey-wired-sharing-no" value="Wired devices such as desktops will NOT be expected to share their screen on the IFPs"><span class="form-check-input-text">No</span>
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
          <input class="form-check-input" type="radio" name="nedm-survey-automatic-updates" id="nedm-survey-automatic-updates-yes" value="The school will be leveraging automatic updates for IFP firmware/software"><span class="form-check-input-text">Yes</span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-automatic-updates" id="nedm-survey-automatic-updates-no" value="The school will NOT be leveraging automatic updates for IFP firmware/software"><span class="form-check-input-text">No</span>
        </label>
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <label>Does your school have a tool/tools deployed in the environment that can profile traffic by type and bandwidth?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-traffic-tool" id="nedm-survey-traffic-tool-yes" value="The school does have tools deployed in the environment that can profile traffic by type and bandwidth"><span class="form-check-input-text">Yes</span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-traffic-tool" id="nedm-survey-traffic-tool-no" value="The school does NOT have tools deployed in the environment that can profile traffic by type and bandwidth"><span class="form-check-input-text">No</span>
        </label>
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <label>If available, are you willing to share some of the reporting with us in order have better visibility into possible bottlenecks or configuration challenges?</label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-report-sharing" id="nedm-survey-report-sharing-yes" value="The school is willing to share some of the reporting"><span class="form-check-input-text">Yes</span>
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="nedm-survey-report-sharing" id="nedm-survey-report-sharing-no" value="The school is NOT willing to share some of the reporting"><span class="form-check-input-text">No</span>
        </label>
      </div>
    </div>
  </div>
</div>

<div class="row group-row">
  <div class="col-md-6">
    <img src="../consulting-services/public/images/network-enabled-form-report-image.jpg" alt="SD-WAN utilization reporting" class="full" />
  </div>
  <div class="col-md-6">
    <h2><strong>Say goodbye to legacy hardware.</strong></h2>
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
