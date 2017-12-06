<?php
/**
 * Template Name: Network-Enabled Device Management - Confirmation
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
 get_template_part( 'lib/nedm-survey-post-header' ); wp_reset_query(); the_content();
?>

<div class="container-fluid nedm-confirmed padding-top padding-bottom">
  <div class="container">

    <div class="row padding-top padding-bottom">
      <div class="col-md-2"></div>
      <div class="col-md card">
        <div class="row card-body">
          <div class="col-md nedm-pricing">
            <img class="confirmation-level" src="/consulting-services/public/images/nedm-survey-submit-success.svg" alt="" />
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            	 viewBox="0 0 500 100" style="enable-background:new 0 0 500 100;" xml:space="preserve">
              <polyline class="path-three" style="stroke:#000000;fill:#FFFFFF;stroke-width:1;stroke-miterlimit:10;" points="66.526,30.916 109,30.916 109,61.399 252.936,61.399 252.936,87.424 310.333,87.424 310.333,65.366
               	393,65.366 393,92.503 440.247,92.503 "/>
            </svg>
          </div>
        </div>
        <div class="row card-body">
          <div class="col-md text-center padding">
            <h1><strong>Thank you for your submission</strong></h1>
            <p>Your survey information has been sent to your Networking Consulting team for evaluation. A throughout check on the information provided usually takes between 3-5 business days, during which time we will be constructing a detailed report for your review.</p>
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>

  </div>
</div>

<?php get_template_part( 'lib/nedm-survey-post-footer' ); ?>
