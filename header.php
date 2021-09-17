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
		
		<div class="skip-links" aria-label="Skip to main content"><a href="#main-content" class="skip-to-link" tabindex="1">Skip to main content</a></div>

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
					<button class="hamburger hamburger--spin hamburger-icon" type="button">
					  <span class="hamburger-box">
					    <span class="hamburger-inner"></span>
					  </span>
					</button>
					
					<button class="magnifying-glass-container hamburger" tabindex="0" style="width: 20px; height: 20px; cursor: pointer;">
						<?php include 'assets/img/icons/magnifying-glass.php'; ?>
						<div class="close-icon">
							<svg version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" overflow="visible" xml:space="preserve">
								<line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="0.604" y1="0.604" x2="15.396" y2="15.396"/>
								<line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="0.604" y1="15.396" x2="15.396" y2="0.604"/>
							</svg>
						</div>
					</button>
				</div>
				<div class="social-window">
					<div class="window-content light">
						<!--<h2>Connect with Sona</h2>
						<ul class="social-media">
							<li><a href="https://ca.linkedin.com/company/sona-nanotech-ltd" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="https://twitter.com/sonananotech" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCCK3VsReQEBrSY_gi5jWtFA" target="_blank"><i class="fa fa-youtube"></i></a></li>
							<li><a href="https://www.instagram.com/sona_nanotech/" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://www.facebook.com/SonaNanotechInc" target="_blank"><i class="fa fa-facebook"></i></a></li>
						</ul>
						<a class="button light" href="mailto:info@sonanano.com">info@sonanano.com</a>
						-->
						<div class="siteSearch">
							<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
						</div>
						<div class="mobile-menu">
							<?php sona_nav(); ?>
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
