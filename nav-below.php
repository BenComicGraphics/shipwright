<?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) { ?>
<nav class="pagination">
  <?php next_posts_link(sprintf(__( '%s older', 'shipwright' ), '&lt;' )) ?>
  <?php previous_posts_link(sprintf(__( 'newer %s', 'shipwright' ), '&gt;' )) ?>
</nav>
<?php } ?>