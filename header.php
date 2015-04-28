<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title><?php wp_title(' | ', true, 'right'); ?></title>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script src="<?php bloginfo( 'template_directory' ); ?>/js/libraries.js"></script>
<link href="<?php bloginfo( 'template_directory' ); ?>/styles/main.css" rel="stylesheet" type="text/css"> 
</head>
<?php wp_head(); ?>
<body <?php body_class($class); ?>>
<header id="page-head">
  <hgroup>
    <h1 class="logo"><a href="<?php echo esc_url(home_url('/')); ?>" style="background-image:url(<?php the_field('header_logo', 'options'); ?>);" title="<?php bloginfo('name'); ?>"><span><?php bloginfo('name'); ?></span></a></h1>
    <h2><?php bloginfo('description'); ?></h2>
    <input type="checkbox" id="toggle" />
	<label for="toggle" class="toggle" onclick></label>
    <nav id="nav">
      <?php wp_nav_menu( array( 'menu' => 'Main Menu','menu_id' => 'main','container' => false ) ); ?>       
    </nav>     
  </hgroup>
</header>