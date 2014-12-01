<?php get_header(); ?>
		
	<section id="mission" class="homepage-mission">

			<div class="row">
				<div class="col-md-12">

				<?php if( get_field( "mission_statement" ) ): ?>
					<h2 class="white"><?php the_field('mission_statement'); ?></h2>
						<?php endif;
		        ?>
			    </div>
			</div>
    </section>

    <div id="content-holder" class="container">

    <section id="portfolio" class="homepage-portfolio">

    	<div class="row">
			<div class="col-md-12">

		<?php if( get_field( "title_above_our_work_showcase" ) ): ?>
			<h2><?php the_field('title_above_our_work_showcase'); ?></h2>
				<?php endif;
        ?>

	    	</div>
	    </div>

		<div class="row">

				<?php dynamic_sidebar('homepage-portfolio'); ?>
			<div class="col-md-4">
				<h3>Example 1</h3>
			</div>
			<div class="col-md-4">
				<h3>Example 1</h3>
			</div>
			<div class="col-md-4">
				<h3>Example 1</h3>
			</div>
		</div>

    </section>
    <section id="bios" class="homepage-bios">

    	<div class="row">
			<div class="col-md-12">

        <?php if( get_field( "title_above_our_bios" ) ): ?>
			<h2><?php the_field('title_above_our_bios'); ?></h2>
				<?php endif;
        ?>
         <?php if( get_field( "our_bio_paragraph" ) ): ?>
					<p><?php the_field('our_bio_paragraph'); ?></p>
		 		<?php endif;
		?>
    		</div>
			<div class="col-md-4">
				<h3>Laura Eagin</h3>
		         <?php if( get_field( "laura_bio_photo" ) ): ?>
					<li><a href="/about/#laura"><img src="<?php the_field('laura_bio_photo'); ?>" alt="Laura Eagin web designer" width="150"/></a></li>
		 				<?php endif;
		        ?>
    		</div>
			<div class="col-md-4">
				<h3>Leeann Drees</h3>
		        <?php if( get_field( "leeann_bio_photo" ) ): ?>
					<li><a href="/about/#leeann"><img src="<?php the_field('laura_bio_photo'); ?>" alt="Leeann Drees web developer" width="150"/></a></li>
		 				<?php endif;
		        ?>
		    </div>

		    <div class="col-md-4">
				<h3>&amp; Company</h3>
		         <?php if( get_field( "co_bio_photo" ) ): ?>
					<li><a href="/about/"><img src="<?php the_field('co_bio_photo'); ?>" alt="web development team" width="150"/></a></li>
		 				<?php endif;
		        ?>
    		</div>

    </section>

		<section id="call-to-action" class="homepage-cta">			
			<div class="call-to-action-content-wrapper clearfix">
				<div class="call-to-action-content">
				<?php if( get_field( "call_to_action_title" ) ): ?>
					<h3><?php the_field('call_to_action_title'); ?></h3>
 				<?php endif;
 		?>

        <?php if( get_field( "call_to_action_link" ) ): ?>
			<a class="call-to-action-button" href="<?php the_field('call_to_action_link'); ?>" title="Work with us">Work with us</a>
 				<?php endif;
        ?>			
				</div>
			</div>
		</section>
	</div>
</div>
<?php get_footer(); ?>				