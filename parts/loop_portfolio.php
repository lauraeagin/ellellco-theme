<?php $loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 3 ) ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<?php $imgurl = get_field('homepage_thumbnail');
					$title = get_the_title(); ?>
			<div class="col-md-4">
			<a href="<?php the_permalink(); ?>">
				<?php if ($imgurl) {
					echo '<img src="'.$imgurl.'" alt="'.$title.'" class="homepage-thumbnail aligncenter">';
				}
				 ?>
			</a>
			</div>
		<?php endwhile; wp_reset_query(); ?>
