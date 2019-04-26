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

  <div class="container-fluid padding-top padding-bottom scrollToBottom classroomConcepts hidden-xs-down hidden-sm-down">
    <div class="row">
      <div class="container padding-top padding-bottom">
        <div class="col-md flex-md-middle text-center">
          <h5 class="white text-center"><img src="/wp-content/uploads/2016/12/evospaces_logo_white.svg"></h5>
          <h2 class="white"><strong>Evolve</strong> your classroom to support 21st century learning</h2>
          <p class="text-center"><a href="/evospaces/"><button class="salmon">Learn more</button><a/></p>
        </div>
      </div>
    </div>
  </div>


<?php get_footer(); ?>
