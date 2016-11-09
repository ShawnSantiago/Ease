<!DOCTYPE HTML>
<html>
<head>
     <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shawn Santiago | Web Developer</title>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:500,700|Roboto:400,500,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../../assets/css/app.css">
    <style>
      section.header {
        background: url('../../assets/img/easethumb.png') center center;
        background-size: cover;
        display: block;
      }

  </style>
</head>
<body>
<header class="main_h">
      <div class="row">
          <a class="logo" href="/">< Back</a>
      </div> <!-- / row -->

    </header>
    <section class="header" id="header">
          <div class="row" >
            <h1>Ease</h1>
            <hr>
            <h6>PSD to HTML Conversion</h6>
          </div>
    </section>
    <section class="asaltandbattery">
    <div class="row">
         <h2>Ease</h2>
            <div class="small-12 medium-7 large-7 column">
               <p>This was a coding test I recieved from a company I was applying too.</p>
                <div id="overview">
                <h5>Front-End Test: Code Landing Page from Mockup</h5>
                <p>The purpose of this test is to evaluate your front-end web development skills. In a real-world scenario, you should be able to work in close collaboration with a designer. As such, you should have no problem taking a mockup and converting it to code. In this instance, you’ll be working with a sample landing page provided as a Sketch / PSD file. Your goal is to create a pixel-perfect copy of that mockup using HTML5, CSS3, and jQuery.</p>
                <h5>Instructions:</h5>


                <p>If you have a Mac, install Sketch from sketchapp.com to be able to open the Sketch file. Otherwise, use Adobe Photoshop to open the PSD file. Don’t just rely on the PNG file.
                Code a pixel-perfect version of the page using HTML, CSS, Javascript / jQuery and any Javascript libraries, plugins or frameworks you would like. 
                Pay attention to fonts used, font size, padding and other little details.
                Create appropriate hover effects for links on the page and icons in the top nav bar and DO NOT use images. All effects should be done using HTML5 and CSS3.
                Make the page responsive so that it is optimized for use on mobile devices. We are not providing a mobile mockup, so you can use your imagination as to how that might look. The three column section should stack into one column in the mobile view. <strong>BONUS: Incorporate use of ReactJS or Angular.js into your demo.</strong>
                </p>

                <h5>The Graph - Special Instructions</h5>
                <p>The hardest and most time consuming part of this assignment is the graph. For this reason, you may skip the graph and leave that section out for now. If you are invited for a final round interview, we may ask you to complete the graph, but for now, you can leave it out. If and when you do create the graph, this JSON file will come in handy. </p>
                <h5>Criteria you will be evaluated on:</h5>
                <p>Level of proficiency with HTML5, CSS3 and javascript / jQuery.
                Execution of design and attention to detail (colour, typography and padding).
                Ability to use appropriate hover effects with regard to navigation items on the page.
                Ability to implement jQuery elements on the page.
                Your page should be responsive and render appropriately on mobile, desktop or tablet.</p>

            </div>
          </div>
            <div class="small-12 medium-4 large-4 column">
                
                <h5>Languages</h5>
                <p>Javascript</p>
                <p>HTML</p>
                <p>CSS</p>
                <h5>Code</h5>
                <a href="https://github.com/ShawnSantiago/webd152-assignment2-master"><p>Github</p></a>
                <h5>View Site</h5>
                <p><a href="./index.html">Click here!</a></p>
            </div>
        
    </section>
    <footer>
        <h4>Shawn Santiago</h4>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/g/foundation@6.2.1(foundation.min.js+js/foundation.core.js+js/foundation.reveal.js+js/foundation.util.keyboard.js+js/foundation.util.mediaQuery.js+js/foundation.util.motion.js+js/foundation.util.box.js)"></script>
   <!--  <script src="../../assets/js/app.js"></script>  -->  
    <script>
      $(document).foundation();

      var topofDiv = $("#header").offset().top; //gets offset of header
      var height = $("#header").outerHeight(); //gets height of header

      $(window).scroll(function() {

          if($(window).scrollTop() > (topofDiv + height)){
              $('.main_h').addClass('sticky');
          } else {
              $('.main_h').removeClass('sticky');
          }
      });

      // Mobile Navigation
      $('.mobile-toggle').click(function() {
          if ($('.main_h').hasClass('open-nav')) {
              $('.main_h').removeClass('open-nav');
          } else {
              $('.main_h').addClass('open-nav');
          }
      });

      $('.main_h li a').click(function() {
          if ($('.main_h').hasClass('open-nav')) {
              $('.navigation').removeClass('open-nav');
              $('.main_h').removeClass('open-nav');
          }
      });

      // Navigation Scroll - ljepo radi materem
      $('nav a').click(function(event) {
          var id = $(this).attr("href");
          var offset = 64;
          var target = $(id).offset().top - offset;
          $('html, body').animate({
              scrollTop: target
          }, 500);
          event.preventDefault();
      });

      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-59295714-1', 'auto');
      ga('send', 'pageview');

    </script>
</body>
</html>