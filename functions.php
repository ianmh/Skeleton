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
  'description' => __( 'Widgets in this area will be shown on the right-hand side.', 'skeleton' ),
  'class' => '',
  'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li></ul>',
  'before_title' => '<h2>',
  'after_title' => '</h2>'
);

register_sidebar($args);

$args = array(
  'name' => sprintf(__('Footer', 'skeleton') ),
  'description' => __( 'Widgets in this area will be shown in the footer.', 'skeleton' ),
  'class' => '',
  'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li></ul>',
  'before_title' => '<h2>',
  'after_title' => '</h2>'
);

register_sidebar($args);
?>