<?php
/**
 * Template Name: Event Signup Template
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
  <?php get_template_part( 'navigation', 'default' ); ?>
</nav>

<main>
  <div class="container-fluid trialForm nopadding padding-top padding-bottom eventSignBg">
    <section>
      <div>

        <div class="container">
          <h1 class="white padding-top text-center"><strong>Welcome</strong> Educators, Directors and Administrators</h1>
          <h3 class="white padding-bottom text-center">To request more info, a product demo, or to schedule an appointment, simply fill out the form below and a Teq Representative will reach out to you directly.</h3>
            <!--[if lte IE 8]>
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
            <![endif]-->
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
            <script>
              hbspt.forms.create({
                portalId: '182596',
                formId: '20e22d23-8089-4f25-9f30-52ba0bddecf1'
              });
            </script>
        </div>

      </div>
    </section>
  </div>
</main>

<?php wp_reset_query(); the_content(); ?>

<?php get_footer(); ?>
