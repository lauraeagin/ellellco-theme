<?php get_header(); ?>
<div id="content-holder" class="container">
	<div class="lg-centered-text">
		<h1 class="text-center entry-title"><?php echo single_tag_title(); ?></h1>
		<div class="large-text text-center"><?php if (is_tag()) { ?><?php echo tag_description(); ?><?php } ?>
			
			<div class="gray-box">
				<p><strong>Tell us about your web project and we'll send you a ballpark quote.</strong>
				</br>
				<a href="/contact/project-information/" class="btn btn-primary">get a quote</a><br/>
				</p>
			</div>
		</div>
	</div>
	<hr/>
	<h2 class="text-center">Some Examples from our Portfolio : <?php echo single_tag_title(); ?></h2>
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
<!-- add some hentry info for Google Structured Data -->
<?php
    $t = get_the_modified_time('F jS, Y');
    $author = get_the_author();
    echo '<div class="hatom-extra" style="display:none;visibility:hidden;"><span class="entry-title"><?php echo single_tag_title(); ?></span> was last modified: <span class="updated"> '.$t.'</span> by <span class="author vcard"><span class="fn">ellell &amp; co.</span></span></div>';
    ?>
<?php griffin_pagination(); ?>
<?php get_footer(); ?>