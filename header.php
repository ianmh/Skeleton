<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title('-'); ?></title>
	<meta name="description" content="##Description of the site">
  <meta name="viewport" content="width=device-width">
  
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
  
<?php // Scripts use WordPress copy of jQuery

function register_scripts() {
  wp_deregister_script('jquery');
  $jQueryVersion = '1.8.1'; // Version of jQuery you would like to use from Google CDN
  wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/' . $jQueryVersion . '/jquery.min.js', true, $jQueryVersion, true );
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', false , '1', true );
}
add_action('wp_enqueue_scripts', 'register_scripts');

?> 

<!--[if lt IE 9]>
<script src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/html5shiv-printshiv.js"></script>
<![endif]-->

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div class="container">
	<header id="header">

  <?php // Set up WordPress menus
  $args = array(
    'theme_location'  => 'primary_navigation',
    'container' 			=> false,
    'menu_id'					=> 'primary-navigation',
    'depth'						=> 2
    );
  ?>

  <?php wp_nav_menu( $args ); ?>
  
  <?php // get_search_form(); ?>
  
	</header>
	<div id="content">