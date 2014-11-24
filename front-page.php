<?php get_header(); ?>
<div id="post-holder" class="row">
	<div class="col-md-8">
		
		<?php if( get_field( "mission_statement" ) ): ?>
			<h2><?php the_field('mission_statement'); ?></h2>
				<?php endif;
        ?>

		<?php if( get_field( "title_above_our_work_showcase" ) ): ?>
			<h2><?php the_field('title_above_our_work_showcase'); ?></h2>
				<?php endif;
        ?>

        <?php if( get_field( "title_above_our_bios" ) ): ?>
			<h2><?php the_field('title_above_our_bios'); ?></h2>
				<?php endif;
        ?>

         <?php if( get_field( "laura_bio_photo" ) ): ?>
			<li><a href="/about/#laura"><img src="<?php the_field('laura_bio_photo'); ?>" alt="Leeann Drees web developer"/></a></li>
 				<?php endif;
        ?>

        <?php if( get_field( "leeann_bio_photo" ) ): ?>
			<li><a href="/about/#leeann"><img src="title_above_our_work_showcase" alt="Leeann Drees web developer"/></a></li>
 				<?php endif;
        ?>

        <?php if( get_field( "our_bio_paragraph" ) ): ?>
			<p><?php the_field('our_bio_paragraph'); ?></p>
 				<?php endif;
        ?>

        <?php if( get_field( "our-bios-paragraph" ) ): ?>
			<p><?php the_field('our-bios-paragraph'); ?></p>
 				<?php endif;
        ?>

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