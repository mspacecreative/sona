<?php
$bgimg = get_field('background_image');
$bgcolor = get_field('background_color');
$blockanchor = get_field('block_anchor');
$overlay = get_field('overlay');
$rowwidth = get_field('row_width');
$textcolour = get_field('text_colour');
$txtalign = get_field('text_alignment');
$hide = get_field('hide_block');
$overlayopacity = get_field('overlay_opacity');
$bgposition = get_field('background_position');
$blockvisibility = get_field('block_visibility');
	
switch ($rowwidth) {
	case '800':
		$rowwidth = ' max-width-800';
		break;
	case '1080':
		$rowwidth = ' max-width-1080';
		break;
	case '1280':
		$rowwidth = ' max-width-1280';
		break;
	default:
		$rowwidth = '';
}
switch ( $overlay ) {
	case 'dark':
		$overlay = 'dark-overlay';
		break;
	case 'white':
		$overlay = 'light-overlay';
		break;
	default:
		$overlay = '';
}
switch ( $textcolour ) {
	case 'dark':
		$text = '';
		break;
	case 'light':
		$text = ' light';
		break;
	default:
		$text = '';
}
switch ( $bgcolor ) {
	case 'blue':
		$bg = ' brandbluebg light';
		break;
	case 'grey':
		$bg = ' brandlightgreybg';
		break;
	default:
		$bg = '';
}
switch ( $txtalign ) {
	case 'center':
		$align = ' text-align-center';
		break;
	case 'right':
		$align = ' text-align-right';
		break;
	case 'default':
		$align = '';
		break;
	default:
		$align = '';
}
switch ( $bgcolor ) {
	case 'blue':
		$shade = ' brandbluebg light';
		break;
	case 'green':
		$shade = ' brandgreenbg';
		break;
	case 'grey':
		$shade = ' brandlightgreybg';
		break;
	default:
		$shade = '';
} ?>

<section<?php if ( $blockanchor ): echo ' id="'; echo $blockanchor; echo '"'; endif; ?> class="content-section<?php if ( $align ): echo $align; endif; if ( $bg ): echo $bg; endif; if ( $bgimg ): echo ' section_has_bg_img'; endif; ?>"<?php if ( $bgimg ): echo ' style="background-image: url('; echo $bgimg; echo ');'; if ( $bgposition ): echo ' background-position: '; echo $bgposition; else: echo ' background-position: center'; endif; echo '"'; endif; if ( $blockvisibility == 0 ): echo 'style="display:none; opacity: 0.25;"'; endif; ?>>
	
	<?php if ( $overlay ): ?>
	<div class="<?php if ( $overlay ): echo $overlay; endif; ?>" style="position: absolute; height: 100%; width: 100%; top: 0; left: 0; opacity: <?php if ( $overlayopacity ): echo $overlayopacity; else: echo '.75'; echo ';'; endif; ?>"></div>
	<?php endif; ?>
	
	<div class="bullet-points inner<?php if ( $rowwidth ): echo $rowwidth; endif; if ( $text ): echo ' '; echo $text; endif; ?>">
		<?php include('includes/section-content-loop.php'); ?>
	</div>
	
</section>