<?php
/**
 * Template Name: TEQ-G Products
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
 get_template_part('lib/teq-g-header');
   global $wp_query;
     $postid = $wp_query->post->ID;
 ?>

 <section class="hero-content main">
   <div class="container-fluid">
     <div class="row align-items-center">
       <div class="col-md-6">
         <h1 class="white">Technology has the power to change the way students learn <span class="blink white"></span></h1>
       </div>
     </div>
     <div class="row navigation-source">
       <div class="col-md-4 col-sm-6">
         <a href="/cdw-g-stem-products/">STEM<br />Products &#8594;</a>
       </div>
       <div class="col-md-4 col-sm-6">
         <a href="/cdw-g-professional-development/">Professional<br />Development &#8594;</a>
       </div>
     </div>
     <div class="row navigation-source">
       <div class="col-md-8 col-sm-12">
         <a href="https://otis.teq.com/webinars" style="background-color:#000000;font-weight:700;padding:2rem;color:#ffffff;">Schedule a custom webinar on OTIS for educators &#8594; <br /><small style="color:#ffffff;">We'll present online, a deep dive on the product of your choosing, <br />and answer all yourquestions.</small></a>
       </div>
     </div>
   </div>
 </section>
 <footer>
   <div class="container-fluid">
     <nav class="row align-items-end">
       <ul class="col-md nav">
         <li class="nav-item">
           <h2><strong>For Site Assistance Please Contact:<br />877.455.9369</strong></h2>
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
 <script>
   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
   })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

   ga('create', 'UA-67374790-2', 'auto');
   ga('send', 'pageview');

   /**
 * Function that tracks a click on an outbound link in Analytics.
 * This function takes a valid URL string as an argument, and uses that URL string
 * as the event label. Setting the transport method to 'beacon' lets the hit be sent
 * using 'navigator.sendBeacon' in browser that support it.
 */
   var trackOutboundLink = function(url) {
    ga('send', 'event', 'outbound', 'click', url, {
      'transport': 'beacon',
      'hitCallback': function(){document.location = url;}
    });
   }

 </script>

 <?php wp_footer(); ?>

 </body>
 </html>
