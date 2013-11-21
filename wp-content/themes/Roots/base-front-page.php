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
<?php putRevSlider("slider1") ?></div>

      
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
  



<!--end revo slider-->




<!--begin accordion-->


<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading" class="">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
        <button id="uno1" type="button"><span class="glyphicon glyphicon-circle-arrow-down button_text"></span> More Information</button>
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse "><div class="wrap container" role="document">
      <div class="accordion-inner">


      <!--begin resume-->
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
      <!-- end resume-->

      </div></div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
        <button id="uno"><span class="glyphicon glyphicon-circle-arrow-down button_text"></span> Even More Information</button>
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
        <?php echo do_shortcode( '[contact-form-7 id="116" title="Contact form 1"]' ); ?> </div>

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


  <div class="col-xs-12 col-md-8"><section class="slider">
        <div class="flexslider">
          <ul class="slides">
            <li>
              <img src="assets/img/Nature_Volcanoes_Chaiten_volcano_in_Chile_021391_.jpg" />
              <p class="flex-caption">Captions and cupcakes. Winning combination.</p>
            </li>
            <li>
              <img src="assets/img/APTOPIX.jpg" alt="slide image" />
              <p class="flex-caption">Captions and cupcakes. Winning combination.</p>
            </li>

    </ul>

      </div>
    </div>
    

       
            
   
     
      
</section>

 <!--end flexslider--> 

  <div class="col-xs-2 col-xs-10 col-md-4">

 

    <div class="bs-example bs-example-tabs">
      <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
        <li><a href="#profile" data-toggle="tab">Profile</a></li>
        <li class="dropdown">
          <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
            <li><a href="#dropdown1" tabindex="-1" data-toggle="tab">@fat</a></li>
            <li><a href="#dropdown2" tabindex="-1" data-toggle="tab">@mdo</a></li>
          </ul>
        </li>
      </ul>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="home">
          <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
        </div>
        <div class="tab-pane fade" id="profile">
          <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
        </div>
        <div class="tab-pane fade" id="dropdown1">
          <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
        </div>
        <div class="tab-pane fade" id="dropdown2">
          <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
        </div>
      </div>
    </div></div>



  </div></div>
</div>
</div>
</div>

</div>


<div id="blurred"  data-stellar-background-ratio="0.4">


<section>

          <div class="row">
          <div class="circles1">
          <div class="container">
            <div class="col-xs-12 col-sm-4 col-md-4 ">
            
            <div class="circ">
              <a href="#"><div class="circle"><p> Hello I am A Circle Hello I am A CircleHello I am A CircleHello I am A CircleHello I am A CircleHello I am A CircleHello I am A CircleHello I am A Circle</p></a></div>
            </div>  
            
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 ">
            <div class="circ">
              <a href="#"><div class="circle"><p>Hello I am A Circle </p></div></a>
            </div>  
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 ">
            <div class="circ">
              <a href="#"><div class="circle">Hello I am A Circle </div></a>
            </div>  </div> 
            </div>
            </div>
          </div>
       
        </div>
        <div class="clearfix visible-xs"></div>
   </section>

   
<script>
		$(function(){
			$.stellar({
				horizontalScrolling: false,
				verticalOffset: 40
			});
		});
		</script>





</div>
</div>


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

      </div><!-- /.main -->
 </div>
 </div>
 </div>
 </div>

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
              <h4>Spacecraft Repair</h4>
              <p>Did your navigation system shut down in the middle of that asteroid field? We can repair any dings and scrapes to your spacecraft!</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item">
              <i class="service-icon fa fa-instagram"></i>
              <h4>Problem Solving</h4>
              <p>Need to know how magnets work? Our problem solving solutions team can help you identify problems and conduct exploratory research.</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item">
              <i class="service-icon fa fa-linkedin-square"></i>
              <h4>Blacksmithing</h4>
              <p>Planning a time travel trip to the middle ages? Preserve the space time continuum by blending in with period accurate armor and weapons.</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item">
              <i class="service-icon fa fa-pencil"></i>
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



<div class="row ">

  <div id="almostfooter"  data-stellar-background-ratio="0.2">
  <?php get_template_part('templates/footer'); ?>
  </div>
</div>



</body>
</html>
