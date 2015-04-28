<footer id="page-foot">
  <section>
    
    <address>
      <h3>Contact Us</h3>
      <?php if(get_field('street_address')){ ?><?php the_field('street_address', 'options'); ?>  <?php } ?>
    </address>
    
    <ul class="social">
      <li class="header"><h3>Share</h3></li>
      <?php if(get_field('facebook', 'options')){ ?> 
        <li class="fb"><a href="<?php the_field('facebook', 'options'); ?>" target="_blank"><span>Facebook</span></a></li> 
      <?php } ?> 
      <?php if(get_field('twitter', 'options')){ ?> 
        <li class="tw"><a href="<?php the_field('twitter', 'options'); ?>" target="_blank"><span>Twitter</span></a></li> 
      <?php } ?> 
      <?php if(get_field('google_plus', 'options')){ ?> 
        <li class="gp"><a href="<?php the_field('google_plus', 'options'); ?>" target="_blank"><span>Google Plus</span></a></li>  
      <?php } ?> 
      <?php if(get_field('pinterest', 'options')){ ?> 
        <li class="pi"><a href="<?php the_field('pinterest', 'options'); ?>" target="_blank"><span>Pinterest</span></a></li> 
      <?php } ?> 
      <?php if(get_field('youtube', 'options')){ ?> 
        <li class="yt"><a href="<?php the_field('youtube', 'options'); ?>" target="_blank"><span>YouTube</span></a></li>
      <?php } ?> 
      <?php if(get_field('linkedin', 'options')){ ?> 
        <li class="in"><a href="<?php the_field('linkedin', 'options'); ?>" target="_blank"><span>LinkedIn</span></a></li> 
      <?php } ?> 
      <?php if(get_field('tumblr', 'options')){ ?> 
        <li class="tu"><a href="<?php the_field('tumblr', 'options'); ?>" target="_blank"><span>Tumblr</span></a></li>
      <?php } ?> 
      <?php if(get_field('vimeo', 'options')){ ?> 
        <li class="vi"><a href="<?php the_field('vimeo', 'options'); ?>" target="_blank"><span>Vimeo</span></a></li>
      <?php } ?> 
      <?php if(get_field('instagram', 'options')){ ?> 
        <li class="ig"><a href="<?php the_field('Instagram', 'options'); ?>" target="_blank"><span>Instagram</span></a></li>
      <?php } ?> 
    </ul>
    
    <nav>
      <h3><?php bloginfo('name'); ?></h3>
      <?php wp_nav_menu( array( 'menu' => 'Main Menu','menu_id' => 'main','container' => false ) ); ?>       
    </nav>

    <cite>Copyright <?php echo esc_html( get_bloginfo('name') ); ?></cite>
    
    
    <a href="http://www.steadfastcreative.com/" target="_blank" class="sfc"><span>Site by Steadfast Creative</span></a>
  </section>
</footer>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/footer.js"></script>
<?php wp_footer(); ?>
</body>
</html>