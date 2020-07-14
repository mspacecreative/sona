<!-- FEATURE SECTION -->
<?php
$bgimg = get_field('background_image');
$txtposition = get_field('text_position');
$colortheme = get_field('theme');
$sectionheading = get_field('section_heading');
$sectionheadingposition = get_field('heading_position');

if ( $colortheme == 'dark' ):

if ( $txtposition == 'left' && $bgimg ): ?>
<section class="darkbg">
	<div class="light relativePositioning goldBorderTop dark_gradient_img_overlay bgImgRight" style="background-image: url(<?php echo esc_url($bgimg['url']); ?>);">
<?php elseif ( $txtposition == 'right' && $bgimg ): ?>
<section class="darkbg">
	<div class="light relativePositioning goldBorderTop dark_gradient_img_overlay bgImgLeft" style="background-image: url(<?php echo esc_url($bgimg['url']); ?>);">
<?php else : ?>
<section class="darkbg">
	<div class="light relativePositioning goldBorderTop dark_gradient_img_overlay bgImgRight" style="background-image: url(<?php echo esc_url($bgimg['url']); ?>);">
<?php endif; ?>

<?php elseif ( $colortheme == 'light' ):

if ( $txtposition == 'left' && $bgimg ): ?>
<section>
	<div class="relativePositioning goldBorderTop light_gradient_img_overlay bgImgRight" style="background-image: url(<?php echo esc_url($bgimg['url']); ?>);">
<?php elseif ( $txtposition == 'right' && $bgimg ): ?>
<section>
	<div class="relativePositioning goldBorderTop light_gradient_img_overlay bgImgLeft" style="background-image: url(<?php echo esc_url($bgimg['url']); ?>);">
<?php else : ?>
<section>
	<div class="relativePositioning goldBorderTop light_gradient_img_overlay bgImgRight" style="background-image: url(<?php echo esc_url($bgimg['url']); ?>);">
<?php endif; ?>

<?php else :

if ( $txtposition == 'left' && $bgimg ): ?>
<section class="darkbg">
	<div class="light relativePositioning goldBorderTop dark_gradient_img_overlay bgImgRight" style="background-image: url(<?php echo esc_url($bgimg['url']); ?>);">
<?php elseif ( $txtposition == 'right' && $bgimg ): ?>
<section class="darkbg">
	<div class="light relativePositioning goldBorderTop dark_gradient_img_overlay bgImgLeft" style="background-image: url(<?php echo esc_url($bgimg['url']); ?>);">

<?php else : ?>
<section class="darkbg">
	<div class="light relativePositioning goldBorderTop dark_gradient_img_overlay bgImgRight" style="background-image: url(<?php echo esc_url($bgimg['url']); ?>);">
<?php endif;
endif;
		
		if ( $sectionheading && $sectionheadingposition == 'feature' ): ?>
		<div class="absoluteHeading">
			<h3><?php echo $sectionheading ?></h3>
		</div>
		<?php endif; ?>
		
		<?php if ( $txtposition == 'left' ): ?>
		<div class="inner no-left-padding">
			
			<div class="row no_col_padding reverse">
			
		<?php elseif ( $txtposition == 'right' ): ?>
		<div class="inner no-right-padding">
			
			<div class="row no_col_padding">
			
		<?php else : ?>
		<div class="inner no-left-padding">
			
			<div class="row no_col_padding reverse">
		<?php endif; ?>
			
				<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 col_with_img">
					<?php if( !empty( $bgimg ) ): ?>
					<div class="absolute_img_container hide_on_desktop">
						<img src="<?php echo esc_url($bgimg['url']); ?>" alt="<?php echo esc_attr($bgimg['alt']); ?>" />
					</div>
					<?php endif; ?>
				</div>
				
				<?php if ( $colortheme == 'dark' ): ?>
				<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 darkbg left-padding">
				<?php elseif ( $colortheme == 'light' ): ?>
				<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 lightbg left-padding">
				<?php else : ?>
				<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 darkbg left-padding">
				<?php endif; ?>
				
					<div class="col_padding col_text">
						
						<?php
						if ( $sectionheading && $sectionheadingposition == 'normal'  && $colortheme = 'light' ): ?>
							<h1><?php echo $sectionheading ?></h1>
						<?php 
						elseif ( $sectionheading && $sectionheadingposition == 'normal' && $colortheme = 'dark' ): ?>
							<h1 class="light"><?php echo $sectionheading ?></h1>
						<?php 
						elseif ( $sectionheading && $sectionheadingposition == 'normal' ): ?>
							<h1><?php echo $sectionheading ?></h1>
						<?php endif; ?>
						
						<?php 
						if ( have_rows('content') ) {
							while ( have_rows('content') ) {
								the_row();
								$heading = get_sub_field('heading');
								$body = get_sub_field('body');
								if ( $heading ) {
									echo '<h1 class="gold_color">' . $heading . '</h1>';
								}
								if ( $body ) {
									echo '<div class="bullet-points">' . $body . '</div>';
								}
								if ( have_rows('call_to_action') ) {
									while ( have_rows('call_to_action') ) { 
										the_row();
										$link = get_sub_field('link');
										$label = get_sub_field('label');
										if ( $colortheme == 'dark' && $link && $label ) {
											echo '<a href="' . $link . '" class="button light">' . $label . '</a>';
										} elseif ( $colortheme == 'dark' && $link ) {
											echo '<a href="' . $link . '" class="button light">Learn more</a>';
										} elseif ( $colortheme == 'light' && $link && $label ) {
											echo '<a href="' . $link . '" class="button dark">' . $label . '</a>';
										} elseif ( $colortheme == 'light' && $link ) {
											echo '<a href="' . $link . '" class="button dark">Learn more</a>';
										} elseif ( $link && $label ) {
											echo '<a href="' . $link . '" class="button light">' . $label . '</a>';
										} elseif ( $link ) {
											echo '<a href="' . $link . '" class="button light">Learn more</a>';
										}
									}
								}
							}
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- / FEATURE SECTION -->