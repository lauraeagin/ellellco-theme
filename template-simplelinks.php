<?php /*** Template Name: Simple Links Template */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="DC.Subject" xml:lang="EN" content="Portfolio of ellell &amp; co" />
  <meta name="DC.Publisher" content="Laura Eagin and Leeann Drees" />
  <meta name="DC.Type" content="text/html" />
  <meta name="DC.Description" xml:lang="EN" content="The online portfolio of web developers and designers Laura Eagin and Leeann Drees." />
  <meta name="DC.Rights" content="Copyright 2015, ellell &amp; co.  All rights reserved." />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <?php wp_head(); ?>
<!--  906D8DC1-A21C-4D0F-94E2-6C6B1EEA63A6 -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
</head>
<body <?php body_class(); ?>>

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
