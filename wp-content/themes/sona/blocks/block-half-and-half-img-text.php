<?php
$bgcolor = get_field('background_colour');
$contenttype = get_field('content_type');
$aligncolumns = get_field('align_columns');
$rowheading = get_field('row_heading');
$textcolor = get_field('text_colour');
$headingcolor = get_field('heading_colour');
$blockanchor = get_field('block_anchor');
$reverse = get_field('reverse_columns');
$goldBorder = get_field('gold_border');
$narrow = get_field('narrow_row');
$colratio = get_field('column_ratio');
$removeBulletSpacing = get_field('remove_spacing_between_bullet_points');
$furtherbox = get_field('detail_box');

if ( $blockanchor && $bgcolor == 'light' && $goldBorder ): ?>
<div id="<?php echo $blockanchor ?>" class="section lightbg borderTopGoldGradient">

<?php elseif ( $blockanchor && $bgcolor == 'dark' && $goldBorder ): ?>
<div id="<?php echo $blockanchor ?>" class="section darkbg light borderTopGoldGradient">

<?php elseif ( $blockanchor && $goldBorder ): ?>
<div id="<?php echo $blockanchor ?>" class="section lightbg borderTopGoldGradient">

<?php elseif ( $blockanchor && $bgcolor == 'light' ): ?>
<div id="<?php echo $blockanchor ?>" class="section lightbg">

<?php elseif ( $blockanchor && $bgcolor == 'dark' ): ?>
<div id="<?php echo $blockanchor ?>" class="section darkbg light">

<?php elseif ( $bgcolor == 'light' && $goldBorder ): ?>
<div class="section lightbg borderTopGoldGradient">

<?php elseif ( $bgcolor == 'dark' && $goldBorder ): ?>
<div class="section darkbg borderTopGoldGradient light">

<?php elseif ( $bgcolor == 'dark' ): ?>
<div class="section darkbg light">

<?php elseif ( $blockanchor ): ?>
<div id="<?php echo $blockanchor ?>" class="section lightbg">

<?php elseif ( $goldBorder ): ?>
<div class="section lightbg borderTopGoldGradient">

<?php else : ?>
<div class="section lightbg">

