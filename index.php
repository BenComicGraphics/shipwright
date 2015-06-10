<?php get_header(); ?>
<div id="header-image" class="vert-bottom" style="background-image:url(<?php the_field('blog_header','options'); ?>)">
  <section>
    <h2><?php the_title(); ?></h2>
  </section>
</div>
<div id="archive">
  <section>
     <?php echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="9" max_pages="0" button_label="Show More"]'); ?>
  </section>
</div>
<?php get_footer(); ?>