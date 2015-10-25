<?php get_header(); ?>
<div id="content-holder" class="container">
<div id="post-holder" class="row">
	<div class="col-md-8">
		<?php				
			while (have_posts()) : the_post();					
				get_template_part('content', 'page');
				comments_template();				
			endwhile;
		?>	
	</div>
	<?php get_sidebar(); ?>	
</div>
</div>
<!-- add some hentry info for Google Structured Data -->
<?php
    $t = get_the_modified_time('F jS, Y');
    $author = get_the_author();
    echo '<div class="hatom-extra" style="display:none;visibility:hidden;"><span class="entry-title"><?php echo single_tag_title(); ?></span> was last modified: <span class="updated"> '.$t.'</span> by <span class="author vcard"><span class="fn">'.$author.'</span></span></div>';
    ?>
<?php get_footer(); ?>				