<?php get_header(); ?>
<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
<div id="header-image" style="background-image:url(<?php echo $feat_image; ?>)">
  <section>
    <h2><?php printf( __( 'Search Results for: %s', 'shipwright' ), get_search_query() ); ?></h2>
  </section>
</div>

<div id="archive">
  <section>
    <main>
        
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <article>
          <figure class="featured" style="background-image: url(<?php echo $feat; ?>)"></figure>
          <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <?php the_excerpt(); ?>
          <span class="cat-links"><?php the_category(', '); ?></span>
          <span class="tag-links"><?php the_tags(); ?></span>                
        </article>  
      <?php endwhile; ?>
      <?php else : ?>
        <article>
          <h3 class="title"><?php _e( 'Nothing Found', 'shipwright' ); ?></h3>
          <p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'shipwright' ); ?></p>
          <?php get_search_form(); ?>    
        </article>
      <?php endif; ?>      
	  <?php get_template_part('nav', 'below'); ?>             

      </article>
    </main>
  </section>
</div>

<?php get_footer(); ?>











<?php get_header(); ?>
<div id="header-image" style="background-image:url(<?php echo $feat_image; ?>)">
  <section>
    <h1><?php printf( __( 'Search Results for: %s', 'shipwright' ), get_search_query() ); ?></h1>
  </section>
</div>
<div id="content">
  <section>
    <main> 
    <?php if ( have_posts() ) : ?>
      
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('entry'); ?>
      <?php endwhile; ?>
      <?php get_template_part('nav', 'below'); ?>
    <?php else : ?>
        <h1><?php _e( 'Nothing Found', 'shipwright' ); ?></h1>
        <p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'shipwright' ); ?></p>
        <?php get_search_form(); ?>
    <?php endif; ?>
    </main>
    <?php get_sidebar(); ?>
  </section>
</div>
<?php get_footer(); ?>