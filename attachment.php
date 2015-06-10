<?php get_header(); ?>
  
    <?php global $post; ?>
    
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article>
        <h1><?php the_title(); ?> | <a href="<?php echo get_permalink($post->post_parent); ?>" title="<?php printf( __( 'Return to %s', 'shipwright' ), esc_html( get_the_title($post->post_parent), 1 ) ); ?>" rev="attachment"><span class="meta-nav">&larr; </span><?php echo get_the_title($post->post_parent); ?></a></h1> <?php edit_post_link(); ?>
      
        <?php get_template_part('entry', 'meta'); ?>
      </article>
      
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <nav id="nav-above" class="navigation" role="navigation">
          <div class="nav-previous">&larr; <?php previous_image_link(false); ?></div>
          <div class="nav-next"><?php next_image_link(false); ?> &rarr;</div>
        </nav>
      
	    <?php if ( wp_attachment_is_image( $post->ID ) ) : $att_image = wp_get_attachment_image_src( $post->ID, "large"); ?>
          <figure>
            <a href="<?php echo wp_get_attachment_url($post->ID); ?>" title="<?php the_title(); ?>" rel="attachment"><img src="<?php echo $att_image[0]; ?>" width="<?php echo $att_image[1]; ?>" height="<?php echo $att_image[2]; ?>" class="attachment-medium" alt="<?php $post->post_excerpt; ?>" /></a>
            <figcaption><a href="<?php echo wp_get_attachment_url($post->ID); ?>" title="<?php echo esc_html(get_the_title($post->ID), 1); ?>" rel="attachment"><?php echo basename($post->guid); ?></a></figcaption>
          </figure>
        <?php else : ?>
        <?php endif; ?>
        
        <div class="entry-caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); ?></div>
        
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>

      </article>
      
      <?php comments_template(); ?>
      
    <?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>