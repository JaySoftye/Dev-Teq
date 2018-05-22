<?php
/**
 * Template Name: About Us Template
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
    <div id="popInWindow">
      <a href="/roadmap"><img src="<?php echo get_template_directory_uri();?>/_img/teq-roadmap_icon-link.svg" alt="Teq 2018 Roadmap" /></a>
    </div>

      <div class="container-fluid main-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/_img/<?php echo get_post_meta($postid, 'headerBackground', true); ?>.jpg');">
        <div class="row height-full">
          <div class="container flex-md-middle">
            <img class="scrollIcon learnhow" src="<?php echo get_template_directory_uri(); ?>/_img/scrolling-bouncing-arrow.gif" />

            <?php wp_reset_query(); the_content(); ?>

            <h1 class="display-4 white text-center"><img src="<?php echo get_template_directory_uri(); ?>/_img/mission-statement-text.svg" alt="Mission Statement" /></h1>
            <h3 class="white text-center">Teq supports outcomes by evaluating and delivering products and services for the educational environment. We are dedicated to providing dynamic professional development and instructional support to educators.</h3>
          </div>
        </div>
      </div>


      <div class="container nopadding">
        <div class="row">
          <div class="col-md padding-top text-center flex-md-middle">
            <h2><img src="<?php echo get_template_directory_uri(); ?>/_img/onlinepd-onsitepd-nowinstructionsupport-logos.jpg" alt="Online and Onsite PD Now Instruction Support" /></h2>
            <h2 class="bold">The Fusion of Technology and Learning</h2>
            <h5>We customize professional development to empower educators, improve technology integration, and increase student achievement. We different practice to help schools meet their instructional goals and help teachers achieve their individual goals. Teq provides technology and professional development solutions to ultimately increase student achievement.</h5> 
          </div>
        </div>
      </div>

      <div class="container nopadding">
        <div class="row">
          <div class="col-md padding">
            <img src="<?php echo get_template_directory_uri(); ?>/_img/aboutus-improving-the-quality-of-education.svg" />
          </div>
        </div>
      </div>

      <div class="container nopadding">
        <div class="row">
          <div class="col-md padding">
            <img src="<?php echo get_template_directory_uri(); ?>/_img/aboutus-solutions-to-increase-student-achievement.svg" />
          </div>
        </div>
      </div>

      <div class="container nopadding">
        <div class="row">
          <div class="col-md padding">
            <a href="<?php echo site_url(); ?>/roadmap/"><img src="<?php echo get_template_directory_uri(); ?>/_img/aboutus-teq-roadmap.svg" /></a>
          </div>
        </div>
      </div>

    <div class="container-fluid nopadding barn-raised">
      <div class="row height-full">
        <div class="col-md-1">
        </div>
        <div class="col-md-5 padding-left flex-md-middle">
          <h1 class="white"><img src="<?php echo get_template_directory_uri(); ?>/_img/yes-we-raised-in-a-barn.svg" alt="Yes we were raised in a bar" /></h1>
          <p class="white"><strong>Our story began in a small barn where we specialized in the sale of vocational training equipment</strong>. As we shifted to interactive product integration, our family business steadily grew to an organization of 140 professionals. Now, more than 46 years later, our sweet little barn stands as the symbolic reminder of the company’s humble origins and the open door we offer our clients. We encourage you to stop by with your input, and look forward to sharing new learning experiences with you.</p>
          <img src="/wp-content/uploads/2016/12/about-us-story-barn-img.png" />
        </div>
        <div class="col-md-6">
        </div>
      </div>
    </div>

    <div class="container-fluid nopadding">
      <div class="row">
        <div class="container padding-top padding-bottom text-center">
          <div class="col-md">
            <h1>Teq's <strong>Leadership Team</strong></h1>
            <h4>At Teq, we work hard to foster innovation, passion, and creativity in the twenty-first century classroom by providing a unique blend of the latest K-12 educational technology products, experienced service, and meaningful professional development. With a focus on the fusion of technology and learning, our goal is to empower educators, improve technology integration, and increase student achievement in today's schools. <strong>Below you will find a list of your leadership team here at Teq.</strong></div>
          </div>
        </div>
      </div>
      <div class="container-fluid nopadding text-center">
        <div class="row">
          <div class="col-md nopadding">
            <ul class="aboutList">
              <li>
                <a class="conceptLink mobileClose" data-toggle="collapse" href="#conceptOne" aria-expanded="false" aria-controls="conceptOne">Executive Team</a>
                  <div class="collapse in padding-top padding-bottom" id="conceptOne">
                    <div class="row">
                      <div class="col-sm">
                        <img src="/wp-content/uploads/2016/12/about-us-leadership-DamianScarfo.png" />
                        <p><strong>Damian Scarfo</strong></p>
                        <small>Chief Executive officer</small>
                      </div>
                      <div class="col-sm">
                        <img src="/wp-content/uploads/2016/12/about-us-leadership-ArnaldoPerez.png" />
                        <p><strong>Arnaldo Perez</strong></p>
                        <small>Chief Financial Officer</small>
                      </div>
                      <div class="col-sm">
                        <img src="/wp-content/uploads/2016/12/about-us-leadership-GeorgeTsenes.png" />
                        <p><strong>George Tsenes</strong></p>
                        <small>Chief Technology Officer</small>
                      </div>
                      <div class="col-sm">
                        <img src="/wp-content/uploads/2016/12/about-us-leadership-RobertWayneHarris.png" />
                        <p><strong>Robert-Wayne Harris</strong></p>
                        <small>Chief Learning Officer</small></div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <a class="conceptLink mobileClose" data-toggle="collapse" href="#conceptTwo" aria-expanded="false" aria-controls="conceptTwo">Vice Presidents</a>
                    <div class="collapse in padding-top padding-bottom" id="conceptTwo">
                      <div class="row">
                        <div class="col-sm">
                          <img src="/wp-content/uploads/2016/12/about-us-leadership-chrissy_rebert.png" />
                          <p><strong>Chrissy Rebert</strong></p>
                          <small>VP of Instructional Solutions</small>
                        </div>
                        <div class="col-sm">
                          <img src="/wp-content/uploads/2016/12/about-us-leadership-JohnBall.png" />
                          <p><strong>John Ball </strong></p>
                          <small>VP of Operations</small>
                        </div>
                        <div class="col-sm">
                          <img src="/wp-content/uploads/2016/12/about-us-leadership-BrianBeedenbender.png" />
                          <p><strong>Brian Beedenbender</strong></p>
                          <small>VP of Sales</small>
                        </div>
                        <div class="col-sm"><img src="/wp-content/uploads/2016/12/about-us-leadership-PeterKurtz.png" />
                          <p><strong>Peter Kurtz </strong></p>
                          <small>VP of Marketing</small>
                        </div>
                        <div class="col-sm">
                          <img src="/wp-content/uploads/2016/12/about-us-leadership-FredCatalano.png" />
                          <p><strong>Fred Catalano </strong></p>
                          <small>VP of Finance</small>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <a class="conceptLink mobileClose" data-toggle="collapse" href="#conceptThree" aria-expanded="false" aria-controls="conceptThree">Directors and Managers</a>
                    <div class="collapse in padding-top padding-bottom" id="conceptThree">
                      <div class="row">
                        <div class="col-sm">
                          <img src="/wp-content/uploads/2016/12/about-us-leadership-JeffKoss.png" />
                          <p><strong>Jeffrey Koss</strong></p>
                          <small>Director of Sales Operations</small>
                        </div>
                        <div class="col-sm">
                          <img src="/wp-content/uploads/2016/12/about-us-leadership-MichellePetry.png" />
                          <p><strong>Michelle Petry</strong></p>
                          <small>Director of Client Services</small>
                        </div>
                        <div class="col-sm">
                          <img src="/wp-content/uploads/2016/12/about-us-leadership-PaulPrincipato.png" />
                          <p><strong>Paul Principato</strong></p>
                          <small>Creative Director</small>
                        </div>
                        <div class="col-sm">
                          <img src="/wp-content/uploads/2016/12/about-us-leadership-BrianFried.png" />
                          <p><strong>Brian Fried</strong></p>
                          <small>Director of Inside Sales</small>
                        </div>
                        <div class="col-sm">
                          <img src="/wp-content/uploads/2016/12/about-us-leadership-ThomasMaher.png" />
                          <p><strong>Thomas Maher</strong></p>
                          <small>Director of Inside Sales</small>
                        </div>
                        <div class="col-sm">
                          <img src="/wp-content/uploads/2016/12/about-us-leadership-AndrewGrefig.png" />
                          <p><strong>Andrew Grefig</strong></p>
                          <small>Director of Curriculum and Content</small>
                        </div>
                        <div class="col-sm">
                          <img src="/wp-content/uploads/2016/12/about-us-leadership-JosephSanfilippo.png" />
                          <p><strong>Joseph Sanfilippo</strong></p>
                          <small>Director of eLearning</small>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <a class="conceptLink mobileClose" data-toggle="collapse" href="#conceptFour" aria-expanded="false" aria-controls="conceptThree">Directors and Managers</a>
                      <div class="collapse in padding-top padding-bottom" id="conceptFour">
                        <div class="row">
                          <div class="col-sm">
                            <img src="/wp-content/uploads/2016/12/about-us-leadership-FrankFalconeri.png" />
                            <p><strong>Frank Falconeri</strong></p>
                            <small>Director of Logistics</small>
                          </div>
                          <div class="col-sm">
                            <img src="/wp-content/uploads/2016/12/about-us-leadership-DawnLibretto.png" />
                            <p><strong>Dawn Libretto</strong></p>
                            <small>Director of Scheduling</small>
                          </div>
                          <div class="col-sm">
                            <img src="/wp-content/uploads/2016/12/about-us-leadership-PaulCangelosi.png" />
                            <p><strong>Paul Cangelosi</strong></p>
                            <small>Director of Sales Operations</small>
                          </div>
                          <div class="col-sm">
                            <img src="/wp-content/uploads/2016/12/about-us-leadership-JenniferHennessey.png" />
                            <p><strong>Jennifer Hennessey</strong></p>
                            <small>Purchasing Manager</small>
                          </div>
                          <div class="col-sm">
                            <img src="/wp-content/uploads/2016/12/about-us-leadership-LouisGilsenan.png" />
                            <p><strong>Louis Gilsenan</strong></p>
                            <small>HR Manager</small>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

  <div class="container-fluid padding join-teq-team" style="margin-top: -1rem;">
    <div class="container">
      <div class="row padding">
        <div class="col-md text-center">
          <h1 class="white display-4"><strong>Join </strong>Our Team</h2>
          <h5 class="white bold">Teq employees receive:</h5>
          <h5 class="white">Competitive salary + bonus •  Outstanding benefits package including medical, dental, vision, life insurance, disability plans, and flexible spending accounts • 401(k) plan • Paid holidays and time off • Defined career path • Ongoing professional development • Visible, exciting work supporting the sales of cutting edge technology and solutions</h5>
          <a href="<?php echo get_site_url(); ?>/careers/"><button class="light">View our current job opportunities</button></a>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
