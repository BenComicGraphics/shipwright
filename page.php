<?php get_header(); ?>
<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
<div id="header-image" style="background-image:url(<?php echo $feat_image; ?>)">
  <section>
    <h2><?php the_title(); ?></h2>
  </section>
</div>

<div id="content">
  <section>
    <main>
      <article>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>     
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
      </article>
    </main>
  </section>
</div>


<?php get_footer(); ?>