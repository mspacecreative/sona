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
		<div class="row gutter_1 top-lg top-md reverse">
		<?php elseif ( $aligncolumns == 'middle' && $reverse ): ?>
		<div class="row gutter_1 middle-lg middle-md reverse">
		<?php elseif ( $aligncolumns == 'bottom' && $reverse ): ?>
		<div class="row gutter_1 bottom-lg bottom-md reverse">
		<?php elseif ( $aligncolumns == 'top' && $reverse ): ?>
		<div class="row gutter_1 top-lg top-md reverse">
		<?php elseif ( $aligncolumns == 'top' ): ?>
		<div class="row gutter_1 top-lg top-md">
		<?php elseif ( $aligncolumns == 'middle' ): ?>
		<div class="row gutter_1 middle-lg middle-md">
		<?php elseif ( $aligncolumns == 'bottom' ): ?>
		<div class="row gutter_1 bottom-lg bottom-md">
		<?php elseif ( $reverse ): ?>
		<div class="row gutter_1 reverse">
		<?php else : ?>
		<div class="row gutter_1">
		<?php endif; ?>
			
			<?php if( have_rows('left_column') ):
	 		while( have_rows('left_column') ): the_row();
	 		$heading = get_sub_field('heading');
			$content = get_sub_field('content'); ?>
			<div class="col-lg-6 mobile-margin-bottom-md-25 col-md-6 col-sm-12 col-xs-12 col-container">
				<?php if ( $heading ) {
					echo '<h1>' . $heading . '</h1>';
				}
				if ( $content ) {
					echo $content;
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
				} ?>
			</div>
			<?php endwhile;
			endif; ?>
			
			<?php if( have_rows('right_column') ):
	 		while( have_rows('right_column') ): the_row();
	 		$contenttype = get_sub_field('content_type'); ?>
			
			<?php if ( $contenttype == 'carousel' ): ?>
			<div class="col-lg-6 col-md-6 col-md-12 col-sm-12 col-xs-12 col-container">
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
			<?php elseif ( $contenttype == 'image' ): ?>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col text-align-center">
				<?php
				$img = get_sub_field('image');
				if( !empty( $img ) ): ?>
				<img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<?php endwhile;
			endif; ?>
			
		</div>
	</div>
</div>