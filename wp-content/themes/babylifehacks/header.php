<!doctype html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<?php if ( is_front_page() ) { ?>
		<title>BabyLifeHacks.com | Helping parents help their kids.</title>
		<?php } else { ?>
		<title>BabyLifeHacks.com | <?php echo wp_strip_all_tags(get_post_field('post_content', $id)); ?></title>		
		<?php } ?>		
		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile meta -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php if ( is_front_page() ) { ?>
			<meta property="og:title" content="BabyLifeHacks.com"/>
		<?php } else { ?>
			<meta property="og:title" content="<?php the_title(); ?>"/>		
		<?php } ?>
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/library/images/fb-share.jpg"/>
		<meta property="og:site_name" content="BabyLifeHacks.com"/>
		<?php if ( is_single() ) { ?>		
		<meta property="og:description" content="<?php echo wp_strip_all_tags(get_post_field('post_content', $id)); ?>">
		<?php } else { ?>
		<meta property="og:description" content="Helping parents help their kids.">		
		<?php } ?>
		<meta name="description" content="Helping parents help their kids.">
		<meta name="keywords" content="baby, lifehack, hack, baby hack, baby advice, advice, parenting, parents, kids, infants">			
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">
				<div id="container">
					<header class="header" role="banner">
							
						 <!-- This navs will be applied to the topbar, above all content 
							  To see additional nav styles, visit the /parts directory -->
						 <?php get_template_part( 'parts/nav', 'top-offcanvas' ); ?>
								 	
					</header> <!-- end .header -->