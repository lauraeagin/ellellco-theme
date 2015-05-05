<?php get_header(); ?>
<div id="content-holder" class="container">
<div id="post-holder" class="row">
	<div class="col-md-8">
		<?php				
			while (have_posts()) : the_post();					
				get_template_part('content-blog', get_post_format());				
				comments_template();									
			endwhile;
		?>		
	</div>	
	<?php get_sidebar(); ?>	
</div>
</div>
<?php get_footer(); ?>				