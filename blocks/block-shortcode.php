<?php
$blockanchor = get_field('block_anchor');
$bgcolor = get_field('background_colour');
$shortcode = get_field('shortcode');
$rowheading = get_field('row_heading');
$productsuper = get_field('title_superscript');
$rowsubheading = get_field('row_sub_heading');
$centeredheading = get_field('row_heading_alignment');
$stylizedrowheading = get_field('stylized_heading');

if ( $blockanchor && $bgcolor == 'light' ): ?>
<div id="<?php echo $blockanchor ?>" class="section lightbg">

<?php elseif ( $blockanchor && $bgcolor == 'dark' ) : ?>
<div id="<?php echo $blockanchor ?>" class="section darkbg light">

<?php elseif ( $blockanchor && $bgcolor == 'darkgrey' ) : ?>
<div id="<?php echo $blockanchor ?>" class="section darkGreyBg light">

<?php elseif ( $bgcolor == 'light' ): ?>
<div class="section lightbg">

<?php elseif ( $bgcolor == 'dark' ) : ?>
<div class="section darkbg light">

<?php elseif ( $bgcolor == 'darkgrey' ) : ?>
<div class="section darkGreyBg light">

<?php elseif ( $blockanchor ) : ?>
<div id="<?php echo $blockanchor ?>" class="section lightbg">

<?php else : ?>
<div class="section lightbg">
<?php endif; ?>

 	<div class="inner no-top-bottom-padding">
 	
	 	<?php if ( $rowheading && $rowsubheading && $centeredheading && $stylizedrowheading && $productsuper ) {
			echo '
				<div class="text-align-center bottom-margin">
					<h1 class="tachyon">' . $rowheading . '<sup>' . $productsuper . '</sup></h1>
					<h4>' . $rowsubheading . '</h4>
				</div>
				';
		} elseif ( $rowheading && $rowsubheading && $centeredheading && $stylizedrowheading ) {
			echo '
				<div class="text-align-center bottom-margin">
					<h1 class="tachyon">' . $rowheading . '</h1>
					<h4>' . $rowsubheading . '</h4>
				</div>
				';
		} elseif ( $rowheading && $rowsubheading && $centeredheading ) {
			echo '
				<div class="text-align-center bottom-margin">
					<h1>' . $rowheading . '</h1>
					<h4>' . $rowsubheading . '</h4>
				</div>
				';
		} elseif ( $rowheading && $rowsubheading && $stylizedrowheading && $productsuper ) {
			echo '
				<h1 class="tachyon">' . $rowheading . '<sup>' . $productsuper . '</sup></h1>
				<h4 class="bottom-margin">' . $rowsubheading . '</h4>
				';
		} elseif ( $rowheading && $rowsubheading && $stylizedrowheading ) {
			echo '
				<h1 class="tachyon">' . $rowheading . '</h1>
				<h4 class="bottom-margin">' . $rowsubheading . '</h4>
				';
		} elseif ( $rowheading && $rowsubheading ) {
			echo '
				<h1>' . $rowheading . '</h1>
				<h4 class="bottom-margin">' . $rowsubheading . '</h4>
				';
		} elseif ( $rowheading && $centeredheading && $stylizedrowheading && $productsuper ) {
			echo '<h1 class="text-align-center bottom-margin tachyon">' . $rowheading . '<sup>' . $productsuper . '</sup></h1>';
		} elseif ( $rowheading && $centeredheading && $stylizedrowheading ) {
			echo '<h1 class="text-align-center bottom-margin tachyon">' . $rowheading . '</h1>';
		} elseif ( $rowheading && $centeredheading ) {
			echo '<h1 class="text-align-center bottom-margin">' . $rowheading . '</h1>';
		} elseif ( $rowheading && $stylizedrowheading && $productsuper ) {
			echo '<h1 class="bottom-margin tachyon">' . $rowheading . '<sup>' . $productsuper . '</sup></h1>';
		} elseif ( $rowheading && $stylizedrowheading ) {
			echo '<h1 class="bottom-margin tachyon">' . $rowheading . '</h1>';
		} elseif ( $rowheading ) {
			echo '<h1 class="bottom-margin">' . $rowheading . '</h1>';
		}
	 	
	 	if ( $shortcode ) {
			echo $shortcode;
		} ?>
		
 	</div>
	
</div>