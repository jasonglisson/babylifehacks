<!doctype html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<?php if ( is_front_page() ) { ?>
		<title>Baby Life Hacks | Helping parents help their kids.</title>
		<?php } elseif( is_single() ) { ?>
		<title>Baby Life Hacks | Baby Life Hack #<?php echo the_ID(); ?></title>		
		<?php } elseif(!is_single() || !is_front_page()) {?>	
		<title>Baby Life Hacks | <?php echo the_title(); ?></title>		
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
		<?php } else { 
				if (get_field('submitted_by', $post->ID)) { ?>
					<meta property="og:title" content="<?php echo 'Baby Life Hack #' . $post->ID . ' - Submitted By ' . get_field('submitted_by', $post->ID);?>" />
			<?php } else { ?>
					<meta property="og:title" content="<?php echo 'Baby Life Hack #' . $post->ID;?>" />				
			<?php } ?>

<!-- 			<meta property="og:title" content="<?php echo wp_strip_all_tags(get_post_field('post_content', $id)); ?>"/>	 -->		
		<?php } ?>
		<?php 
			$category = get_the_category($post->ID);
			foreach($category as $cat) {
				if($cat->slug == 'bathing'): ?>
					<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/share/bathing.jpg"/>					
			<?php elseif($cat->slug == 'cleaning'): ?>
					<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/share/cleaning.jpg"/>					
			<?php elseif($cat->slug == 'clothing'): ?>
					<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/share/clothing.jpg"/>					
			<?php elseif($cat->slug == 'crying-calming'): ?>
					<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/share/calming.jpg"/>					
			<?php elseif($cat->slug == 'diapers'): ?>
					<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/share/diapers.jpg"/>					
			<?php elseif($cat->slug == 'feeding'): ?>
					<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/share/feeding.jpg"/>		
			<?php elseif($cat->slug == 'the-home'): ?>
					<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/share/home.jpg"/>									
			<?php elseif($cat->slug == 'mommy-health'): ?>															
					<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/share/mommy-health.jpg"/>					
			<?php elseif($cat->slug == 'nursing'): ?>			
					<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/share/nursing.jpg"/>
			<?php elseif($cat->slug == 'playing'): ?>			
					<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/share/playing.jpg"/>			
			<?php elseif($cat->slug == 'sleeping'): ?>			
					<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/share/sleeping.jpg"/>	
			<?php elseif($cat->slug == 'teething'): ?>			
					<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/share/teething.jpg"/>											
			<?php elseif($cat->slug == 'technology'): ?>			
					<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/share/technology.jpg"/>	
			<?php elseif($cat->slug == 'transportation'): ?>			
					<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/share/transportation.jpg"/>					
			<?php endif; 					
			}
		?>				
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
						<div class="social-wrap">
							<div class="row show-for-medium-up">
								<div class="social-links">
									<a class="feed" href="http://babylifehacks.com/feed/" target="_blank" title="Feed">Feed</a>
									<a class="pinterest" href="https://www.pinterest.com/babylifehacks" target="_blank" title="Pinterest">Pinterest</a>											
									<a class="twitter" href="https://twitter.com/babylifehacks" target="_blank" title="Twitter">Twitter</a>		
									<a class="facebook" href="https://www.facebook.com/babylifehacks" target="_blank" title="Facebook">Facebook</a>
								</div>
							</div>	
						</div>	
						 <!-- This navs will be applied to the topbar, above all content 
							  To see additional nav styles, visit the /parts directory -->
						 <?php get_template_part( 'parts/nav', 'top-offcanvas' ); ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-mobile.jpg" class="show-for-small-only">
					</header> <!-- end .header -->
