<?php
/**
 * Template Name: Event Teq Squad Signup Template
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
  <?php get_template_part( 'navigation', 'default' ); ?>
</nav>

<main>
  <section>
    
    <div class="container-fluid nopadding"><div class="row"><div class="container">
      <div class="col-md-6 flex-md-middle">
        <h3>Have our team of certified specialists visit your school and <strong>demonstrate the latest hardware and software solutions for you and your staff</strong>.</h3>
          <ol>
            <li class="product">Product Support and Training</li>
            <li class="product">Curriculum Design and Collaborative Professional Development</li>
            <li class="product">Classroom training unique to your specific teaching style and curriculum</li>
          </ol>
        </div>
      <div class="col-md-6">
        <img src="/wp-content/uploads/2016/12/supportservice-teqsquad-demonstration.jpg" class="fullWidth" />
      </div>
    </div></div></div>

      <div class="container-fluid trialForm nopadding padding-top padding-bottom teqSquadBg">

        <div class="container text-center">
          <h1 class="white padding-top"><img src="<?php echo get_template_directory_uri(); ?>/_img/teq-squad-logo-transparent-dark.png" alt="Teq Squad" /></h1>
          <h4 class="white">To request a Teq Squad appointment, simply fill out the form below and a Teq Scheduling Representative will reach out to you directly.</h4><p class="white padding-bottom ">** Please note your preferred date is subject to change due to Teq Squad's availability.</p>
          <!--[if lte IE 8]>
          <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
          <![endif]-->
          <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
          <script>
            hbspt.forms.create({
              portalId: '182596',
              formId: '45bc47d6-3632-40df-81c0-5bd595aa56f4'
            });
          </script>
        </div>

      </div>
  </section>
</main>

<?php the_content(); ?>

<?php get_footer(); ?>
