<?php get_header(); ?>
<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
<div id="header-image" style="background-image:url(<?php echo $feat_image; ?>)">
  <section>
    <h2><?php _e( 'Not Found', 'shipwright' ); ?></h2>
  </section>
</div>

<div id="content">
  <section>
    <main>
      <article>
      <p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'shipwright' ); ?></p>
      
      <?php get_search_form(); ?>    
      </article>
    </main>
  </section>
</div>


<?php get_footer(); ?>