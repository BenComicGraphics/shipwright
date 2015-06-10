<?php get_header(); ?>

<div id="header-image" class="vert-bottom" style="background-image: url(<?php the_field('portfolio_header','options'); ?>);">
  <section>
    <h2>Portfolio</h2>
    <h3>Current Harkinson Properties</h3>
  </section>    
</div>
    
<div id="portfolio-filters">
  <section>
    <div class="filter">
      <ul>
        <li>Property Type</li>  
<?php $taxonomy = 'property-type';
$tax_terms = get_terms($taxonomy);
foreach ($tax_terms as $tax_term) {
echo '<li>' . '<a href="#" data-repeater="template_1" data-post-type="portfolio" data-posts-per-page="50" data-taxonomy="property-type" data-taxonomy-terms="' . $tax_term->slug.'"' . '>' . $tax_term->name.'</a></li>';
}
?>
      </ul> 
    </div>  
    <div class="filter">
      <ul>
        <li>City</li>  
<?php $taxonomy = 'city';
$tax_terms = get_terms($taxonomy);
foreach ($tax_terms as $tax_term) {
echo '<li>' . '<a href="#" data-repeater="template_1" data-post-type="portfolio" data-posts-per-page="50" data-taxonomy="city" data-taxonomy-terms="' . $tax_term->slug.'"' . '>' . $tax_term->name.'</a></li>';
}
?>
      </ul> 
    </div>  
    <div class="filter">    
      <ul>
        <li>Suite Sq Footage</li>  
<?php $taxonomy = 'suite-sq-footage';
$tax_terms = get_terms($taxonomy);
foreach ($tax_terms as $tax_term) {
echo '<li>' . '<a href="#" data-repeater="template_1" data-post-type="portfolio" data-posts-per-page="50" data-taxonomy="suite-sq-footage" data-taxonomy-terms="' . $tax_term->slug.'"' . '>' . $tax_term->name.'</a></li>';
}
?>
      </ul>  
    </div>  
    <div class="filter">
      <ul>
        <li>Lease Type</li>  
<?php $taxonomy = 'lease-type';
$tax_terms = get_terms($taxonomy);
foreach ($tax_terms as $tax_term) {
echo '<li>' . '<a href="#" data-repeater="template_1" data-post-type="portfolio" data-posts-per-page="50" data-taxonomy="lease-type" data-taxonomy-terms="' . $tax_term->slug.'"' . '>' . $tax_term->name.'</a></li>';
}
?>
      </ul> 
    </div>
    
    <div class="ibox">
      <input type="checkbox" id="typer" />
      <label for="typer" class="infobox" onclick>i</label>
      <div id="infobox">
        <?php the_field('lease_guide','options'); ?>
      </div>
    </div>
      
  </section>    
</div>
    
<div id="portfolio-pieces">
  <section>
  
    <?php echo do_shortcode('[ajax_load_more repeater="template_1" post_type="portfolio" posts_per_page="50" max_pages="0" button_label="Show More Properties"]'); ?>
      
    <a href="#" class="long-cta"><strong>Questions?</strong>CONTACT THE HARKINSON’S TEAM</a>
      
  </section>    
</div>




<?php get_footer(); ?>