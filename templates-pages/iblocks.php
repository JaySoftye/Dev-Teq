<?php
/**
 * Template Name: iBlocks Template
 * Description: Teq iBlock page template
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */

  get_template_part('lib/iblocks-header');
  get_template_part( 'navigation', 'default' );
    global $wp_query;
      $postid = $wp_query->post->ID;
?>

</nav>
<script>
$(document).ready(function(){
  $(function() {
   $('.read-more').click (function() {
     $('html, body').animate({scrollTop: $('div.iblocks-content').offset().top }, 'slow');
     return false;
   });
  });
 });
</script>

<div class="container-fluid nopadding main-header iblocks" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/<?php echo get_post_meta($postid, 'headerBackground', true); ?>.jpg');">
  <div class="row height-vh">
    <section class="iblocks-headers">
      <div class="col-md-1"></div>
      <div class="col-md-5">
        <h1 class="thin tagline">Future Engineer?</h1>
      </div>
      <div class="col-md-5">
        <h3><img src="<?php echo get_template_directory_uri(); ?>/images/iblocks-logo-white.png" alt="iBlocks" /></h3>
        <h1><strong>Learning Redesigned.</strong></h1>
        <p>Classroom environments are shifting towards learning experiences that are personalized, adaptive, hands-on, and collaborative.</p>
        <p><strong>Schools that need a partner to help design curriculum to enrich student learning, and enable students to explore and invent, now have iBlocks.</strong></p>
        <div class="row">
          <script src="https://fast.wistia.com/embed/medias/sibycazjbw.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
          <span class="wistia_embed wistia_async_sibycazjbw popover=true popoverContent=link" style="display:inline;position:relative">
            <a href="#">
            <button class="button purple" type="button">Watch an Intro
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 35">
            	  <path style="fill:#FFFFFF;" d="M17.869,22c-4.956-2.888-9.918-5.771-14.879-8.65c-1.677-0.973-2.711-0.374-2.718,1.587
            		c-0.011,2.888-0.002,5.778-0.002,8.666c0.012,0,0.025,0,0.037,0c0,1.508-0.001,3.014,0,4.522c0.001,1.445-0.007,2.888,0.01,4.333
            		c0.023,1.898,1.11,2.515,2.793,1.6c0.056-0.03,0.111-0.059,0.165-0.09c4.916-2.834,9.832-5.666,14.746-8.505
            		c0.296-0.172,0.59-0.369,0.832-0.607c0.692-0.677,0.7-1.473,0.007-2.148C18.571,22.428,18.218,22.204,17.869,22z"/>
              </svg>
            </button>
            </a>
          </span>
          <button class="button blue-green read-more" type="button">Read More</button>
        </div>
      </div>
      <div class="col-md-1"></div>
    </section>
  </div>
</div>

<div class="container-fluid nopadding iblocks-content iblocks">
  <div class="row an-iblock">
    <div class="col-md-1"></div>
    <div class="col-md-5 padding flex-md-middle content">
      <h2 class="blue-green"><strong>What is an iBlock?</strong></h2>
      <p>An iBlock is a personalized, custom-designed curriculum created to produce a particular outcome for a selected group of students.</p>
      <br />
      <p>iBlocks are designed by you in collaboration with our award-winning PD team of state-certified teachers.</p>
    </div>
    <div class="col-md-6 nopadding">
      <p class="hide-small">
        <img src="<?php echo get_template_directory_uri(); ?>/images/iblocks-an-iblock.svg" />
      </p>
      <div class="mobile-content hide-large">
        <p class="white padding-left"><strong>An iBlock:</strong></p>
        <ul>
          <li class="white">A personalized curriculum, or instructional block, created to produce a particular outcome for your students.</li>
          <li class="white">Crafted around the engineering design process and the Universal Design for Learning (UDL) framework.</li>
          <li class="white">A flexible learning environment that is cross-curricular and accommodates varying learning styles.</li>
          <li class="white">Aligned to national, state, and local standards.</li>
          <li class="white">Created to span multiple grades so that students can build on their knowledge and skills as they advance through the content.</li>
          <li class="white">Designed to provide tailor-made lesson content that helps your students strengthen specific skill sets.</li>
          <li class="white">Custom-made for your particular instructional challenge.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid nopadding iblocks-creating iblocks">
  <div class="row creating-iblock iblocks">
    <div class="col-md-1"></div>
    <div class="col-md-5">
      <p class="your-role hide-small">
        <img src="<?php echo get_template_directory_uri(); ?>/images/iblocks-your-role.svg" />
      </p>
    </div>
    <div class="col-md-5 padding flex-md-middle">
      <h2 class="blue text-right"><strong>Creating your iBlock </strong></h2>
      <p class="text-right">No one knows what your students need like you do. Let’s define and develop an iBlock for the outcomes you want to achieve.</p>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-5"></div>
    <div class="col-md-5">
      <p class="our-role hide-small">
        <img src="<?php echo get_template_directory_uri(); ?>/images/iblocks-our-role.svg" />
      </p>
      <div class="mobile-content your-role hide-large">
        <h3 class="white"><strong>YOUR ROLE:</strong></h3>
        <h3 class="white">Identify > Communicate</h3>
        <p class="white">What kind of learning experience would you like to create?</p>
        <p class="white">What are the outcomes you want to realize?</p>
        <p class="white">If you could transform your curriculum, what would it look like?</p>
      </div>
      <div class="mobile-content our-role hide-large">
        <h3 class="blue"><strong>OUR ROLE:</strong></h3>
        <h3 class="blue">Listen > Create</h3>
        <p class="blue">We work with you to create the skills matrix, lesson framework, and more, to help your students strengthen specific skill sets.</p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid nopadding iblocks-designing iblocks">
  <div class="row an-iblock">
    <div class="col-md-6 nopadding">
      <p class="hide-small">
        <img src="<?php echo get_template_directory_uri(); ?>/images/iblocks-designing-learning-pathway.svg" />
      </p>
      <div class="mobile-content hide-large">
        <h2 class="green"><strong>Designing a Learning Pathway</strong></h2>
        <p>Together, we’ll custom design an iBlock (or instructional block) that enables your students to explore, invent, and build the skills they need to be successful.</p>
      </div>
    </div>
    <div class="col-md-5 padding flex-md-middle content">
      <h3 class="green"><strong>Integrate STEM into your curriculum with iBlocks.</strong></h3>
      <p>We know that exposing students to STEM is crucial for 21st century skills development, but often, our STEM programs grow stagnant and siloed. How much more effective could our STEM instruction be if we took a more interdisciplinary and holistic approach?</p>
      <br />
      <h3 class="green"><strong>The jobs of the future will require the students of today to be proficient in Computer Science.</strong></h3>
      <p>What better way to engage students in Computer Science than with project-based learning that teaches 21st century skills – and fun, hands-on, and collaborative ways to apply those skills?</p>
    </div>
  </div>
