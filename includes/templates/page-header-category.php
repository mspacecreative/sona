<?php
$subheading = get_field('subheading');
$imgposition = get_field('vertical_position');
$defaultimg = get_template_directory_uri() . '/assets/img/placeholders/page-header.jpg'; ?>
	
<!-- SPLASH SECTION -->
<section class="relativePositioning header-container shorter lightOverlay" style="background-image: url(<?php echo $defaultimg ?>); background-position: bottom;">
					
	<!-- HEADER INTRO -->
	<div class="inner">
		<div class="maxWidth800 text-align-center">
			<h1><?php _e( 'Categorized in ', 'sona' ); single_cat_title(); ?></h1>
			<?php if ( $subheading ) {
				echo '<h3>' . $subheading . '</h3>';
			} ?>
		</div>
	</div>
	<!-- / HEADER INTRO -->
	
</section>
<!-- / SPLASH SECTION -->