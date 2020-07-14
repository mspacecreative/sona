<?php 
$padding = get_field('section_padding');
$width = get_field('content_width');
$content = get_field('content_editor');
$txtalign = get_field('text_alignment');
	
if ( $txtalign == 'left' ):
	if ( $width && $padding == 'both' ): ?>
	<div class="maxWidth800 top-bottom-padding clear">
	
	<?php elseif ( $width && $padding == 'top'): ?>
	<div class="maxWidth800 top-padding clear">
	
	<?php elseif ( $width && $padding == 'bottom'): ?>
	<div class="maxWidth800 bottom-padding clear">
	
	<?php elseif ( $padding == 'bottom'): ?>
	<div class="bottom-padding clear">
	
	<?php elseif ( $padding == 'top'): ?>
	<div class="top-padding clear">
	
	<?php elseif ( $padding == 'both' ): ?>
	<div class="top-bottom-padding clear">
	
	<?php elseif ( $width ): ?>
	<div class="maxWidth800 clear">
	
	<?php else : ?>
	<div class="top-bottom-padding clear">
	<?php endif;
	
		if ( $content && $bgcolor = 'light' ) {
			echo $content;
			include 'content-cta-button-light.php';
		} elseif ( $content && $bgcolor = 'dark' ) {
			echo $content;
			include 'content-cta-button-dark.php';
		} else {
			echo $content;
			include 'content-cta-button-light.php';
		} ?>
			
	</div>
	
<?php elseif ( $txtalign == 'center' ):
	if ( $width && $padding == 'both' ): ?>
	<div class="maxWidth800 top-bottom-padding clear text-align-center">
	
	<?php elseif ( $width && $padding == 'top'): ?>
	<div class="maxWidth800 top-padding clear text-align-center">
	
	<?php elseif ( $width && $padding == 'bottom'): ?>
	<div class="maxWidth800 bottom-padding clear text-align-center">
	
	<?php elseif ( $padding == 'bottom'): ?>
	<div class="bottom-padding clear text-align-center">
	
	<?php elseif ( $padding == 'top'): ?>
	<div class="top-padding clear text-align-center">
	
	<?php elseif ( $padding == 'both' ): ?>
	<div class="top-bottom-padding clear text-align-center">
	
	<?php elseif ( $width ): ?>
	<div class="maxWidth800 clear text-align-center">
	
	<?php else : ?>
	<div class="top-bottom-padding clear text-align-center">
	<?php endif;
	
		if ( $content && $bgcolor = 'light' ) {
			echo $content;
			include 'content-cta-button-light.php';
		} elseif ( $content && $bgcolor = 'dark' ) {
			echo $content;
			include 'content-cta-button-dark.php';
		} else {
			echo $content;
			include 'content-cta-button-light.php';
		} ?>
			
	</div>
	
<?php elseif ( $txtalign == 'right' ):
	if ( $width && $padding == 'both' ): ?>
	<div class="maxWidth800 top-bottom-padding clear text-align-right">
	
	<?php elseif ( $width && $padding == 'top'): ?>
	<div class="maxWidth800 top-padding clear text-align-right">
	
	<?php elseif ( $width && $padding == 'bottom'): ?>
	<div class="maxWidth800 bottom-padding clear text-align-right">
	
	<?php elseif ( $padding == 'bottom'): ?>
	<div class="bottom-padding clear text-align-right">
	
	<?php elseif ( $padding == 'top'): ?>
	<div class="top-padding clear text-align-right">
	
	<?php elseif ( $padding == 'both' ): ?>
	<div class="top-bottom-padding clear text-align-right">
	
	<?php elseif ( $width ): ?>
	<div class="maxWidth800 clear text-align-right">
	
	<?php else : ?>
	<div class="top-bottom-padding clear text-align-right">
	<?php endif;
	
		if ( $content && $bgcolor = 'light' ) {
			echo $content;
			include 'content-cta-button-light.php';
		} elseif ( $content && $bgcolor = 'dark' ) {
			echo $content;
			include 'content-cta-button-dark.php';
		} else {
			echo $content;
			include 'content-cta-button-light.php';
		} ?>
			
	</div>
	
<?php else :
	if ( $width && $padding == 'both' ): ?>
	<div class="maxWidth800 top-bottom-padding clear">
	
	<?php elseif ( $width && $padding == 'top'): ?>
	<div class="maxWidth800 top-padding clear">
	
	<?php elseif ( $width && $padding == 'bottom'): ?>
	<div class="maxWidth800 bottom-padding clear">
	
	<?php elseif ( $padding == 'bottom'): ?>
	<div class="bottom-padding clear">
	
	<?php elseif ( $padding == 'top'): ?>
	<div class="top-padding clear">
	
	<?php elseif ( $padding == 'both' ): ?>
	<div class="top-bottom-padding clear">
	
	<?php elseif ( $width ): ?>
	<div class="maxWidth800 clear">
	
	<?php else : ?>
	<div class="top-bottom-padding clear">
	<?php endif;
	
		if ( $content && $bgcolor = 'light' ) {
			echo $content;
			include 'content-cta-button-light.php';
		} elseif ( $content && $bgcolor = 'dark' ) {
			echo $content;
			include 'content-cta-button-dark.php';
		} else {
			echo $content;
			include 'content-cta-button-light.php';
		} ?>
			
	</div>
	
<?php endif; ?>