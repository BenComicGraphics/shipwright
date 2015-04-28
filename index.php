<?php get_header(); ?>
<div id="header-image" style="background-image:url(<?php echo $feat_image; ?>)">
  <section>
    <h1><?php the_title(); ?></h1>
  </section>
</div>
<div id="content">
  <section>
    <main> 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php get_template_part('entry'); ?>
      <?php comments_template(); ?>
    <?php endwhile; endif; ?>
    <?php get_template_part('nav', 'below'); ?>
    </main>
    <?php get_sidebar(); ?>
  </section>
</div>
<?php get_footer(); ?>