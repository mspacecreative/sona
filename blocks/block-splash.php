<!-- SPLASH SECTION -->
<section class="splash borderBottomGoldGradient">
	<?php
	if ( have_rows('background_graphics') ):
	while ( have_rows('background_graphics') ): the_row();
	$bgvideo = get_sub_field('background_video');
	$videoposter = get_sub_field('video_poster');
	
	if ( $bgvideo ): ?>
	<div class="row video-container">
		<video poster="<?php echo $videoposter ?>" src="<?php echo $bgvideo ?>" autoplay muted loop>
			<source src="<?php echo $bgvideo ?>" type="video/mp4" />
		</video>
		
	<?php else : ?>
	<div class="bg-photo-container">
		<div class="bg-photo">
			<img src="<?php echo $videoposter ?>" alt="<?php echo bloginfo('name'); ?>">
		</div>
	<?php endif;
	
	endwhile;
	endif; ?>
					
		<!-- SPLASH INTRO -->
		<?php 
		if ( have_rows('splash_content') ): ?>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 splash-content maxWidth980">
			<?php while ( have_rows('splash_content') ): the_row();
			$splashintro = get_sub_field('splash_intro');
			
			if ( $splashintro ): ?>
			<h1><?php echo $splashintro ?></h1>
			<?php endif;
			
			if ( have_rows('splash_cta') ):
			while ( have_rows('splash_cta') ): the_row();
			
			$link = get_sub_field('link');
			$label = get_sub_field('label');
			
			if ( $link && $label ) {
				echo '<a class="button dark" href="#' . $link . '">' . $label . '</a>';
			} elseif ( $link ) {
				echo '<a class="button dark" href="#' . $link . '">' . __('Learn more') . '</a>';
			}
			
			endwhile;
			endif;
			
			endwhile; ?>
		</div>
		<?php endif; ?>
		<!-- / SPLASH INTRO -->
					
	</div>
</section>
<!-- / SPLASH SECTION -->