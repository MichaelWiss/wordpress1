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
  






<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading" class="">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
        <button id="uno1" type="button"><span class="glyphicon glyphicon-circle-arrow-down button_text"></span> More Information</button>
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse "><div class="wrap container" role="document">
      <div class="accordion-inner">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consequat, orci ac laoreet cursus, dolor sem luctus lorem, eget consequat magna felis a magna. Aliquam scelerisque condimentum ante, eget facilisis tortor lobortis in. In interdum venenatis justo eget consequat. Morbi commodo rhoncus mi nec pharetra. Aliquam erat volutpat. Mauris non lorem eu dolor hendrerit dapibus. Mauris mollis nisl quis sapien posuere consectetur. Nullam in sapien at nisi ornare bibendum at ut lectus. Pellentesque ut magna mauris. Nam viverra suscipit ligula, sed accumsan enim placerat nec. Cras vitae metus vel dolor ultrices sagittis. Duis venenatis augue sed risus laoreet congue ac ac leo. Donec fermentum accumsan libero sit amet iaculis. Duis tristique dictum enim, ac fringilla risus bibendum in. Nunc ornare, quam sit amet ultricies gravida, tortor mi malesuada urna, quis commodo dui nibh in lacus. Nunc vel tortor mi. Pellentesque vel urna a arc
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
        <?php echo do_shortcode( '[contact-form-7 id="118" title="first"]' ); ?> </div>
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
       <div id="map-canvas">nnnnnnnnnn


       nnnnnnnnnnnnnnnnnnn




       </div>
      </div>
    </div>
  </div>
</div>
</div>
<div id="sub">
<svg id="bigTriangleColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none">
				<path d="M0 0 L50 100 L100 0 Z" />
			</svg>

</div>

<script>
$('#mid' 'blurred').bind('inview', function(event, isInView, visiblePartX, visiblePartY) {
  if (isInView) {
    // element is now visible in the viewport
    if (visiblePartY == 'top') {
      // top part of element is visible
    } else if (visiblePartY == 'bottom') {
      // bottom part of element is visible
    } else {
      // whole part of element is visible
    }
  } else {
    // element has gone out of viewport
  }
});
</script>

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

       
            
      </section>



  

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
    </div



  </div></div>
</div>
</div>
</div>
<div class="ss-style-zigzag col-md-12">
</div>


<div id="blurred"  data-stellar-background-ratio="0.4">


<section>
<div class="container">
          <div class="row">
          <div class="circles1">
            <div class="col-xs-12 col-sm-4 col-md-4 ">
            
            <div class="circ"
              <a href="#"><img class="img-responsive img-circle" src="assets/img/feat1.jpg"></a>
            </div>  
            
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 ">
            <div class="circ"
              <a href="#"><img class="img-responsive img-circle" src="assets/img/feat1.jpg"></a>
            </div>  
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 ">
            <div class="circ"
              <a href="#"><img class="img-responsive img-circle" src="assets/img/feat1.jpg"></a>
            </div>  
            </div>
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

<div class="container">
<div class="row">
<div id="green">
      <div id="main" class="main <?php echo roots_main_class(); ?>" role="main">
      <div class="box-outer">
      <div class="box">
        <div class="back"></div><div class="text">
        <?php include roots_template_path(); ?> </div>
    </div>
    </div>

      </div><!-- /.main -->
 </div>
 </div>
 </div>
    
      
<div class="row">


<!-- Services -->
    <div id="services" class="services">
      <div class="container">
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
    </div>
    <!-- /Services -->

      <div id="contact" class="map">
      <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a></small></iframe>
    </div>
    <!-- /Map -->


    </div><!-- /.content -->
  </div><!-- /.wrap -->




  <div id="almostfooter"  data-stellar-background-ratio="0.2">
  <?php get_template_part('templates/footer'); ?>
  </div>
</div>



</body>
</html>
