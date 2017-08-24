<?php
/**
 * Template Name: Learning Community Teq Tips
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); get_template_part( 'navigation', 'default' ); ?>
</nav>

<main>
  <div class="container nopadding padding-top">
    <section>
      <div class="row">
        <div class="col-sm text-center">
          <p><a href="<?php echo get_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/_img/teq-tips-logo-icon.svg" class="halfWidth" /></a></p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm">

			  <?php

          $the_query = new WP_Query( array(
            'posts_per_page'  => '1',
            'post_type'       => 'Teq-Tips'
          ));

            while ($the_query -> have_posts()) : $the_query -> the_post();
        ?>

        <article>
          <h1><strong><?php the_title(); ?></strong></h1>
          <h6><?php the_excerpt(); ?></h6>
            <div class="videoTeqTip">
              <?php the_content(); ?>
            </div>
        </article>

          <?php endwhile; wp_reset_postdata(); ?>

        </div>
      </div>
    </section>
  </div>
</main>

<div class="container padding-top padding-bottom">

  <div class="row">
    <div class="col-md-6">
      <p><img src="<?php echo get_template_directory_uri(); ?>/_img/teq-tips-were-all-about-learning.svg" /></p>
    </div>
  </div>

  <div class="row">
    <div class="col-md">
      <h6>Teq Tips hosts an entire library of useful classroom videos. Our primary goal is to delivery state of the art instructional technology tips perfect for the modern classroom. Feel free to search for a specific subject matter or product using the form below.</h6>
      <div class="form-group">
        <input type="text" name="pagelist" placeholder="enter your search term here" class="ajax-search_text form-control">
        <i class="loader-text"><img src="<?php echo get_template_directory_uri(); ?>/_img/teq-tips-loading-icon.gif" />Loading..</i>
      </div>
    </div>
  </div>

  <div class="row ajax-result"></div>

</div>

<div class="container-fluid padding" style="background-image: linear-gradient(to top right, #eceeef, #d8dbdc);">
<div class="container padding-bottom">
  <h2><img src="<?php echo get_template_directory_uri(); ?>/_img/other-helpful-teq-tips-logo-icon.svg" /></h2>
  <div class="row">

    <?php

      $the_query = new WP_Query( array(
        'post_type'       => 'Teq-Tips',
        'offset'          => 1
      ));
      while ($the_query -> have_posts()) : $the_query -> the_post();
    ?>
    <article class="col-md-3">
      <div class="videoTeqTips"><?php the_content(); ?></div>
      <p><strong><?php the_title(); ?></strong></p><br /><br />
    </article>

    <?php endwhile; wp_reset_postdata(); ?>

  </div>
</div>
</div>

<div class="container-fluid padding" style="background-color: rgba(0, 180, 228, 0.4);">
  <div class="row">
    <div class="container">
    <div class="col-md standardForm padding-bottom text-center">
      <p><img src="<?php echo get_template_directory_uri(); ?>/_img/teq-tips-heart-icon.svg" class="quarterWidth" /></p>
      <h1><strong>We'd love to hear from you!</strong></h1>
      <p>Feel free to enage with the Teq Team here. Send us all your comments, thoughts, or questions. Who knows, your question could be the next great Teq Tip of the week! We look forward to your feedback and welcome the chance to help you drive student engagement at your school.</p>
      <br /><br />
      <!--[if lte IE 8]>
      <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
      <![endif]-->
      <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
      <script>
        hbspt.forms.create({
          portalId: '182596',
          formId: '485b3f40-e30e-46cb-9f3b-062499b1ce9a'
        });
      </script>
    </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  jQuery(document).ready(function($){
    //when keyup on textbox
    $(".ajax-search_text").keyup(function(){

      var keyValue = $(this).val();
        if(keyValue){

          $.ajax({
            type : "POST",
            url  : "<?php echo admin_url('admin-ajax.php'); ?>",
            data : 'action=get_search_list_via_ajax&text='+ keyValue ,
            beforeSend: function(){
                jQuery('i.loader-text').css('display','inline-block');
            },
            success: function(response) {
                $('i.loader-text').css('display','none');
               //past ajax result on result div.
               $(".ajax-result").html(response);
            }
    });

    } else {
      // if textfield is blank then remove all the ajax list.
      $(".ajax-result").html("");
    }
  });

    //one more condition when textbox is blank then don't show the listing.
  $(".ajax-search_text").blur(function(){
	   var keyValue = $(this).val();
      if(!keyValue){
   	    $(".ajax-result").html("");
   	    $('i.loader-text').css('display','none');
      }
  });
});
</script>

<?php get_footer(); ?>
