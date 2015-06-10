<footer id="page-foot">
  <section>
      
    <h5 class="footer-logo box-1-4">
      <a href="#" style="background-image: url(<?php the_field('footer_logo', 'options'); ?>);"><span>Harkinson Investment Corporation</span></a>  
    </h5>  
    
    <address>
      <h5>Contact</h5>
      <?php if(get_field('street_address','options')){ ?><a href="<?php the_field('maps_link', 'options'); ?>"><?php the_field('street_address', 'options'); ?></a><?php } ?><br /><br />
        
      <?php if(get_field('phone_number','options')){ ?><a href="tel:<?php the_field('phone_number','options'); ?>"><?php the_field('phone_number','options'); ?></a><?php } ?><br />
      <?php if(get_field('phone_number_2','options')){ ?><a href="tel:<?php the_field('phone_number_2','options'); ?>"><?php the_field('phone_number_2','options'); ?></a><?php } ?><br />
      <?php if(get_field('email_address','options')){ ?><a href="mailto:<?php the_field('email_address','options'); ?>"><?php the_field('email_address','options'); ?></a><?php } ?><br />
    </address>
    
    <nav class="footer-nav">
      <h5>Site Map</h5>  
      <?php wp_nav_menu( array( 'menu' => 'Footer Menu','menu_class' => 'threecol','container' => false ) ); ?>          

    </nav>
    
  </section>
  <div class="bottombar">
    <section>
      <cite>Copyright <?php echo esc_html( get_bloginfo('name') ); ?></cite>
      <a href="http://www.steadfastcreative.com/" target="_blank" class="sfc"><span>Site by Steadfast Creative</span></a>
    </section>
  </div>
</footer>
<?php the_field('google_analytics', 'options'); ?>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/footer.js"></script>
<?php wp_footer(); ?>
<script>
jQuery(function ($) {  
   // Filter Ajax Load More
   var alm_is_animating = false;
  
   // Nav btn click event
   $('#portfolio-filters li a').on('click', function(e){    
      e.preventDefault();  
      var el = $(this); // Our selected element     
      
      if(!el.hasClass('active') && !alm_is_animating){ // Check for active and !alm_is_animating  
         alm_is_animating = true;   
         $('.active').removeClass('active');
         el.parent().addClass('active'); // Add active state       
      
         var data = el.data(), // Get data values from selected menu item
             transition = 'fade', // 'slide' | 'fade' | null
             speed = '300'; //in milliseconds
             
         $.fn.almFilter(transition, speed, data); // reset Ajax Load More (transition, speed, data)     
      }      
   });
   
   $.fn.almFilterComplete = function(){      
      alm_is_animating = false; // clear alm_isanimating flag
   };
   
}); 
</script>
</body>
</html>