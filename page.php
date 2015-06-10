<?php get_header(); ?>

<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
<div id="single-header" style="background-image: url(<?php echo $feat_image; ?>);">
  <section>

  </section>    
</div>
    
<div id="content">
  <section>
    <main>
      <h1 class="post-title"><?php the_title(); ?></h1>    
      <span class="meta"></span>
      <article>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

        <?php the_content(); ?>

<?php endwhile; endif; ?>
        
      </article>  
    </main>  
  </section>    
</div>

<?php get_footer(); ?>