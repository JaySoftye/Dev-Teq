<?php
/**
 * Default Custom Post Type - NEDM Survey Template
 * Description: Post template with a content container.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulting Services</title>

    <link rel="stylesheet" href="/consulting-services/public/css/bootstrap.css" />
    <link rel="stylesheet" href="/consulting-services/public/css/main.css" />
    <!-- Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </head>

<body>

<?php
  global $wp_query;
    $postid = $wp_query->post->ID;
  wp_reset_query();
?>

<div class="container-fluid">

  <div class="row">
    <div class="col-md-4 nedm-bg padding">
      <section class="padding-left padding-top">
        <h3 class="white"><strong><?php echo get_post_meta( $post->ID, 'firstName', true );?> <?php echo get_post_meta( $post->ID, 'lastName', true ); ?></strong></h3>
        <h6 class="white"><?php echo get_post_meta( $post->ID, 'titleRole', true ); ?><br /><?php echo get_post_meta( $post->ID, 'contactPhone', true ); ?><br /><?php echo get_post_meta( $post->ID, 'contactEmail', true ); ?></h6>
      </section>
    </div>
    <div class="col-md-8 gray-bg padding">
      <section class="row padding-right padding-top">
        <article class="col-md-4">
          <img src="/consulting-services/public/images/ConsultingServices_network-enabled-survey.svg" class="full" />
        </article>
      </section>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 nedm-bg">
      <section class="padding-left ">
        <h1 class="white"><strong><?php the_title();?></strong></h1>
        <table class="table">
          <tbody>
            <tr>
              <td class="white"><?php echo get_post_meta( $post->ID, 'reportSharing', true ); ?></td>
            </tr>
            <tr>
              <td class="white"><?php echo get_post_meta( $post->ID, 'cloudgenixDevice', true ); ?></td>
            </tr>
          </tbody>
        </table>
      </section>
    </div>
    <div class="col-md-8 gray-bg padding-bottom">
      <section class="row nedm-data-container padding-right">
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Total client devices on the network</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'totalDevices', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Our most prevalent device vendor(s) are:</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'deviceVendor', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h2><?php echo get_post_meta( $post->ID, 'connection', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h2><?php echo get_post_meta( $post->ID, 'proxyConnectivity', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h2><?php echo get_post_meta( $post->ID, 'wpadImplemented', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h2><?php echo get_post_meta( $post->ID, 'filterFirewall', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Highest wireless standard supported</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'wirelessStandard', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Vendor of Firewall</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'vendorType', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Broadcasting Speed</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'schoolBroadcasting', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Average Density of clients per access point</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'averageDensity', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Enabled Technology</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'technologyEnabled', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Access points deployed in each build</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'pointsDeployed', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h2><?php echo get_post_meta( $post->ID, 'vlanTagging', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Wireless Security implemented</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'wirelessSecurity', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Policies defined and enabled on the LAN</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'wmmQos', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Available IP addresses in the currently DHCP scope</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'totalIp', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h2><?php echo get_post_meta( $post->ID, 'sameVlan', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h2><?php echo get_post_meta( $post->ID, 'hdcpContent', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h2><?php echo get_post_meta( $post->ID, 'browseInternet', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h2><?php echo get_post_meta( $post->ID, 'teacherShare', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Total classroom with device screen sharing abilities</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'totalSharing', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h2><?php echo get_post_meta( $post->ID, 'wiredSharing', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h2><?php echo get_post_meta( $post->ID, 'automaticUpdates', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h2><?php echo get_post_meta( $post->ID, 'trafficTool', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Devices connecting to the IFP</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'deviceConnecting', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Approximate Age of the Systems</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'approxAge', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Processor Type</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'processorType', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Operating System</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'operatingSystem', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Dedicated graphics hardware or Onboard?</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'dedicatedGraphics', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Are there free display ports?</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'freeDisplay', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Using USB Graphics?</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'usbGraphics', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Graphics Adapter</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'graphicsAdapter', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Available USB ports on the computer</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'availableUsb', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Type of USB</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'usbType', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Mirroring or Cloning a primary display or extended desktop?</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'mirroringCloning', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Desktop Resolution</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'desktopResolution', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>IFP to Computer Connection</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'connectedResolution', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Display 4k Content?</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'displaying4k', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Using the built-in browser or connected computer?</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'builtinBrowser', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Systems connected to the IFP part of the Windows Domain</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'connectedDomain', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Group Policy to prevent users from changing display?</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'groupPolicy', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>Multiple Users logging into the computer?</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'multipleUsers', true ); ?></h2>
            </div>
          </div>
        </article>
        <article class="col-md-4 nedm-data">
          <div class="card nedm-data-field">
            <div class="card-body">
              <h6 class="nedm-text"><strong>User Permissions for every user?</strong></h6>
              <h2><?php echo get_post_meta( $post->ID, 'userPermissions', true ); ?></h2>
            </div>
          </div>
        </article>

      </section>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 nedm-bg">
      <section class="padding-left padding-top padding-bottom">
        <img src="/consulting-services/public/images/ConsultingServices_teq-footer-logo.svg" class="full" />
        <p class="white">7 Norden Lane<br />Huntington Station, NY 11746<br />877.455.9369 | <a href="mailto:info@teq.com" class="white">info@teq.com</a></p>
        <p class="white"><a href="http://www.teq.com" class="white">Teq.com</a> | <a href="http://opd-dev.teq.com/" class="white">OnlinePD.teq.com</a></p>
      </section>
    </div>
    <div class="col-md-8 gray-bg">
      <section class="row padding-right padding-top padding-bottom">
        <article class="col-md-4">
          <img src="/consulting-services/public/images/ConsultingServices_footer-logo.svg" class="full" />
          <p>Teq Consulting Services<br />Network-Enabled Device Management</p>
          <p>877.455.9369| <a href="http://opd-dev.teq.com/" class="nedm-text">OnlinePD.teq.com</a></p>
        </article>
      </section>
    </div>
  </div>

</div>



<?php wp_footer(); ?>
</body>
</html>
