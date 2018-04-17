<?php
/**
 * Template Name: Learning Community Social Medial Center
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
  <?php get_template_part( 'navigation', 'default' ); ?>
</nav>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<main>
  <div class="container nopadding padding-top">
    <section class="row">

      <div class="col-md-6" style="height: 100vh; overflow: scroll;">
      <h4>Tweets by @{TeqPD}</h4>
      <a class="twitter-timeline" href="https://twitter.com/TeqOPD">Tweets by TeqPD</a>
      <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
      <div class="col-md-6" style="height: 100vh; overflow: scroll;">
      <h4>Facebook Timeline.</h4>
      <div class="fb-page" data-href="https://www.facebook.com/myTeq/" data-tabs="timeline" data-width="1500" data-height="1500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
      <blockquote cite="https://www.facebook.com/myTeq/" class="fb-xfbml-parse-ignore">
      <a href="https://www.facebook.com/myTeq/">Teq</a>
      </blockquote>
      </div>
      </div>

    </section>
  </div>
</main>

<?php get_footer(); ?>

<?php
