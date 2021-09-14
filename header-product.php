<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title>
		<?php
		global $post;
		$terms = wp_get_post_terms( $post->ID, 'brand');
		foreach ( $terms as $term ) : ?>
			<?php echo $term->name; echo '&#8482; '; echo the_title(); echo ' : '; bloginfo('name'); ?>
		<?php endforeach; ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-187792266-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'UA-187792266-1');
		</script>

	</head>
	<body <?php body_class(); ?>>

		<header>
			<div class="inner clear">
				
				<!-- logo -->
				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-dark-hor.svg" alt="<?php echo bloginfo('name'); ?>">
					</a>
				</div>
				<!-- /logo -->

				<!-- nav -->
				<nav class="desktop-nav-menu" role="navigation">
					<?php sona_nav(); ?>
				</nav>
				<!-- /nav -->
				
				<!-- social media / mobile nav -->
				<div class="socialWindowToggle">
					<button class="hamburger hamburger--spin" type="button">
					  <span class="hamburger-box">
					    <span class="hamburger-inner"></span>
					  </span>
					</button>
				</div>
				<div class="social-window">
					<div class="window-content light">
						<div class="mobile-menu">
							<?php sona_nav(); ?>
						</div>
						<h2>Connect with Sona</h2>
						<ul class="social-media">
							<li><a href="https://ca.linkedin.com/company/sona-nanotech-ltd" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="https://twitter.com/sonananotech" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCCK3VsReQEBrSY_gi5jWtFA" target="_blank"><i class="fa fa-youtube"></i></a></li>
							<li><a href="https://www.instagram.com/sona_nanotech/" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://www.facebook.com/SonaNanotechInc" target="_blank"><i class="fa fa-facebook"></i></a></li>
						</ul>
						<a class="button light" href="mailto:info@sonanano.com">info@sonanano.com</a>
						<div class="siteSearch">
							<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
						</div>
					</div>
				</div>
				<!-- / social media / mobile nav -->

			</header>
			<!-- /header -->
			
			<!-- WRAPPER -->
			<?php 
			$bgcolor = get_field('background_colour');
			if ( $bgcolor ) {
				echo '<div class="wrap" style="background-color:' . $bgcolor . '">';
			}
			else {
				echo '<div class="wrap">';
			} ?>
