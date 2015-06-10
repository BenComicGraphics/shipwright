<aside id="sidebar">
  <?php if ( is_active_sidebar('primary-widget-area') ) : ?>
    <ul class="widgets">
      <?php dynamic_sidebar('primary-widget-area'); ?>
    </ul>
  <?php endif; ?>
</aside>