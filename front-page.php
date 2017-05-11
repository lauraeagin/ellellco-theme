<?php get_header(); ?>
		
    <div id="content-holder" class="container home">

    <section id="portfolio" class="homepage-portfolio">

    	<div class="row">
			<div class="col-md-12">

		<?php if( get_field( "title_above_our_work_showcase" ) ): ?>
			<h2 class="text-center"><a href="/portfolio/"><?php the_field('title_above_our_work_showcase'); ?></a></h2>
				<?php endif;
        ?>

	    	</div>
	    </div>

		<div class="row">
			<?php include("parts/loop_portfolio.php"); ?>
		</div>
    </section>
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
			<a class="call-to-action-button btn btn-primary" href="<?php the_field('call_to_action_link'); ?>" title="Get Price Quote for Website Design">Find Out</a>
 				<?php endif;
        ?>			
				</div>
			
		</section>
	</div>
</div>
<?php get_footer(); ?>				