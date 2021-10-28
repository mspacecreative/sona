<?php
$subheading = get_field('subheading');
$featuredimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$imgposition = get_field('vertical_position');
$defaultimg = get_template_directory_uri() . '/assets/img/placeholders/page-header.jpg'; ?>
	
<!-- SPLASH SECTION -->
<?php if ( $featuredimg && $imgposition == 'top' ): ?>
<section class="relativePositioning header-container borderBottomGoldGradient lightOverlay" style="background-image: url(<?php echo $featuredimg ?>); background-position: top center;">
	
<?php elseif ( $featuredimg && $imgposition == 'center' ): ?>
<section class="relativePositioning header-container lightOverlay" style="background-image: url(<?php echo $featuredimg ?>); background-position: center;">
					
<?php elseif ( $featuredimg && $imgposition == 'bottom' ): ?>
<section class="relativePositioning header-container lightOverlay" style="background-image: url(<?php echo $featuredimg ?>); background-position: bottom;">
					
<?php elseif ( $featuredimg ): ?>
<section class="relativePositioning header-container lightOverlay" style="background-image: url(<?php echo $featuredimg ?>); background-position: center;">
					
<?php else : ?>
<section class="relativePositioning header-container shorter lightOverlay" style="background-image: url(<?php echo $defaultimg ?>); background-position: bottom;">
<?php endif; ?>
					
	<!-- HEADER INTRO -->
	<div class="inner">
		<div class="maxWidth800 text-align-center">
			<h1><?php $title = get_the_title( get_option('page_for_posts', true) ); echo $title; ?></h1>
			<?php if ( $subheading ) {
				echo '<h3>' . $subheading . '</h3>';
			} ?>
		</div>
	</div>
	<!-- / HEADER INTRO -->
	
</section>
<!-- / SPLASH SECTION -->