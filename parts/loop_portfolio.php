<?php $loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 3 ) ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="col-md-4">
			<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('medium', array('class' => 'aligncenter')); ?>
			</a>
			<a href="<?php the_permalink(); ?>">
			<h3 class="text-center"><?php the_title(); ?></h3>
			</a>
			</div>
		<?php endwhile; wp_reset_query(); ?>
		<!-- button to view portfolio will go here! -->