<?php get_header(); ?>

    <div id="content-holder">
		<div class="container home">

    <section id="portfolio" class="homepage-portfolio">
		<div class="row">
			<?php include("parts/loop_portfolio.php"); ?>
		</div>
		<div class="row homepage-bios">
			<div class="col-md-12 text-center">
        <?php if( get_field( "title_above_our_work_showcase" ) ): ?>
    			<h2 class="text-center"><a href="/portfolio/"><?php the_field('title_above_our_work_showcase'); ?></a></h2>
    				<?php endif;
            ?>
      <p>Together let's redesign, maintain, or fix your website. WordPress doesn't have to be intimidating, if you have the right help from professional web developers.</p>
      <a href="/lets-start/" class="btn btn-primary">Let’s Work Together</a><br>
      <small>or <a href="/portfolio/">check out our portfolio</a></small>
			</div>
		</div>
    </section>
	</div>
	<div class="container-fluid home teaching-bg">
		<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center homepage-bios" style="padding-top: 4em; padding-bottom: 4em;">
					<!-- <h2>Learn how to build, edit &amp; grow your website.</h2>
						<p>Are you struggling with figuring out how to fix a bug or add a new feature to a website?<br>
							There’s <a href=“#tutoring”>one-on-one training</a> for that.</p>

							<p>Ready to pick up some new tech skills?<br>
								Attend one of our upcoming <a href=“#workshops”>WordPress workshops</a>!</p>

							<p> Does your whole team or department need a refresher on WordPress?<br>
								We offer <a href=“#corporate”>corporate training</a>, too.</p> -->

								<h2>Workshops in Detroit</h2>
								<p>We teach <a href="#">in-person workshops</a> on WordPress, Building an Online Shop with Shopify, and more. Don’t be intimidated by the code, plugins, and themes. Get answers to your tech questions in a friendly, fun classroom setting. We also offer <a href="/wordpress-workshops-training-detroit/#tutoring">one-on-one training</a> and  <a href="/wordpress-workshops-training-detroit/#corporate">corporate training</a>.</p>

                <a href="/wordpress-workshops-training-detroit/#workshops" class="btn btn-white">Upcoming Classes</a>
				</div>
			</div>
		</div>
		</div>
	</div>
	<div class="container home">
    <section id="bios" class="homepage-bios">

    	<div class="row">
			<div class="col-md-12">

        <?php if( get_field( "title_above_our_bios" ) ): ?>
			<h2 class="text-center"><a href="/about/"><?php the_field('title_above_our_bios'); ?></a></h2>
				<?php endif;
        ?>
         <?php if( get_field( "our_bio_paragraph" ) ): ?>
					<p><?php the_field('our_bio_paragraph'); ?></p>
		 		<?php endif;
		?>


			<div class="col-md-4">
		         <?php if( get_field( "laura_bio_photo" ) ): ?>
					<li class="bio"><a href="/about/"><img src="<?php the_field('laura_bio_photo'); ?>" class="img-circle aligncenter" alt="Laura Eagin web designer" width="200"/></a></li>
		 				<?php endif;
		        ?>
		        <h3 class="text-center">Laura Eagin</h3>
    		</div>
			<div class="col-md-4">
		        <?php if( get_field( "leeann_bio_photo" ) ): ?>
					<li class="bio"><a href="/about/"><img src="<?php the_field('leeann_bio_photo'); ?>" class="img-circle aligncenter" alt="Leeann Drees web developer" width="200"/></a></li>
		 				<?php endif;
		        ?>
		        <h3 class="text-center">Leeann Drees</h3>

		    </div>

		    <div class="col-md-4">

		         <?php if( get_field( "co_bio_photo" ) ): ?>
					<li class="bio"><a href="/about/"><img src="<?php the_field('co_bio_photo'); ?>" class="img-circle aligncenter" alt="web development team" width="200"/></a></li>
		 				<?php endif;
		        ?>
		        <h3 class="text-center">&amp; Company</h3>
    		</div>

    		</div>

    </section>

		<section id="call-to-action" class="homepage-cta">
			<div class="call-to-action-content-wrapper clearfix">
				<div class="call-to-action-content">
				<?php if( get_field( "call_to_action_title" ) ): ?>
					<h3><?php the_field('call_to_action_title'); ?></h3>
 				<?php endif;
 				?>
				<?php if( get_field( "call_to_action_additional_text" ) ): ?>
					<p><?php the_field('call_to_action_additional_text'); ?></p>
 				<?php endif;
 				?>


</div>
        <?php if( get_field( "call_to_action_link" ) ): ?>
			<a class="call-to-action-button btn btn-primary txt-lg" href="<?php the_field('call_to_action_link'); ?>" title="WordPress Class in Detroit">WordPress Classes</a>
 				<?php endif;
        ?>
				</div>

		</section>
	</div>
</div>
</div>
<?php get_footer(); ?>
