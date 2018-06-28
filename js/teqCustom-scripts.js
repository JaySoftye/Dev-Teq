/*!
 * Bootstrap v4.0.0-alpha Teq Scripts
 */
 $(document).ready(function(){
   "use strict";

    $(window).on('load', function() {
      $('#onload').modal('show');
    });

/** video click to play **/
  $('.video').click(function(){this.paused?this.play():this.pause();});

/** stop carousel autoplay **/
  $('.carousel').carousel({
      interval: false
  });

/** Scroll to Sections **/
   $(".learnhow").click(function(){
     $('html, body').animate({
       scrollTop: $("div.scrollToDiv").offset().top
      }, 600);
    });

    $("button.classroomScroll").click(function(){
      $('html, body').animate({
        scrollTop: $("div.scrollToBottom").offset().top
      }, 900);
     });

/** Scroll to Trial Form **/
    $("button.trialScroll").click(function(){
      $('html, body').animate({
        scrollTop: $("div.row.bottomGradient").offset().top
      }, 900);
    });

/** Scroll after dropdown content **/
    $("button.small").click(function(){
      $('html, body').animate({
        scrollTop: '+=450px'},
      400);
    });

/** Close the main Banner at the top after you scroll down the page **/
 function checkOffset() {
    if ($("#mainNav").offset().top < 50) {
      $("#mainBanner").slideDown(200);
      $( "div#popInWindow" ).slideUp(200);
    }
    else if(!$(window).scrollTop()) {
      $("#mainBanner").show();
      $( "div#popInWindow" ).hide();
    }
    else {
      $("#mainBanner").slideUp(200);
      $( "div#popInWindow" ).slideDown(600);
    }
}
    checkOffset();

  $(window).scroll(function() {
    checkOffset();
  });

/** Close the main Navigation Section you've selected **/
  $("a.nav-link").click(function(){
    $(".subnav").removeClass("in");
  });

/** Class Swap for Title Roles Menu **/
  $("a.title-link").click(function(){
    if ($(this).hasClass("menu-open")) {
      $(this).removeClass("menu-open");
      $(this).addClass("menu-close");
    } else {
      $(this).removeClass("menu-close");
      $(this).addClass("menu-open");
    }
  });

/** Hover Menu for Title Roles Items **/
  $(".title-roles-menu-item1").hover(
   function() {
      $('#One').slideToggle('slow', 'swing', 'show');
    }, function() {
      $('#One').slideToggle('slow', 'swing', 'hide');
    }
  );
  $(".title-roles-menu-item2").hover(
   function() {
      $('#Two').slideToggle('slow', 'swing', 'show');
    }, function() {
      $('#Two').slideToggle('slow', 'swing', 'hide');
    }
  );
  $(".title-roles-menu-item3").hover(
   function() {
      $('#Three').slideToggle('slow', 'swing', 'show');
    }, function() {
      $('#Three').slideToggle('slow', 'swing', 'hide');
    }
  );

/* Collapse Menu show and hide icon change */
  $('a.conceptLink').click(function(){
    $(this).toggleClass('mobileClose mobileOpen');
  });

/* Every time the window is scrolled something will fade into the window... */
  $(window).scroll( function(){
    /* Check the location of each desired element */
    $('.hideItem').each( function(i){
      var bottom_of_object = $(this).offset().top + $(this).outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height();
    /* If the object is completely visible in the window, fade it in */
      if( bottom_of_window >= bottom_of_object ){
        $(this).delay(100).animate({'opacity':'1'},800);
      }
    });
  });

  $('.closePauseVideo').on('click', function () {
      // Just go ahead and pause/reset all the video elements
      $('video').each(function () {
          $(this).get(0).pause();
      });
  });

/* Open link in a separate window with a specific height */
  $('a.ctleWindow').click(function(event) {
    event.preventDefault();
    window.open($(this).attr("href"), "popupWindow", "width=880,height=480");
  });

/* pi-top image scroll */
  var lastScrollTop = 0 + '50';
    $(window).scroll(function(event){
      var st = $(this).scrollTop();
      if (st > lastScrollTop) {
        $('img#keyboard').animate({top: '+=1.5'}, 6);
        $('img#panel').animate({left: '+=1.5'}, 6);
      } else {
        $('img#keyboard').animate({top: '15px'}, 3);
        $('img#panel').animate({left: '15px'}, 3);
      }
    lastScrollTop = st;
  });

  $(window).scroll(function() {

    var windowBottom = $(this).scrollTop() + $(this).innerHeight();
    $('.scrollFade').each(function() {
      /* Check the location of each desired element */
      var objectBottom = $(this).offset().top + $(this).outerHeight();

      /* If the element is completely within bounds of the window, fade it in */
      if (objectBottom < windowBottom) { //object comes into view (scrolling down)
        if ($(this).css('opacity')==0) {$(this).fadeTo(500,1);}
      } else { //object goes out of view (scrolling up)
        if ($(this).css('opacity')==1) {$(this).fadeTo(500,0);}
      }
    });
  }).scroll();

});
