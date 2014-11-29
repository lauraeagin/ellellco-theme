<?php get_header(); ?>
<div id="content-holder" class="container">
<div id="teaser-holder" class="row">
	<?php
		if (have_posts()) :				
			while (have_posts()) : the_post();					
				get_template_part('content', get_post_format());
			endwhile;
		else :
			get_template_part('content', 'none');
		endif;
	?>	
</div>
<?php griffin_pagination(); ?>
<?php get_footer(); ?>