<?php /*** Template Name: fullPagetemplate */ ?>
 <?php get_header(); ?>

<div id="content-holder" class="container">
<div id="post-holder" class="row">
	<div class="col-md-12">
		<?php				
			while (have_posts()) : the_post();					
				get_template_part('content', 'page');
				comments_template();				
			endwhile;
		?>	
	</div>
	
</div>
</div>
<?php get_footer(); ?>				