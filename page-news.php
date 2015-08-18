<?php get_header(); ?>
<div id="content-holder" class="container">
<div id="post-holder" class="row">
	<div class="col-md-8">
		<?php
		// WP_Query arguments
		$args = array (
			'post_type'              => array( 'post' ),
		);
		// The Query
		query_posts( $args );
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div <?php post_class(); ?>>
		<div class="news-item">	
		<div class="news-img-crop">	
		<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail('large'); ?></a>
		</div>
		<div class="news-excerpt">
			<!-- <span class="teaser-comment-total"><?php comments_number('0', '1', '% '); ?></span> -->
			<?php if (is_sticky()) : ?> 
				<?php the_title('<h3 class="teaser-title"><span>&bigstar;</span><a href="' . esc_url( get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
			<?php else: ?>
				<?php the_title('<h3 class="teaser-title"><a href="' . esc_url( get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
			<?php endif; ?>
			<p class="news-meta">By <?php the_author(); ?> on <?php echo get_the_date(); ?></p>
			<?php the_excerpt(); ?>
			<!-- <p><a class="teaser-more" href="<?php the_permalink(); ?>">Continue Reading</a></p> -->
		</div>
	</div>
</div>			
	<?php endwhile; else : ?>
 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
 <?php endif; ?>
 <?php wp_reset_query(); ?>
	</div>
	<?php get_sidebar(); ?>	
</div>
</div>
<?php get_footer(); ?>				