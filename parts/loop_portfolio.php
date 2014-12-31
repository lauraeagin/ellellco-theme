<?php $loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 3 ) ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="col-sm-4">
			<h3 class="text-center"><?php the_title(); ?></h3>
			<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('medium', array('class' => 'aligncenter')); ?>
			</a>
			</div>
		<?php endwhile; wp_reset_query(); ?>
		<a href="" class="more">View Portfolio &rarr;</a>