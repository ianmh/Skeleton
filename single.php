<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part('content'); ?>
	<?php wp_link_pages(); ?> 
<?php endwhile; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
