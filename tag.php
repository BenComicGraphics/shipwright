<?php get_header(); ?>
  <article>
    <h1><?php _e( 'Tag Archives: ', 'shipwright' ); ?><span><?php single_tag_title(); ?></span></h1>
      
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php get_template_part('entry'); ?>
    <?php endwhile; endif; ?>
    <?php get_template_part('nav', 'below'); ?>
  </article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>