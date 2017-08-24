<?php
/**
 * Default Post Template
 * Description: Post template with a content container.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
  <?php get_template_part( 'navigation', 'default' ); ?>
</nav>

<?php

  global $wp_query;
    $postid = $wp_query->post->ID;
?>

<section>

  <?php wp_reset_query();
    if ( in_category('events') ) { ?>

  <div class="container">
    <div class="col padding-top">
      <h1 class="display-4 text-center"><strong><?php the_title();?></strong></h1>
    </div>
  </div>

  <div class="container-fluid event-form-bg">
    <div class="container">
      <div class="col standardForm text-center">
        <h6><?php echo get_post_meta($postid, 'headerCaption', true); ?></h6>
        <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
        <![endif]-->
          <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
          <script>
            hbspt.forms.create({
              portalId: '182596',
              formId: '<?php echo get_post_meta($postid, 'formId', true); ?>',
            });
          </script>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(window).on('load', function () {
      var titleData = '<?php echo the_title();?>';
      $('input#event-20e22d23-8089-4f25-9f30-52ba0bddecf1').val(titleData);
    });
  </script>
  <div class="container">
    <div class="row padding-top padding-bottom">
      <div class="col-md">
        <?php the_content(); ?>
        <small class="d-block text-right padding-top">- Post in <?php the_category(', ') ?> by <span class="bold"><?php the_author(); ?></span> on <?php the_time('jS F Y') ?></small>
        <?php // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() ) {
            comments_template();
        } ?>
      </div>
    </div>
  </div>

  <?php } else { ?>

  <div class="container">
    <div class="row padding-top padding-bottom">
      <div class="col-md">
        <h1 class="display-4 text-center"><strong><?php the_title();?></strong></h1>
        <small class="d-block text-center">Post in <?php the_category(', ') ?> by <span class="bold"><?php the_author(); ?></span> on <?php the_time('jS F Y') ?></small>
        <?php the_content(); ?>

        <div class="padding-top">
          <?php // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() ) {
            comments_template();
          } ?>
        </div>
      </div>
    </div>
  </div>

  <?php } ?>

</section>

<?php get_footer(); ?>
