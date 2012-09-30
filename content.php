<?php // Show the correct WordPress loop based on post type ?>

<?php if ( 'post' == get_post_type() && !is_search() ) : ?>
	
	<article>
		<h1 id="post-<?php the_ID(); ?>" <?php post_class(); ?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<small><?php the_time('F jS, Y') ?></small>
		<?php the_content(); ?>
			<?php the_tags('<p><small>Tags: ', ', ', '</small></p>'); ?> 
			<?php comments_template(); ?>
		<?php get_template_part('part', 'edit-page'); ?>
	</article>
	
<?php elseif( 'page' == get_post_type() && !is_search() ) : ?>

	<article>
		<h1 id="post-<?php the_ID(); ?>" <?php post_class(); ?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php the_content(); ?>
		<?php get_template_part('part', 'edit-page'); ?>
	</article>

<?php elseif( is_search() ) : ?>

	<article>
	  <h2 id="post-<?php the_ID(); ?>" <?php post_class(); ?>><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
	  <small><?php _e('Published on: ', 'skeleton'); ?><?php the_time('F jS, Y') ?></small>
	  <?php the_excerpt(); ?>
	  <p class="more"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php _e('Read more', 'skeleton'); ?></a></p>
	</article>
	
<?php endif; ?>