</div>

<div class="container-fluid nopadding iblocks-look iblocks">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h2 class="purple"><strong>What does an iBlock look like? </strong></h2>
        <h5>Every iBlock looks different, since it’s built to respond to the needs of your school and students, the skills you want to address, the standards to align with, and the tools to leverage. </h5>
        <h4><strong>There are <span class="purple">two options</span> when you commission an iBlock:</strong></h4>
        <h4 class="purple"><span class="number">1</span><strong>An iBlocks foundation:</strong></h4>
        <ul class="checklist">
          <li>Planning and design</li>
          <li>Skills matrix</li>
          <li>Lesson framework with standards alignment</li>
          <li>Teacher guide and student workbooks</li>
        </ul>
        <h4 class="purple"><span class="number">2</span><strong>Complete iBlock:</strong></h4>
        <p>Includes iBlock foundation plus:</p>
        <ul class="checklist">
          <li>Lesson content for entire iBlocks unit</li>
          <li>Assessment and rubrics</li>
          <li>Onsite professional development to get you started</li>
        </ul>
        <h4 class="purple"><span class="number"></span><strong>Evolve your iBlock (optional):</strong></h4>
        <ul class="checklist">
          <li>Modify your iBlock framework and/or content for the next grade band, level, and/or shift its curricular focus.</li>
        </ul>
      </div>
      <div class="col-md-5 flex-md-middle">

        <div id="product-carousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#product-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#product-carousel" data-slide-to="1"></li>
            <li data-target="#product-carousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo get_post_meta($postid, 'sliderOneImage', true); ?>.png" />
            </div>
            <?php if(metadata_exists( 'post', $post->ID,'sliderTwoImage')) { ?>
            <div class="carousel-item">
              <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo get_post_meta($postid, 'sliderTwoImage', true); ?>.png" />
            </div>
            <?php }
              if(metadata_exists( 'post', $post->ID,'sliderThreeImage')) { ?>
            <div class="carousel-item">
              <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo get_post_meta($postid, 'sliderThreeImage', true); ?>.png" />
            </div>
            <?php } ?>
          </div>
        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-md">
        <p><em>Your iBlock is the sole property of your school and/or district and can be modified as desired. </em></p>
      </div>
    </div>
  </div>
</div>

<main>
  <?php wp_reset_query(); the_content(); ?>
</main>

<div class="container-fluid padding-bottom"><div class="row"><div class="container"><div class="col-md standardForm padding-top padding-bottom text-center">
  <h5><img src="<?php echo get_template_directory_uri(); ?>/images/iblock_marketing-brochure.jpg" /></h5>
<h3 class="display-4"><strong>Are you ready to explore?</strong></h3>
<h3 class="thin">Let's put a plan together. Use the form below to have a representative reach out to you directly and receive a <strong>FREE downloadable copy of our marketing booklet<strong>.</h3>
<!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
  hbspt.forms.create({
	portalId: "182596",
	formId: "1993b077-140d-492d-9ddf-8ab92e13ad71"
});
</script>
</div></div></div></div>

  <script src="<?php echo get_template_directory_uri();?>/js/teqCustom-scripts.js"></script>

<?php get_footer(); wp_footer(); ?>

<!-- Start of Async HubSpot Analytics Code -->
 <script type="text/javascript">
   (function(d,s,i,r) {
     if (d.getElementById(i)){return;}
     var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
     n.id=i;n.src="//js.hs-analytics.net/analytics/"+(Math.ceil(new Date()/r)*r)+ '/182596.js';
     e.parentNode.insertBefore(n, e);
   })(document,"script","hs-analytics",300000);
 </script>

<!-- End of Async HubSpot Analytics Code -->

   </body>
</html>
