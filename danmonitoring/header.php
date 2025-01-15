<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
		<meta name="Rating" content="General" />
		<meta name="Robots" content="All" />
		<meta name="Revisit-After" content="7 days" />
		<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


		<style type="text/css" media="screen">
		
		<?php
		// Checks to see whether it needs a sidebar or not
		if ( !$withcomments && !is_single() ) {
		?>
			#page { background: #ffffff repeat-y top; border: none; }
		<?php } else { // No sidebar ?>
			#page { }
		<?php } ?>
		
		</style>
		<?php wp_head(); ?>
	</head>
	<body>
	
		<div id="container"> 
			<div id="smallTopLinks">Home | Login | Contact Us</div>
			<div id="banner"></div>