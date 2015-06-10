<?php get_header(); ?>
<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
<div id="header-image" style="background-image:url(<?php echo $feat_image; ?>)">
  <section>
    <h2><?php 
        if ( is_day() ) { printf( __( 'Daily Archives: %s', 'shipwright' ), get_the_time(get_option('date_format') ) ); }
        elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'shipwright' ), get_the_time('F Y') ); }
        elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'shipwright' ), get_the_time('Y') ); }
        else { _e( 'Archives', 'shipwright' ); }
      ?></h2>
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
      <?php endwhile; endif; ?>      
	  <?php get_template_part('nav', 'below'); ?>             

      </article>
    </main>
  </section>
</div>

<?php get_footer(); ?>