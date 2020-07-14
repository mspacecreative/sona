<?php
$blockanchor = get_field('block_anchor');
$bgcolor = get_field('background_colour');
$textcolor = get_field('text_colour');
$shortcode = get_field('shortcode');
$rowheading = get_field('row_heading');
$rowsubheading = get_field('row_sub_heading');
$centeredheading = get_field('row_heading_alignment');

if ( $textcolor == 'light' ): 

if ( $blockanchor && $bgcolor == 'lightblue' ): ?>
<div id="<?php echo $blockanchor ?>" class="section light_blue_bg light">

<?php elseif ( $blockanchor && $bgcolor == 'lightgrey' ) : ?>
<div id="<?php echo $blockanchor ?>" class="section light_grey_bg light">

<?php elseif ( $blockanchor ) : ?>
<div id="<?php echo $blockanchor ?>" class="section white_bg light">

<?php else : ?>
<div class="section white_bg">
<?php endif; ?>

 	<div class="inner no-top-bottom-padding">
 	
	 	<?php if ( $rowheading && $rowsubheading && $centeredheading ) {
			echo '
				<div class="text-align-center bottom-margin">
					<h1>' . $rowheading . '</h1>
					<h4>' . $rowsubheading . '</h4>
				</div>
				';
		} elseif ( $rowheading && $rowsubheading ) {
			echo '
				<h1>' . $rowheading . '</h1>
				<h4 class="bottom-margin">' . $rowsubheading . '</h4>
				';
		} elseif ( $rowheading && $centeredheading ) {
			echo '<h1 class="text-align-center bottom-margin">' . $rowheading . '</h1>';
		} elseif ( $rowheading ) {
			echo '<h1 class="bottom-margin">' . $rowheading . '</h1>';
		}
	 	
	 	if ( $shortcode ) {
			echo $shortcode;
		} ?>
		
 	</div>
	
</div>

<?php elseif ( $textcolor == 'dark' ):

if ( $blockanchor && $bgcolor == 'lightblue' ) : ?>
<div id="<?php echo $blockanchor ?>" class="section light_blue_bg">

<?php elseif ( $blockanchor && $bgcolor == 'lightgrey' ) : ?>
<div id="<?php echo $blockanchor ?>" class="section light_grey_bg">

<?php elseif ( $blockanchor ) : ?>
<div id="<?php echo $blockanchor ?>" class="section white_bg">

<?php else : ?>
<div class="section white_bg">
<?php endif; ?>

 	<div class="inner no-top-bottom-padding">
 	
	 	<?php if ( $rowheading && $rowsubheading && $centeredheading ) {
			echo '
				<div class="text-align-center bottom-margin">
					<h1>' . $rowheading . '</h1>
					<h4>' . $rowsubheading . '</h4>
				</div>
				';
		} elseif ( $rowheading && $rowsubheading ) {
			echo '
				<h1>' . $rowheading . '</h1>
				<h4 class="bottom-margin">' . $rowsubheading . '</h4>
				';
		} elseif ( $rowheading && $centeredheading ) {
			echo '<h1 class="text-align-center bottom-margin">' . $rowheading . '</h1>';
		} elseif ( $rowheading ) {
			echo '<h1 class="bottom-margin">' . $rowheading . '</h1>';
		}
	 	
	 	if ( $shortcode ) {
			echo $shortcode;
		} ?>
		
 	</div>
	
</div>

<?php else :

if ( $blockanchor && $bgcolor == 'lightblue' ) : ?>
<div id="<?php echo $blockanchor ?>" class="section light_blue_bg">

<?php elseif ( $blockanchor && $bgcolor == 'lightgrey' ) : ?>
<div id="<?php echo $blockanchor ?>" class="section light_grey_bg">

<?php elseif ( $blockanchor ) : ?>
<div id="<?php echo $blockanchor ?>" class="section white_bg">

<?php else : ?>
<div class="section white_bg">
<?php endif; ?>

 	<div class="inner no-top-bottom-padding">
 	
	 	<?php if ( $rowheading && $rowsubheading && $centeredheading ) {
			echo '
				<div class="text-align-center bottom-margin">
					<h1>' . $rowheading . '</h1>
					<h4>' . $rowsubheading . '</h4>
				</div>
				';
		} elseif ( $rowheading && $rowsubheading ) {
			echo '
				<h1>' . $rowheading . '</h1>
				<h4 class="bottom-margin">' . $rowsubheading . '</h4>
				';
		} elseif ( $rowheading && $centeredheading ) {
			echo '<h1 class="text-align-center bottom-margin">' . $rowheading . '</h1>';
		} elseif ( $rowheading ) {
			echo '<h1 class="bottom-margin">' . $rowheading . '</h1>';
		}
	 	
	 	if ( $shortcode ) {
			echo $shortcode;
		} ?>
		
 	</div>
	
</div>

<?php endif; ?>