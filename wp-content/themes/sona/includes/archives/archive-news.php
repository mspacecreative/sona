<?php get_header(); ?>

	<!-- SPLASH SECTION -->
	<section class="relativePositioning header-container lightOverlay">
				
		<!-- HEADER INTRO -->
		<div class="inner">
			<div class="maxWidth800 text-align-center top-bottom-padding">
				<h1>
					<?php $title = get_the_title(); echo $title; ?>
				</h1>
			</div>
		</div>
		<!-- / HEADER INTRO -->
		
	</section>
	<!-- / SPLASH SECTION -->
	
	<!-- LOOP THROUGH POSTS -->
	<section>
		
		<div class="inner">
			<?php 
			include 'loops/loop-news.php'; ?>
		</div>
		
	</section>
	<!-- / LOOP THROUGH POSTS -->

<?php get_footer(); ?>
