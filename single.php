<?php get_header(); ?>

<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
<div id="single-header" style="background-image: url(<?php echo $feat_image; ?>);">
  <section>

  </section>    
</div>
    
<div id="content">
  <section>
    <main>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
      <h1 class="post-title"><?php the_title(); ?></h1>    
      <span class="meta"><time><?php the_time( get_option('date_format') ); ?></time>  •  <cite>BY <?php the_author(); ?></cite></span>
      <article>


        <?php the_content(); ?>


        
      </article>  
<?php endwhile; endif; ?>
    </main>  
  </section>    
</div>
      
<div id="pagination">
  <nav>
    <?php if (get_adjacent_post(false, '', false)): // if there are newer posts ?><?php next_post_link( 'Previous Post' ); ?><?php endif; ?>
    <?php if (!get_adjacent_post(false, '', false)): // if there are newer posts ?><?php previous_post_link( 'Next Post' ); ?><?php endif; ?>
  </nav>    
</div>

<?php get_footer(); ?>