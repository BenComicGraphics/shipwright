<?php
/*
Template Name: Partnership Page
*/
?>
<?php get_header(); ?>

<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
<div id="header-image" class="vert-bottom" style="background-image:url(<?php echo $feat_image; ?>)">
  <section>
    <h2><?php the_title(); ?></h2>
    <h3><?php the_field('sub_title'); ?></h3>
  </section>    
</div>
    
<div class="headlinez">
  <section>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>     
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </section>    
</div>

<?php if( have_rows('employees') ): ?>
<div id="employees">
  <section>
    <ul>
<?php while ( have_rows('employees') ) : the_row(); ?>
      <li class="box-1-3"><figure style="background-image: url(<? the_sub_field('photo'); ?>);"><figcaption><? the_sub_field('name'); ?></figcaption></figure></li>  
<?php endwhile; ?>
    </ul>  
  </section>    
</div>
<?php endif;?>     


<?php wp_reset_query(); ?>
<?php $the_query = new WP_Query( 'showposts=4' ); ?>
<div id="newsfeed">
  <section>
    <h3>News</h3>        
    <ul>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
      <li>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <a href="<?php the_permalink();?>"><figure style="background-image: url(<?php echo $image[0]; ?>);"></figure></a>
        <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink();?>" class="readmore">READ MORE</a>
      </li>  
<?php endwhile;?>
    </ul>      
  </section>    
</div>

<?php get_footer(); ?>