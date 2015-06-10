<?php


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

add_action('init', 'register_my_menus');
 
function register_my_menus() {
    register_nav_menus( array(
      'main_menu' => 'Main Menu',
      'footer_menu' => 'Footer Menu'
 ));
}



add_action( 'init', 'create_post_type' );
function create_post_type() {    
  register_post_type( 'Portfolio',
    array(
      'labels' => array(
        'name' => __( 'Portfolio' ),
        'singular_name' => __( 'Property' )
      ),
      'public'        => true,
      'menu_position' => 5,
      'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
      'has_archive'   => true,
      'taxonomies' => array('',),
    )
  );
  register_post_type( 'Availabilities',
    array(
      'labels' => array(
        'name' => __( 'Availabilities' ),
        'singular_name' => __( 'Property' )
      ),
      'public'        => true,
      'menu_position' => 6,
      'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
      'has_archive'   => true,
      'taxonomies' => array('',),
    )
  );  
    
}

add_theme_support( 'post-thumbnails' );


add_action('comment_form_before', 'shipwright_enqueue_comment_reply_script');
function shipwright_enqueue_comment_reply_script()
{
if (get_option('thread_comments')) { wp_enqueue_script('comment-reply'); }
}
add_filter('the_title', 'shipwright_title');
function shipwright_title($title) {
if ($title == '') {
return '&rarr;';
} else {
return $title;
}
}
add_filter('wp_title', 'shipwright_filter_wp_title');
function shipwright_filter_wp_title($title)
{
return $title . esc_attr(get_bloginfo('name'));
}
add_action('widgets_init', 'shipwright_widgets_init');
function shipwright_widgets_init()
{
register_sidebar( array (
'name' => __('Sidebar Widget Area', 'shipwright'),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function shipwright_custom_pings($comment)
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter('get_comments_number', 'shipwright_comments_number');
function shipwright_comments_number($count)
{
if (!is_admin()) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count($comments_by_type['comment']);
} else {
return $count;
}
}