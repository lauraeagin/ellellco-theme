<?php get_header(); ?>
<?php get_header(); ?>
<div id="content-holder" class="container">
<div id="post-holder" class="row">
	<div class="col-md-8">
		<h1>Yikes! Page Not Found</h1>
		<h3>Uh oh! Something went wrong. We blame the intern:</h3>
		<img src="/wp-content/themes/ellellco/images/bonnie-computer.jpg" class="aligncenter" alt="cute black cat at computer" style="width: 70%; max-width: 480px; margin-bottom: 20px;">
		<h2>Would you like to search for the page you wanted?</h2>
		 <?php the_widget( 'WP_Widget_Search', $instance, $args ); ?> 
	</div>
	<?php get_sidebar(); ?>	
</div>
</div>
<?php get_footer(); ?>				