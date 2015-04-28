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
        <h3 class="title"><?php the_title(); ?></h3>
        <cite><?php the_author_posts_link(); ?></cite> |
        <time><?php the_time( get_option('date_format') ); ?></time>
        <?php the_content(); ?>
        <span class="cat-links"><?php the_category(', '); ?></span>
        <span class="tag-links"><?php the_tags(); ?></span>           
        <?php if ( ! post_password_required() ) comments_template('', true); ?>
      <?php endwhile; endif; ?>
      </article>
    </main>
  </section>
</div>


<?php get_footer(); ?>