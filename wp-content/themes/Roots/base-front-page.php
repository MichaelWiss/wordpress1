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
              <h3><a id="pdf" href="http://localhost/wordpress1/media/Michael-Wiss_2013.pdf">Download PDF</a></h3>
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
								Educated as a fine artist I am now pursuing a career in web development.  I believe that we are still in the nascent stage of our ability to express ourselves on the web and I am determined to be involved in it's development.    
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
									<h2>Front End Development</h2>
									<p>I have a solid foundation using HTML5 and CSS3 to build static and wordpress sites.	</p>
								</div>

								<div class="col-md-3-md col-sm-3 col-xs-12">
									<h2>Responsive Web Design</h2>
									<p>I understand media queries and have a firm understanding of the latest grid frameworks .	 </p>
								</div>

								<div class="col-md-3-offset-1 col-sm-3 col-xs-12">
									<h2>Ruby on Rails student</h2>
									<p>Most of my free time is spent devoted to learning Ruby on Rails.</p>
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
								<li class="last">Command Line</li>
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
								<h4>2012-2013</h4>
								<p>At WhyHunger I worked with all of the programs in the organization to support a variety of online properties.  This included managing service requests, updates, analytics tracking and reporting and construction of new pages and features and independent wordpress sites.  I also collaborated with outside vendors to ensure timely delivery and installation of products.  I acted as the one and only web tech at WhyHunger and as consultant to the organization regarding web based communication goals. </p>
							</div>
							</div>
							</div>

<div class="row">
            <div class="col-md-9 col-md-offset-3 col-sm-9-offset-3 col-xs-12">
							<div class="job">
								<h2>Freelance</h2>
								<h3>Freelancer</h3>
								<h4>2011</h4>
								<p>I am skilled in HTML5, CSS3, Jquery, Javascript, Responsive web development(mobile) and Wordpress.  I have basic understanding of the Symfony and Ruby on Rails MVC frameworks. </p>
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

<!--- end resume-->

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
      
       

       <div id="map1"></div>




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
              <a href="http://www.dubrovnikcontemporary.com/"><img src="assets/img/dubrovnik.png" alt="slide image" /></a>
              <div class="container"><p class="flex-caption">Static gallery site.</p></div>
            </li>
            <li>
              <img src="assets/img/hungerthon.png" alt="slide image" />
              <p class="flex-caption">Promotional site for charity drive.</p>
            </li>
            <li>
              <a href="http://whyhunger.org/imagine"><img src="assets/img/imagine.png" alt="slide image" /></a>
              <p class="flex-caption">Informative map page created in Symfony framework.</p>
            </li>
            
            <li>
              <a href="http://www.linzinc.com/"><img src="assets/img/linz.png" alt="slide image" /></a>
              <p class="flex-caption">Online shop for independent couture designer.</p>
            </li>

            <li>
              <a href="http://elburromediagroup.com/"><img src="assets/img/wiss.png" alt="slide image" /></a>
              <p class="flex-caption">Api plugins</p>
            </li>

            <li>
              <a href="http://secretargot.com/"><img src="assets/img/secret.png" alt="slide image" /></a>
              <p class="flex-caption">My favorite mp3s.  Big in Krasnodar Krai</p>
            </li>

            <li>
              <a href="http://spectacularvernacular.net/"><img src="assets/img/port.png" alt="slide image" /></a>
              <p class="flex-caption">My fine art portfolio. Old.</p>
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
              <div class="circle"><p><b> Hello  </b><br>             I am a self taught web developer specializing in html5 and css3</p></div>
            </div>  
            
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 ">
            <div class="circ">
              <div class="circle"><p><b> Hello  </b><br> I spend my free time learning about Ruby on Rails and Javascript</p></div>
            </div>  
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 ">
            <div class="circ">
              <div class="circle"><p><b> Hello  </b><br> I like to build </p></div>
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
              <p>I compulsively push to Github</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item">
              <a class="instagram" href="http://wegrams.com/knish72"><i class="service-icon fa fa-instagram"></i></a>
              <h4>Instagram</h4>
              <p>Pictures of food and old Chinese people.</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item">
              <a class="linkedin" href="http://www.linkedin.com/pub/michael-wiss/3b/55a/7a0"><i class="service-icon fa fa-linkedin-square"></i></a>
              <h4>Linkedin</h4>
              <p>Out of date.</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item">
              <a class="painting" href="http://spectacularvernacular.net/"><i class="service-icon fa fa-pencil"></i></a>
              <h4>Pencil Sharpening</h4>
              <p>My Fine Art</p>
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



