<?php
/**
 * Default Post Type - Category: SMART
 * Description: Post template with a content container for SMART Category
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_template_part('lib/iblocks-header');
  global $wp_query;
    $postid = $wp_query->post->ID;
?>

<section id="postContent">

  <?php wp_reset_query(); ?>

  <div class="container">
    <div class="col padding-top">
      <h1 class="display-4 text-center"><strong><?php the_title();?></strong></h1>
    </div>
  </div>
  <div class="container">
    <div class="row padding-top">
      <div class="col-md-2"></div>
      <div class="col-md-8">
          <?php the_content(); ?>
      </div>
      <div class="col-md-2"></div>
    </div>
    <div class="row padding-top">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <h4>Interested in the <strong><?php the_title();?></strong> for your school or classroom? Request a quote using the form below.</h4>
        <hr />
      </div>
      <div class="col-md-2"></div>
    </div>
    <div class="row padding-bottom">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="hs-form-container">
<!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
  hbspt.forms.create({
	portalId: "182596",
	formId: "d432fad1-0dad-46b9-bef3-371dd28ea0bb"
});
</script>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>

</section>

<footer>
  <div class="container-fluid">
    <nav class="row align-items-end">
      <ul class="col-md nav">
        <li class="nav-item">
          <h2><strong>For Site Assistance Please Contact:<br />877.455.9369</strong></h2>
          <div class="form-search-container">
            <div class="form">
              <input type="text" name="pagelist" placeholder="search through our product options here" class="ajax-search_text form-search">
              <div class="ajax-result"></div>
            </div>
          </div>
        </li>
      </ul>
      <ul class="col-md nav justify-content-end">
        <li class="nav-item">
          <small>© Copyright 2017 All rights reserved. Tequipment, Inc.<br />7 Norden Lane | Huntington Station, NY 11746</small>
        </li>
      </ul>
    </nav>
  </div>
</footer>

<script type="text/javascript">
  jQuery(document).ready(function($){
  });
</script>

<script src="<?php echo get_template_directory_uri();?>/js/teqCustom-scripts.js"></script>
<?php get_footer(); wp_footer(); ?>

</body>
</html>
