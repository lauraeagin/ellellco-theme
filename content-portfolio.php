<?php 
$url = get_field('url');
$client = get_field('client');
$location = get_field('location');
$gallery = get_field('gallery');
$testimonial = get_field('testimonial');
?>
<?php if (is_single()) : ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!--<?php the_post_thumbnail('featured-full'); ?>-->
		<div id="post-content">
			<?php the_title('<h1 id="post-title">', '</h1>'); ?>
			<?php the_content() ?>
			<?php include("parts/site_button.php"); ?>
			<?php if($testimonial) :
			echo '<blockquote><p>' . $testimonial . '</p></blockquote>';
			endif; ?>
			<?php
			$post_tags = get_the_tags();
				if ($post_tags) :					
					echo '<div id="post-tags">';
					    foreach($post_tags as $tag) {
					    	echo '<a href="' . get_tag_link( $tag->term_id ) . '">' . $tag->name.'</a>'; 
					  	}
				  	echo '</div>';					  	
				endif;
			?>					
		</div>
		<?php wp_link_pages('before=<div id="post-links">&after=</div>'); ?>		
		<div id="post-footer" class="clearfix">
			<p><?php echo get_avatar(get_the_author_meta( 'ID' ), 32); ?> <?php the_author(); ?> &bull; <?php the_time(get_option('date_format')); ?></p>
			<hr />
			<div id="post-nav">
				<?php previous_post_link('<div id="post-nav-prev"><h5><span>&#8672;</span> Previous Post</span></h5>%link </div>'); ?> 	
				<?php next_post_link('<div id="post-nav-next"><h5>Next Post <span>&#8674;</span></h5>%link</div>'); ?> 	
				<div id="post-thumb-prev">
					<?php $prevPost = get_previous_post(true); $prevThumbnail = get_the_post_thumbnail($prevPost->ID, array(150,150) ); echo $nextthumbnail; ?><?php previous_post_link( '%link', $prevThumbnail ); ?>
				</div>
				<div id="post-thumb-next">
					<?php $nextPost = get_next_post(true); $nextThumbnail = get_the_post_thumbnail($nextPost->ID, array(150,150) ); echo $nextthumbnail; ?><?php next_post_link( '%link', $nextThumbnail ); ?>
				</div>
			</div>	
		</div>	
	</article>	
<?php else : ?>
<div <?php post_class(); ?>>
	<div class="teaser">		
		<?php the_post_thumbnail('featured-teaser'); ?>
		<div class="teaser-text">
			<span class="teaser-comment-total"><?php comments_number('0', '1', '% '); ?></span>
			<?php if (is_sticky()) : ?> 
				<?php the_title('<h3 class="teaser-title"><span>&bigstar;</span><a href="' . esc_url( get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
			<?php else: ?>
				<?php the_title('<h3 class="teaser-title"><a href="' . esc_url( get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
			<?php endif; ?>
			<?php the_excerpt(); ?>
		</div>
		<div class="teaser-footer">
			<p><?php echo get_avatar(get_the_author_meta('ID'), 20); ?> <span><?php the_author(); ?> &bull; <?php the_time(get_option('date_format')); ?></span></p>			
		</div>
	</div>
</div>
<?php endif; ?>