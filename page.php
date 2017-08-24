<?php
/**
 * Template Name: Default Page - BootstrapFour
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
  <?php get_header(); ?>
    <?php get_template_part( 'navigation', 'default' ); ?>
  </nav>

    <?php

      global $wp_query;
        $postid = $wp_query->post->ID;
    ?>

      <div class="container-fluid home-header">
        <video class="vidBackgroundHeader" poster="<?php echo get_template_directory_uri(); ?>/_img/<?php echo get_post_meta($postid, 'headerBackground', true); ?>.jpg" playsinline autoplay muted loop>
            <source src="<?php echo get_template_directory_uri();?>/_img/<?php echo get_post_meta($postid, 'headerBackground', true); ?>.webm" type="video/webm">
        </video>
          <div class="row height-full">
            <div class="container flex-md-middle">
              <img class="scrollIcon learnhow" src="<?php echo get_template_directory_uri(); ?>/_img/scrolling-bouncing-arrow.gif" />

  <?php wp_reset_query(); ?>

	<?php the_content(); ?>

  <div class="container-fluid nopadding scrollToBottom classroomConcepts hidden-xs-down hidden-sm-down">
    <div class="row height-full">
      <div class="col-md-2"></div>
      <div class="col-md-8 flex-md-middle text-center padding">
        <h2 class="white"><strong>Discover the new classroom for the 21st Century.</strong></h2>
        <h4 class="white">Teq offers full technology based learning concepts for every level of k12 education. Select your school level below and discover the new modern classroom.</h4>
        <div class="row">
          <div class="col-sm">
            <a href="/elementary-classroom-concepts/"><img src="<?php echo get_template_directory_uri(); ?>/_img/teq-classroom-concepts-elementary-school-icons.png" /></a>
          </div>
          <div class="col-sm">
            <a href="/middle-classroom-concepts/"><img src="<?php echo get_template_directory_uri(); ?>/_img/teq-classroom-concepts-middle-school-icons.png" /></a>
          </div>
          <div class="col-sm">
            <a href="/high-classroom-concepts/"><img src="<?php echo get_template_directory_uri(); ?>/_img/teq-classroom-concepts-high-school-icons.png" /></a>
          </div>
          <div class="col-sm">
            <a href="/special-education-classroom-concepts/"><img src="<?php echo get_template_directory_uri(); ?>/_img/teq-classroom-concepts-special-inclusive-icons.png" /></a>
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>

<?php get_footer(); ?>
