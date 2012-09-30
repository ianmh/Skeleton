<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );

add_editor_style('css/editor.css');

register_nav_menus( array(
  'primary_navigation' => 'Primary Navigation'
) );

if ( ! isset( $content_width ) ) $content_width = 638;

$args = array(
  'name' => sprintf(__('Aside', 'skeleton') ),
  'id' => 'aside',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.', 'skeleton' ),
  'class' => '',
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
  'before_title' => '<h1>',
  'after_title' => '</h1>'
);

register_sidebar($args);
?>