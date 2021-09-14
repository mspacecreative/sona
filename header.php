<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

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

	</head>
	<body <?php body_class(); ?>>
		
		<div class="newsletterForm">
			<a href="#" class="newsletterFormClose">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/close-button.png">
			</a>
			<div class="newsletterFormInner">
				<h2>Please fill out the form to subscribe now</h2>
				<?php echo do_shortcode('[hubspot type=form portal=4750145 id=144f6d66-79e7-4676-b02d-639412fa5839]'); ?>
			</div>
		</div>

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
				echo '<div id="wrap" class="wrap">';
			} ?>
