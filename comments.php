<?php if ( 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']) ) return; ?>
<div id="comments">
<?php 
if ( have_comments() ) : 
global $comments_by_type;
$comments_by_type = &separate_comments( $comments );
if ( ! empty($comments_by_type['comment']) ) : 
?>
  <h3 class="comments-title"><?php comments_number(); ?></h3>
<?php if ( get_comment_pages_count() > 1 ) : ?>
  <nav id="comments-nav-above" class="comments-navigation" role="navigation">
    <?php paginate_comments_links(); ?>
  </nav>
<?php endif; ?>
<ul>
<?php wp_list_comments('type=comment'); ?>
</ul>
<?php if ( get_comment_pages_count() > 1 ) : ?>
<nav id="comments-nav-below" class="comments-navigation" role="navigation">
  <?php paginate_comments_links(); ?>
</nav>
<?php endif; ?>
</div>
<?php 
endif; 
if ( ! empty($comments_by_type['pings']) ) : 
$ping_count = count($comments_by_type['pings']); 
?>
<div id="comments">
  <h3 class="comments-title"><?php echo '<span>'.$ping_count.'</span> '.($ping_count > 1 ? __( 'Trackbacks', 'shipwright' ) : __( 'Trackback', 'shipwright' ) ); ?></h3>
<ul>
<?php wp_list_comments('type=pings&callback=shipwright_custom_pings'); ?>
</ul>
</section>
<?php 
endif; 
endif;
if ( comments_open() ) comment_form();
?>
</div>