<?php
/*
Template Name: Front Page
*/
?>
<?php get_header(); ?>
<div id="header-image">
<?php if( have_rows('slides') ): ?>
  <ul class="bxslider">
  <?php while ( have_rows('slides') ) : the_row(); ?>
    <li class="full-height"  style="background-image: url(<?php the_sub_field('image'); ?>);">
      <div class="full-height vert-center">
        <section>
          <h2><?php the_sub_field('title'); ?></h2> 
          <a href="<? the_sub_field('cta_link'); ?>" class="cta"><?php the_sub_field('cta_text'); ?></a>
        </section>
      </div>
    </li>
  <?php endwhile; ?>
  </ul>
<?php endif;?>     
</div>

<div id="intro">
  <section>
    <main>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>     
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </main>
  </section>
</div>

<?php get_footer(); ?>