<?php endif;

 	if ( $narrow ): ?>
	<div class="inner no-top-bottom-padding maxWidth980">
	<?php else : ?>
	<div class="inner no-top-bottom-padding">
	<?php endif; ?>
		
		<?php 
		if ( $rowheading ) {
			echo '<h2>' . $rowheading . '</h2>';
		}
		
		if ( $aligncolumns == 'top' && $reverse ): ?>
		<div data-aos="fade-up" class="row relativePositioning gutter_space_1 top-lg top-md reverse">
		<?php elseif ( $aligncolumns == 'middle' && $reverse ): ?>
		<div data-aos="fade-up" class="row relativePositioning gutter_space_1 middle-lg middle-md reverse">
		<?php elseif ( $aligncolumns == 'bottom' && $reverse ): ?>
		<div data-aos="fade-up" class="row relativePositioning gutter_space_1 bottom-lg bottom-md reverse">
		<?php elseif ( $aligncolumns == 'top' && $reverse ): ?>
		<div data-aos="fade-up" class="row relativePositioning gutter_space_1 top-lg top-md reverse">
		<?php elseif ( $aligncolumns == 'top' ): ?>
		<div data-aos="fade-up" class="row relativePositioning gutter_space_1 top-lg top-md">
		<?php elseif ( $aligncolumns == 'middle' ): ?>
		<div data-aos="fade-up" class="row relativePositioning gutter_space_1 middle-lg middle-md">
		<?php elseif ( $aligncolumns == 'bottom' ): ?>
		<div data-aos="fade-up" class="row relativePositioning gutter_space_1 bottom-lg bottom-md">
		<?php elseif ( $reverse ): ?>
		<div data-aos="fade-up" class="row relativePositioning gutter_space_1 reverse">
		<?php else : ?>
		<div data-aos="fade-up" class="row relativePositioning gutter_space_1">
		<?php endif; ?>
			
			<?php if( have_rows('left_column') ):
	 		while( have_rows('left_column') ): the_row();
	 		$heading = get_sub_field('heading');
			$content = get_sub_field('content');
			$contenttype = get_sub_field('content_type');
	 		
	 		if ( $colratio == 'three-fifth-two-fifth' ): ?>
			<div class="col-lg-7 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'two-fifth-three-fifth' ): ?>
			<div class="col-lg-5 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'two-third-one-third' ): ?>
			<div class="col-lg-8 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'one-third-two-third' ): ?>
			<div class="col-lg-4 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'three-quarter-one-quarter' ): ?>
			<div class="col-lg-10 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'one-quarter-three-quarter' ): ?>
			<div class="col-lg-2 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php else : ?>
			<div class="col-lg-6 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php endif;
			
				if ( $contenttype == 'carousel' ): ?>
				
				<div class="carousel who_we_are">
						
						<?php
						$images = get_sub_field('photo_gallery');
						$size = 'large';
						
						if( $images ):
						foreach( $images as $image ): ?>
						
						<div>
							<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						</div>
						
						<?php 
						endforeach;
						endif; ?>
						
					</div>
				</div>
				
				<?php elseif ( $contenttype == 'image' ):
				
				$img = get_sub_field('image');
				if( !empty( $img ) ): ?>
				<img class="full-width" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
				<?php endif; ?>
				
				<?php else :
				
				if ( $heading ) {
					echo '<h1>' . $heading . '</h1>';
				}
				if ( $content ) {
					if ( $removeBulletSpacing ) {
						echo '<div class="bullet-points removeSpacing">' . $content . '</div>';
					} else {
						echo '<div class="bullet-points">' . $content . '</div>';
					}
				}
				if ( $furtherbox && $bgcolor == 'light' ) {
					echo '<div class="boxed roundedCorners detailBox_light">' . $furtherbox . '</div>';
				} elseif ( $furtherbox && $bgcolor == 'dark' ) {
					echo '<div class="boxed roundedCorners detailBox_dark">' . $furtherbox . '</div>';
				} elseif ( $furtherbox ) {
					echo '<div class="boxed roundedCorners detailBox_light">' . $furtherbox . '</div>';
				}
				if ( have_rows('call_to_action') ) {
					while ( have_rows('call_to_action') ) { 
						the_row();
						$link = get_sub_field('link');
						$label = get_sub_field('label');
						if ( $bgcolor == 'dark' && $link && $label ) {
							echo '<a href="' . $link . '" class="button light">' . $label . '</a>';
						} elseif ( $bgcolor == 'dark' && $link ) {
							echo '<a href="' . $link . '" class="button light">Learn more</a>';
						} elseif ( $bgcolor == 'light' && $link && $label ) {
							echo '<a href="' . $link . '" class="button dark">' . $label . '</a>';
						} elseif ( $bgcolor == 'light' && $link ) {
							echo '<a href="' . $link . '" class="button dark">Learn more</a>';
						} elseif ( $link && $label ) {
							echo '<a href="' . $link . '" class="button dark">' . $label . '</a>';
						} elseif ( $link ) {
							echo '<a href="' . $link . '" class="button dark">Learn more</a>';
						}
					}
				} 
				
				endif; ?>
			</div>
			
			<?php endwhile;
			endif; ?>
			
			<?php if( have_rows('right_column') ):
	 		while( have_rows('right_column') ): the_row();
	 		$contenttype = get_sub_field('content_type');
			
			if ( $colratio == 'three-fifth-two-fifth' ): ?>
			<div class="col-lg-5 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'two-fifth-three-fifth' ): ?>
			<div class="col-lg-7 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'two-third-one-third' ): ?>
			<div class="col-lg-4 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'one-third-two-third' ): ?>
			<div class="col-lg-8 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'three-quarter-one-quarter' ): ?>
			<div class="col-lg-2 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'one-quarter-three-quarter' ): ?>
			<div class="col-lg-10 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php else : ?>
			<div class="col-lg-6 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php endif;
			
				if ( $contenttype == 'carousel' ): ?>
				
				<div class="carousel who_we_are">
						
						<?php
						$images = get_sub_field('photo_gallery');
						$size = 'large';
						
						if( $images ):
						foreach( $images as $image ): ?>
						
						<div>
							<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						</div>
						
						<?php 
						endforeach;
						endif; ?>
						
					</div>
				</div>
				
				<?php elseif ( $contenttype == 'image' ):
				
				$img = get_sub_field('image');
				if( !empty( $img ) ): ?>
				<img class="full-width" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
				<?php endif; ?>
				
				<?php else :
				
				if ( $heading ) {
					echo '<h1>' . $heading . '</h1>';
				}
				if ( $content ) {
					if ( $removeBulletSpacing ) {
						echo '<div class="bullet-points removeSpacing">' . $content . '</div>';
					} else {
						echo '<div class="bullet-points">' . $content . '</div>';
					}
				}
				if ( $furtherbox && $bgcolor == 'light' ) {
					echo '<div class="boxed roundedCorners detailBox_light">' . $furtherbox . '</div>';
				} elseif ( $furtherbox && $bgcolor == 'dark' ) {
					echo '<div class="boxed roundedCorners detailBox_dark">' . $furtherbox . '</div>';
				} elseif ( $furtherbox ) {
					echo '<div class="boxed roundedCorners detailBox_light">' . $furtherbox . '</div>';
				}
				if ( have_rows('call_to_action') ) {
					while ( have_rows('call_to_action') ) { 
						the_row();
						$link = get_sub_field('link');
						$label = get_sub_field('label');
						if ( $bgcolor == 'dark' && $link && $label ) {
							echo '<a href="' . $link . '" class="button light">' . $label . '</a>';
						} elseif ( $bgcolor == 'dark' && $link ) {
							echo '<a href="' . $link . '" class="button light">Learn more</a>';
						} elseif ( $bgcolor == 'light' && $link && $label ) {
							echo '<a href="' . $link . '" class="button dark">' . $label . '</a>';
						} elseif ( $bgcolor == 'light' && $link ) {
							echo '<a href="' . $link . '" class="button dark">Learn more</a>';
						} elseif ( $link && $label ) {
							echo '<a href="' . $link . '" class="button dark">' . $label . '</a>';
						} elseif ( $link ) {
							echo '<a href="' . $link . '" class="button dark">Learn more</a>';
						}
					}
				} 
				
				endif; ?>
			</div>
			
			<?php endwhile;
			endif; ?>
			
		</div>
	</div>
</div>