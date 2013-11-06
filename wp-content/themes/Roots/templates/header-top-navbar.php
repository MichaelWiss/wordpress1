 <div id="nav">
 <header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>
    

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
   
    <script>
    $(window).load(function(){
      $("header").sticky({ topSpacing: 0 });
    });
  </script>
  <script>
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
});
  </script>
<script>
  $(function() {
    $(window).scroll(function(){
        var scrollTop = $(window).scrollTop();
        if(scrollTop != 0)
            $('header').stop().animate({'opacity':'0.1'},400);
        else   
            $('header').stop().animate({'opacity':'1'},400);
    });
     
    $('header').hover(
        function (e) {
            var scrollTop = $(window).scrollTop();
            if(scrollTop != 0){
                $('header').stop().animate({'opacity':'1'},400);
            }
        },
        function (e) {
            var scrollTop = $(window).scrollTop();
            if(scrollTop != 0){
                $('header').stop().animate({'opacity':'0.1'},400);
            }
        }
    );
});
  </script>
  <!--<script>
  $(window).on('scroll', function() {
    console.log($(this).scrollTop());
    if ($(this).scrollTop() > 150 && !$('header').hasClass('visible')) {
        $('header').animate({opacity : 1}, 'slow', function() {
            $(this).addClass('visible').removeAttr('style');
        });
    } else if ($(this).scrollTop() <= 150 && $('header').hasClass('visible')) {
        $('header').animate({opacity : 0}, 'slow', function() {
            $(this).removeClass('visible').removeAttr('style');
        });
    }
});
  </script>-->
  </div>
</header>
 </div>
