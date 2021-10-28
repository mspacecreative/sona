<?php
$defaultimg = get_template_directory_uri() . '/assets/img/placeholders/page-header.jpg'; ?>

<section class="relativePositioning header-container borderBottomGoldGradient shorter lightOverlay" style="background-image: url(<?php echo $defaultimg ?>); background-position: bottom;">
					
	<!-- HEADER INTRO -->
	<div class="inner">
		<div class="maxWidth800 text-align-center">
			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
		</div>
	</div>
	<!-- / HEADER INTRO -->
	
</section>
<!-- / SPLASH SECTION -->

<?php get_template_part('loops/loop-search'); ?>
