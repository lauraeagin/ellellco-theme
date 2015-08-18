<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php if(is_post_type_archive('portfolio')): ?>
    <title>Web Design &amp; Development Portfolio | ellell &amp; co.</title>
    <?php else: ?>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php endif; ?>
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
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
</head>
<body <?php body_class(); ?>>
<header>    
    <?php if (get_theme_mod('griffin_logo_setting')): ?>
        <a id="header-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src='<?php echo esc_url(get_theme_mod('griffin_logo_setting')); ?>' alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>'></a>
    <?php else: ?>
        <a id="header-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    <?php endif; ?> 
    <p id="header-description"><?php bloginfo('description'); ?></p> 
    <?php $header_img = get_header_image(); ?> 
    <?php if ($header_img) : ?>     
	   <img id="header-img" src="<?php header_image(); ?>" alt="" /> 
    <?php endif; ?>     
</header>
<?php
    $location = 'primary';
    if (has_nav_menu($location)) :
?>
    <nav id="primary-menu" class="clearfix">         
        <?php wp_nav_menu(array('theme_location' => 'primary','depth' => 2,'container' => false)); ?>                    
    </nav>
<?php endif; ?>