<?php get_template_part('templates/footer'); ?>

  <div id="almostfooter"  data-stellar-background-ratio="0.2" class:"container-fluid">
 




   <div class="row">
          <div class="col-md-2 col-md-offset-2 text-center">
            <div class="service-item1">
              <a class="beer" href="#"><i class="service-icon1 beer fa fa-beer"></i></a>
              <h4>Spirits</h4>
             <p>I enjoy them occasionally having recently discovered the joys of whiskey!</p>
           </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item1">
              <a class="cutlery" href="http://eatbook.herokuapp.com/"><i class="service-icon1 fa fa-cutlery"></i></a>
              <h4>Eating</h4>
          <p>I am an exotic eater.  If I have never eaten it before the more I'd like to.</p>
           </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item1">
              <a class="headphones" href="#"><i class="service-icon1 glyphicon glyphicon-headphones"></i></a>
              <h4>Music</h4>
             <p>Always listening to some jams.</p>
           </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item1">
              <a class="globe" href="#"><i class="service-icon1 glyphicon glyphicon-globe"></i></a>
              <h4>Travel</h4>
             <p>I get the wanderlust from my father!</p>
          </div>
          </div>
          </div>
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



    <script>

           
           
           $('#map1').mapSvg({source:'assets/maps/world_with_states.svg',    // Path to SVG map
                
                                 
                pan: true,
                zoom:true,

             
                colors:{
                background:"transparent",
                stroke: "#AEB1B8"},


                regions :       {
                                  
 'USA': {tooltip: '<strong>USA</strong>: Average Income<br>Top Quintile: &#36;91,705<br>Medium Quintile: &#36;36,000<br>Bottom Quintile: &#36;19,178'},

'Mexico': {attr: {fill: '#F2852C', href: 'http://google.com', 'cursor': 'help'}},

'Ireland': {attr: {fill: '#0CF23A', }},
'United_Kingdom': {attr:{fill:'#630723', }},
'France': {attr: {fill: '#DB584F',  }},
'Germany': {attr: {fill: '#EDEA4A', }},
'Italy': {attr: {fill: '#904AED', }},


'Taiwan': {attr: {fill: '#053B15', href: 'http://en.wikipedia.org/wiki/Taipei', 'cursor': 'help'}},
                                  'Yemen': {tooltip: 'You are above Yemen!'},
                                  
                                  'Kazakhstan': {tooltip: '<img src="assets/flags/kazakhstan.gif" align="left"/> &nbsp;<strong>Kazakhstan</strong>  - the ninth largest country in the world.'},
                                  'Mongolia': {tooltip: 

'<iframe width="200" height="150" src="http://www.youtube.com/embed/RVlpZ35d7tc"  frameborder="0",autoplay:"0", allowfullscreen, ></iframe>'





},
                                  'China': {selected: false, tooltip: '<img src="assets/flags/china.jpg" align="left"/> &nbsp;<strong>China</strong> is the world\'s most-populous country.'},
                                  'Norway': {tooltip: '<img src="assets/flags/norway.png" align="left"/> &nbsp;<strong>Norway</strong>'},
                                  'Brazil': {tooltip: '<img src="assets/flags/brazil.gif" align="left"/> &nbsp;<strong>Brazil</strong> is the largest country in South America.'}
                                },
                marks:          [
                                    

                                    { c: [45.09206533828506, -93.0099105834961],
                                    attrs: {'src': 'assets/markers/pin1_orange.png'},
                                      tooltip: 'I was raised in <strong>White Bear Lake, MN</strong><br /><img src="http://farm6.staticflickr.com/5102/5854458755_d2d689de67.jpg" width="320" height="256" alt="Beautiful Sunrise"></a>',
                                    },

                   { c: [40.65, -73.95],
                                      attrs: {'src': 'assets/markers/pin1_blue.png'},
                                        tooltip: 'I currently reside in  <strong>Brooklyn</strong><br /><img src="http://farm4.staticflickr.com/3202/2818368602_86923e77c6_n.jpg" width="320" height="256" alt="Sunset Park, Brooklyn">',
                                      },
  
                    { c: [25.091075, 121.559834],
                                        attrs: {'src': 'assets/markers/pin1_red.png'},
                                          tooltip: 'I was born in   <strong>Taipei, Taiwan</strong><br /><img src="http://farm4.staticflickr.com/3485/3936451631_403f126435_n.jpg" width="320" height="213" alt="Good Morning,Taipei"></a>',
                                        },  

  
                    { c: [27.508271413876013, -99.51416015625],
                                        attrs: {'src': 'assets/markers/pin1_violet.png'},
                                          tooltip: 'The end of a roadtrip  <strong>Laredo</strong><br /><img src="http://farm3.staticflickr.com/2114/2118758365_50d50d856f.jpg" width="239" height="320" alt="DSCN4967">',
                                        },

                      { c: [53.344104, -6.267494],
                                          attrs: {'src': 'assets/markers/pin1_violet.png'},
                                            tooltip: 'The beginning of a post High School trip in <strong>Dublin</strong><br /><a href="http://www.flickr.com/photos/2cme/6908957463/" title="Dublin, Ireland. by 2c.., on Flickr"><img src="http://farm8.staticflickr.com/7049/6908957463_4532e985e6_n.jpg" width="320" height="213" alt="Dublin, Ireland."></a>',
                                          },


                                    { c: [51.49763,-0.148315],
                                      attrs: {'src': 'assets/markers/pin1_green.png'},
                                      tooltip: '<strong>London</strong> Second stop on European trip<br /><a href="http://www.flickr.com/photos/tonybill/7495336866/" title="Somerset House, London by tonybill, on Flickr"><img src="http://farm8.staticflickr.com/7120/7495336866_646096d6a7_n.jpg" width="320" height="213" alt="Somerset House, London"></a>',
                                    },

                  { c: [48.856614, 2.352222],
                                      attrs: {'src': 'assets/markers/pin1_yellow.png'},
                                        tooltip: 'I began hitchhiking in  <strong>Paris</strong><br /><img src="http://farm8.staticflickr.com/7222/6886562948_98e3e2b6c6_n.jpg" width="320" height="213" alt="View of Rooftops, Chimneys &amp; Landmarks from the Marais, Paris"></a>',
                                      },
  
                    { c: [52.519171, 13.406091],
                                        attrs: {'src': 'assets/markers/pin1_black.png'},
                                          tooltip: 'I explored the artist colonies of <strong>East Berlin</strong><br /><a href="http://www.flickr.com/photos/joao/2243081528/" title="Hallo Tacheles 4 by joaobambu, on Flickr"><img src="http://farm3.staticflickr.com/2312/2243081528_12f22e4e2c_m.jpg" width="195" height="240" alt="Hallo Tacheles 4"></a>',
                                        },
    
                      { c: [44.49419, 11.346518],
                                          attrs: {'src': 'assets/markers/pin1_grey.png'},
                                            tooltip: 'After hitchhiking  through the Alps I came to <strong>Bologna</strong><br /><a href="http://www.flickr.com/photos/59436014@N00/2043001625/" title="Bologna by marikuz1975, on Flickr"><img src="http://farm3.staticflickr.com/2388/2043001625_786d46d798_n.jpg" width="320" height="213" alt="Bologna"></a>',
                                          },

                        { c: [43.768732, 11.256901],
                                            attrs: {'src': 'assets/markers/pin1_red.png'},
                                              tooltip: ' <strong>Florence</strong> was my third hichhiking stop. <br /><a href="http://www.flickr.com/photos/rogima/3165122786/" title="Firenze by rogima, on Flickr"><img src="http://farm2.staticflickr.com/1029/3165122786_9bff9af092_n.jpg" width="320" height="190" alt="Firenze"></a>',
                                            },
        
                          { c: [41.89052, 12.494249],
                                              attrs: {'src': 'assets/markers/pin1_blue.png'},
                                                tooltip: ' In <strong>Rome</strong> I sought the Pope. <br /><a href="http://www.flickr.com/photos/craddison/5219083981/" title="Vatican City Rome by CRAddison, on Flickr"><img src="http://farm5.staticflickr.com/4128/5219083981_4471a828bf.jpg" width="320" height="190" alt="Vatican City Rome"></a>',
                                              },
                                 ],

                tooltipsMode:    'combined'

            });



</script>













</body>
</html>
