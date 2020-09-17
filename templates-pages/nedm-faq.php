<?php
/**
 * Template Name: Network-Enabled Device Management Frequently Asked Questions
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
 get_template_part( 'lib/nedm-survey-post-header' ); wp_reset_query(); the_content();
?>

<nav id="mainNav">
  <div id="navMain" class="container-fluid navbar-toggleable-sm">
    <ul class="nav navbar-nav">
      <li class="nav-item">
        <a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/_img/teq-logo-icon.svg" class="mainLogo" /><span class="h5
          ">Network-Enable Device Management</span></a>
      </li>
    </ul>
  </div>
</nav>
<script type="text/javascript">
$(document).ready(function(){
  "use strict";
  $("div.faq-accordion").each(function () {
    var faqId = $(this).find("div").attr('id')
    $(this).find("a.question").attr({ 'href' : '#' + faqId, 'aria-controls' : faqId, 'data-toggle' : 'collapse', 'aria-expanded' : 'false' });
  });
});

</script>

<div class="container padding-top padding-bottom"><div class="row"><div class="col padding-bottom">

  <div id="ifp-faq" class="container-fluid padding-bottom parallax">
        <div class="container">
        <div class="row padding-top">
          <div class="col-md">
            <h2><strong>Frequently Asked Network Questions</strong></h2>
            <h5>Because every school/district is different in their varying levels of devices and needs, most don't realize the drastic impact a few network devices can have on your existing setup. Communication through networks can be done through software and hardware. The data is exchanged via data links. The links might be either wired media or wireless media. The possibilities can be infinite. Below you can find a general list of troubleshooting questions to get you started:</h5>
          </div>
        </div>
        <div class="row faq-accordion-container">
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">Is there anything my school can do ahead of time to be prepared to optimally use all the features and functionality of our new IFP?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-1.svg" />
              </h6>
              <div class="collapse" id="collapseOne">
                <p>Yes. Prior to installation of your new interactive flat panels, it helps to think of a few things that will ensure smooth deployment. For example, connecting your IFPs to a 5 Ghz 802.11ac network will yield the best results when performing functions that require consistent bandwidth and low latency. Screen duplication (I.E. Cast or AirPlay) is a very useful and commonly used feature which will benefit from having clients and IFP modules connected to the same physical wireless access point whenever possible and having all those devices be on the same VLAN/ Subnet.</p>
                <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">Is there a URL whitelist and a list of network ports/ protocols that can be referenced?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-2.svg" />
              </h6>
              <div class="collapse" id="collapseTwo">
                <p>Yes, the following information can be found at: <a href="https://support.smarttech.com/docs/software/iq/en/configuring/connecting-to-a-network.cshtml">https://support.smarttech.com/docs/software/iq/en/configuring/connecting-to-a-network.cshtml</a></p>
                <p>This includes a description of what port/ protocol is used for as well as which URLs are for connected services. </p>
                <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">Is there a network impact associated with deploying many IFPs?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-default.svg" />
              </h6>
              <div class="collapse" id="collapseThree">
                <p>No, in most environments impact should be negligible. In specific cases, depending on customer equipment and network topology, below are some guidelines to follow:</p>
                <p>Treat each IFP as a tablet or Chromebook, for example, in terms of possible bandwidth consumption. Given the nature of these types of devices, bandwidth profiles are usually limited to a few 100 KB to several MBs based on application. For additional reference material, please visit the following URL: <br /><a href="https://support.smarttech.com/docs/software/iq/en/configuring/connecting-to-a-network.cshtml">https://support.smarttech.com/docs/software/iq/en/configuring/connecting-to-a-network.cshtml</a></p>
                <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">What is the potential security impact of deploying IFPs to the classroom? </a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-3.svg" />
              </h6>
              <div class="collapse" id="collapseFour">
                <p>Due to SMART IFP interactive modules being based on highly secured custom configured hardened operating systems, that only provide access to secure content, the security impact and risk exposure is minimal.  You can manage IFP content security by taking advantage of the ability to add your proxy server/content filter to the IFP’s wireless configuration.</p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">Is managing software and firmware updates across my IFPs difficult?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-4.svg" />
              </h6>
              <div class="collapse" id="collapseFive">
                <p>Provided that the correct URLs are whitelisted on your network firewall or security appliance (please refer to question two), updates to both software and firmware components occur automatically and will have little to no impact on network performance. </p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">Is my Kapp IQ vulnerable to the latest security threats?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-6.svg" />
              </h6>
              <div class="collapse" id="collapseSix">
                <p>Yes. All ARM-based architecture and x86-based architecture is vulnerable. However, the risk is mitigated by first-party-managed security updates to the operating system and included modules.</p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">What is the basic software architecture and security model of a current generation Kapp IQ module?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-7.svg" />
              </h6>
              <div class="collapse" id="collapseSeven">
                <p>The software architecture of a current generation Kapp IQ module is Android based with SElinux modules used. Developer access is locked down for safety even with physical access to the panel and/or module.</p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">Can I directly connect my interactive flat panel via hardwire ethernet?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-8.svg" />
              </h6>
              <div class="collapse" id="collapseEight">
                <p>Yes, all current IFP models support hardwire ethernet connectivity with limited proxy configuration capability.</p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">If I am connecting via hardwire ethernet, how can I filter content for users on my panel?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-9.svg" />
              </h6>
              <div class="collapse" id="collapseNine">
                <p>To filter content for users on your panel, you will need to use an in-line content filtering solution to protect users.</p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">Can I use my interactive flat panel to play back copy protected content? (E.g., DVDs and blu-rays)</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-10.svg" />
              </h6>
              <div class="collapse" id="collapseTen">
                <p>Yes, SMART IFPs are fully compatible with HDCP 1.4 profile.</p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">Does my interactive flat panel have access to a public app store such as Google Play?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-11.svg" />
              </h6>
              <div class="collapse" id="collapseEleven">
                <p>No, application delivery is provided, maintained, and secured by SMART. The applications on the panel are secured and limited to educational content.</p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">Can apps be side loaded to my IFP?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-12.svg" />
              </h6>
              <div class="collapse" id="collapseTwelve">
                <p>No, current architecture and security prevents unauthorized apps being loaded via USB or downloaded over the network.</p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">Do I require additional third-party MDM services?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-13.svg" />
              </h6>
              <div class="collapse" id="collapseThirteen">
                <p>No, application and device management is provided first party through SMART’s secured content delivery network.</p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">Will my SMART IFP and Kapp IQ module automatically stay updated with the latest security and feature functionality updates?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-14.svg" />
              </h6>
              <div class="collapse" id="collapseFourteen">
                <p>Yes. Please refer to this article for details: <a href="https://support.smarttech.com/docs/software/iq/en/configuring/connecting-to-a-network.cshtml">https://support.smarttech.com/docs/software/iq/en/configuring/connecting-to-a-network.cshtml</a></p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">How can I prevent automatic updates during blackout periods or specific times of the day?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-15.svg" />
              </h6>
              <div class="collapse" id="collapseFifteen">
                <p>To prevent automatic updates, utilize a whitelist/blacklist configuration to allow or disallow updates. Please refer to this article for details: <a href="https://support.smarttech.com/docs/software/iq/en/configuring/connecting-to-a-network.cshtml">https://support.smarttech.com/docs/software/iq/en/configuring/connecting-to-a-network.cshtml</a></p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">If I choose to leave automatic updates turned on and allowed, when will the updates be pushed?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-16.svg" />
              </h6>
              <div class="collapse" id="collapseSixteen">
                <p>Updates typically occur in the evening after the school day is over.</p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">Will my network be affected while taking updates to my IFP and Kapp IQ modules?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-17.svg" />
              </h6>
              <div class="collapse" id="collapseSeventeen">
                <p>Updates to the IFP and Kapp IQ module consume negligible bandwidth and will not impact your network.</p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">Are the IFP or Kapp IQ modules susceptible to corruption due to an incomplete or corrupted update image?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-18.svg" />
              </h6>
              <div class="collapse" id="collapseEighteen">
                <p>No, all operating system update bits are verified before being applied. The update is downloaded, verified, and then deployed. </p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">What screen duplication technology is available for IFPs and Kapp IQ Modules?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-19.svg" />
              </h6>
              <div class="collapse" id="collapseNineteen">
                <p>Google Cast, Apple Airplay, and Miracast are available for screen duplication.</p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">Will I need to purchase or download any additional software to utilize screen duplication on the interactive flat panel?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-20.svg" />
              </h6>
              <div class="collapse" id="collapseTwenty">
                <p>No. Google Cast, Apple Airplay, and Miracast technology are built into the panel.</p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">Is there a way to prevent students from screen sharing onto the interactive flat panel?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-21.svg" />
              </h6>
              <div class="collapse" id="collapseTwentyone">
                <p>To establish a screen duplication session, the Kapp IQ module must be running the screen sharing app or clients will not be able to connect.</p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">Is connecting my Chromebook, laptop, etc. to my interactive flat panel with an HDMI or display port cable the same as casting my screen?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-22.svg" />
              </h6>
              <div class="collapse" id="collapseTwentytwo">
                <p>No. When you connect to the panel using an HDMI or Display Port cable, you are establishing a direct connection with no involvement in the network infrastructure. Screen casting is a remote connection that utilizes network infrastructure components.</p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">What is the optimal Wi-Fi spec and revision to use with my new interactive flat panel?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-23.svg" />
              </h6>
              <div class="collapse" id="collapseTwentythree">
                <p>Currently, a 802.11AC 5Ghz network would be optimal for leveraging all of the features within the IFP and Kapp IQ Module. </p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">Can I use vendor-specific technology to get around the limitations of a single VLAN deployment for screen casting?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-24.svg" />
              </h6>
              <div class="collapse" id="collapseTwentyfour">
                <p>Yes - however, success will vary based on vendor equipment, current firmware revision, and deployment topology.</p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">I am experiencing intermittent connectivity problems with features such as web browsing, automatic updating, and screen casting. What could be causing this?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-25.svg" />
              </h6>
              <div class="collapse" id="collapseTwentyfive">
                <p>Wireless network congestion, wireless access point interference, network latency, and response time can all be factors in your overall experience.</p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">For wireless-connected interactive flat panels, what is the best practice for interacting with client devices?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-26.svg" />
              </h6>
              <div class="collapse" id="collapseTwentysix">
                <p>The most ideal configuration would have client devices and IFPs on the same VLAN, and where possible, the same access point. When displaying full motion video or casting full HD content, these are the most impactful deployment choices.</p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faq-accordion">
              <h6>
                <a class="question">I recently had interactive flat panels installed and they are not connecting to the network. What can I try to fix this?</a>
                <img src="../../consulting-services/public/images/network-enabled-faq-icon-27.svg" />
              </h6>
              <div class="collapse" id="collapseTwentyseven">
                <p>For best results, it is recommended that your Kapp IQ be at the latest firmware build, if possible.</p>
              <p class="lead text-right"><a class="question"><span>&times;</span></a></p>
              </div>
            </div>
          </div>

        </div>
        </div>
      </div>

</div></div></div>

<?php get_template_part( 'lib/nedm-survey-post-footer' ); ?>
