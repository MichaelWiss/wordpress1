<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]><div class="alert alert-warning"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></div><![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>



 <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
 

 <div class="container-fluid">

<div id="main" role="main">

<!--Begin revo slider-->

<div id="revo">
<?php putRevSlider("slider1") ?>
</div>

<!--end revo slider-->




<!--begin accordion-->


<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading" class="">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
        <button id="uno1" type="button"><span class="glyphicon glyphicon-circle-arrow-down button_text"></span> Resume</button>
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse "><div class="wrap container" role="document">
      <div class="accordion-inner">


      <!---begin resume-->



     <div class="resume">   
     <div="hd">
      <div class="container">
        <div class="row">

        <div class="col-md-9 col-xs-12" id="resname">
              <h1>Michael Wiss</h1>
              <h2> Web Developer</h2>
        </div>

        <div class="col-md-3 col-xs-12" id="contact-info">
              <h3><a id="pdf" href="#">Download PDF</a></h3>
              <h3><a id="email" href="mailto:michael.wiss@gmail.com">michael.wiss@gmail.com</a></h3>
						  <h3>(917)-627-4004</h3>
				</div>
				
        	

        </div>
     </div>
    </div>
      <div id="bd">
			<div class="container">
				<div class="row">

					
						<div class="col-md-3 col-sm-3 col-xs-12">
							<h2>Profile</h2>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<p class="enlarge">
								Progressively evolve cross-platform ideas before impactful infomediaries. Energistically visualize tactical initiatives before cross-media catalysts for change. 
							</p>
						</div>
					</div>
					</div>
					</div>


						<div class="container" id="skills">
				<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12">
							<h2>Skills</h2>
						</div>
						<div class="">

								<div class="col-md-3 col-sm-3 col-xs-12">
									<h2>Web Design</h2>
									<p>Assertively exploit wireless initiatives rather than synergistic core competencies.	</p>
								</div>

								<div class="col-md-3-md col-sm-3 col-xs-12">
									<h2>Interface Design</h2>
									<p>Credibly streamline mission-critical value with multifunctional functionalities.	 </p>
								</div>

								<div class="col-md-3-offset-1 col-sm-3 col-xs-12">
									<h2>Project Direction</h2>
									<p>Proven ability to lead and manage a wide variety of design and development projects in team and independent situations.</p>
								</div>
						</div>
					</div>
					</div>


<div class="container">
				<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12">
							<h2>Technical</h2>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<ul class="talent">
								<li>HTML5</li>
								<li>CSS3</li>
								<li class="last">Javascript</li>
							</ul></div>

							<div class="col-md-3 col-sm-3 col-xs-12">

							<ul class="talent">
								<li>Jquery</li>
								<li>PHP</li>
								<li class="last">Git</li>
							</ul></div>
							<div class="col-md-3 col-sm-3 col-xs-12">

							<ul class="talent">
								<li>OS X</li>
								<li>Ruby on Rails</li>
								<li class="last">Cli</li>
							</ul>
						</div>
					</div>
       



    </div>
        
        <div class="container">
				<div class="row">
	
						<div class="col-md-3 col-sm-3 col-xs-12">
							<h2>Experience</h2>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-12">

							<div class="job">
								<h2>WhyHunger</h2>
								<h3>Web Manager</h3>
								<h4>2012</h4>
								<p>Intrinsicly enable optimal core competencies through corporate relationships. Phosfluorescently implement worldwide vortals and client-focused imperatives. Conveniently initiate virtual paradigms and top-line convergence. </p>
							</div>
							</div>
							</div>

<div class="row">
            <div class="col-md-9 col-md-offset-3 col-sm-9-offset-3 col-xs-12">
							<div class="job">
								<h2>Freelance</h2>
								<h3>Freelancer</h3>
								<h4>2011</h4>
								<p>Progressively reconceptualize multifunctional "outside the box" thinking through inexpensive methods of empowerment. Compellingly morph extensive niche markets with mission-critical ideas. Phosfluorescently deliver bricks-and-clicks strategic theme areas rather than scalable benefits. </p>
							</div>
              </div>
              </div>

    <div class="container">
				<div class="row" id="education">
						<div class="col-md-3 col-sm-3 col-xs-12">
							<h2>Education</h2>
						</div>
						<div class="col-md-9  col-sm-9 col-xs-12">
							<h2>School of Visual Arts, NY, NY</h2>
							<h3>Fine Arts &mdash; <strong>3.83 GPA</strong> </h3>
						</div>
					</div>
</div>

</div>

<!--- end resume---->

</div>
</div>
</div>
</div>



  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
        <button id="uno"><span class="glyphicon glyphicon-circle-arrow-down button_text"></span> Contact Me</button>
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
   <!--begin form-->

      <div class="cform ">
        <?php echo do_shortcode( '[contact-form-7 id="116" title="Contact form 1"]' ); ?> 
      </div>

    <!-- end form -->

     </div>     
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
        <button id="uno3"><span class="glyphicon glyphicon-circle-arrow-down button_text"></span> And Even More Information</button>
      </a>
    </div>
    <div id="collapseThree" class="accordion-body collapse">
      <div class="accordion-inner">
       nnnnnnnnnn


       nnnnnnnnnnnnnnnnnnn




       </div>
      </div>
    </div>
  </div>
</div>
</div>

<!--end accordion-->

<!--div seperator-->

<div id="sub">
<svg id="bigTriangleColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none">
				<path d="M0 0 L50 100 L100 0 Z" />
			</svg>

</div>

<!--end div seperator-->


<!--flexslider-->
<div id="mid">
<div class="container">
<div class="row">


  <div class="col-xs-12 col-md-8 col-md-offset-2"><section class="slider">
        <div class="flexslider">
          <ul class="slides">
   
           <li>
              <img src="assets/img/dubrovnik.png" alt="slide image" />
              <div class="container"><p class="flex-caption">Captions and cupcakes. Winning combination.</p></div>
            </li>
            <li>
              <img src="assets/img/hungerthon.png" alt="slide image" />
              <p class="flex-caption">Michael.</p>
            </li>
            <li>
              <img src="assets/img/imagine.png" alt="slide image" />
              <p class="flex-caption">Captions and cupcakes. Winning combination.</p>
            </li>
            
            <li>
              <img src="assets/img/linz.png" alt="slide image" />
              <p class="flex-caption">Captions and cupcakes. Winning combination.</p>
            </li>

            <li>
              <img src="assets/img/wiss.png" alt="slide image" />
              <p class="flex-caption">Captions and cupcakes. Winning combination.</p>
            </li>

            <li>
              <img src="assets/img/secret.png" alt="slide image" />
              <p class="flex-caption">Captions and cupcakes. Winning combination.</p>
            </li>

            <li>
              <img src="assets/img/port.png" alt="slide image" />
              <p class="flex-caption">Captions and cupcakes. Winning combination.</p>
            </li>
           
           

    </ul>

      </div>
    </div>
    

       
            
   
     
      
</section>

 <!--end flexslider--> 

  
</div>
</div>

</div>








<section>

         
          <div class="circles1" id="blurred"  data-stellar-background-ratio="0.4">
          <div class="container">
           <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 ">
            
            <div class="circ">
              <a href="#"><div class="circle"><p> Hello  <br>             I am a self taught web developer specializing in html5 and css3</p></a></div>
            </div>  
            
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 ">
            <div class="circ">
              <a href="#"><div class="circle"><p>I spend my free time learning about Ruby on Rails and Javascript <i class="fa fa-terminal"></p></i></div></a>
            </div>  
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 ">
            <div class="circ">
              <a href="#"><div class="circle"><p>I like to build </p></div></a>
            </div>  </div> 
            </div>
            </div>
          </div>
       
        </div>
        <div class="clearfix visible-xs"></div>
   </section>

   






</div>
</div>




<!--begin wordpress cms text-->



<div class="container">
<div class="row">
<div id="green">
      <div id="main" class="main <?php echo roots_main_class(); ?>" role="main">
      <div id="box-outer" data-stellar-background-ratio="0.4">
      <div class="box">
        <div class="back"></div><div >
        <?php include roots_template_path(); ?> </div>
    </div>
    </div>

      </div>




   <!-- /.main -->
 </div>
 </div>
 </div>
 </div>

</div>

<div class="row">
<section class=" col-3 color ss-style-zigzag col-xs-12 col-sm-12 col-md-12" id="zig">
	
</section>
</div>



<!-- Services -->
    <div id="services" class="services ">
     
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Spy on me</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 col-md-offset-2 text-center">
            <div class="service-item">
              <a class="github" href="https://github.com/MichaelWiss"><i class="service-icon fa fa-github"></i></a>
              <h4>Github</h4>
              <p>Did your navigation system shut down in the middle of that asteroid field? We can repair any dings and scrapes to your spacecraft!</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item">
              <a class="instagram" href="http://wegrams.com/knish72"><i class="service-icon fa fa-instagram"></i></a>
              <h4>Problem Solving</h4>
              <p>Need to know how magnets work? Our problem solving solutions team can help you identify problems and conduct exploratory research.</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item">
              <a class="linkedin" href="http://www.linkedin.com/pub/michael-wiss/3b/55a/7a0"><i class="service-icon fa fa-linkedin-square"></i></a>
              <h4>Linkedin</h4>
              <p>Planning a time travel trip to the middle ages? Preserve the space time continuum by blending in with period accurate armor and weapons.</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item">
              <a class="painting" href="http://michaelrwiss.com/"><i class="service-icon fa fa-pencil"></i></a>
              <h4>Pencil Sharpening</h4>
              <p>We've been voted the best pencil sharpening service for 10 consecutive years. If you have a pencil that feels dull, we'll get it sharp!</p>
            </div>
          </div>
        </div>
   
    </div>
    <!-- /Services -->


    <div class="" id="sub2" data-stellar-background-ratio="0.2">
<svg id="bigTriangleColor2" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none">
				<path d="M0 0 L50 100 L100 0 Z" />
			</svg>

</div>



    <!--chevron-->    
 

 <!--end chevron-->
 <div class="container-fluid">
 <div class="row " id="avantmap"></div>

<div class="row " id="map">
     <?php echo do_shortcode( '[wpgmza id="1"]' ); ?>



</div>
</div>
</div>


    </div><!-- /.content -->
  </div><!-- /.wrap -->
</div>





  <div id="almostfooter"  data-stellar-background-ratio="0.2" class:"container-fluid">
  <?php get_template_part('templates/footer'); ?>
  </div>




<!-- Javascripts -->

<script type="text/javascript">
    $(window).load(function () {
    $('.flexslider').flexslider({
        animation: "fade",
        controlsContainer: ".flex-container",
        slideshowSpeed: 5000,
        animationDuration: 1000,
        directionNav: true,
        controlNav: false,
        pauseOnHover: true,
        itemWidth: 1024
    });
});

$(document).ready(function () {
    $(".flex-container.home ul.flex-direction-nav").hide();
  $(".flex-container.home").hover( function () {
         $(" ul.flex-direction-nav").fadeToggle();
    });

})
  </script>

  <script>
		$(function(){
			$.stellar({
				horizontalScrolling: false,
				verticalOffset: 40
			});
		});
		</script>













</body>
</html>
