<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>
	
		<h1><?php printf( __( 'Search Results for: %s', 'skeleton' ), '<em>' . get_search_query() . '</em>' ); ?></h1>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php
		  /* Include the Post-Format-specific template for the content.
		   * If you want to overload this in a child theme then include a file
		   * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		   */
		   get_template_part( 'content' );
    ?>
       
    <?php endwhile; ?>
  <?php else : ?>
        
  	<h1><?php _e( 'Nothing Found', 'skeleton' ); ?></h1>
  	<p><?php _e( 'Sorry, but nothing matched your search criteria.', 'skeleton' ); ?><br />
  	<?php _e( 'Please try again with some different keywords or return to ', 'skeleton'  ); ?>
  	<a href="<?php echo home_url() ?>"><?php bloginfo('name'); ?></a> <?php _e('homepage', 'skeleton' ); ?></p>
  	<?php get_search_form(); ?>
   
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>