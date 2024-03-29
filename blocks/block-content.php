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
$rowtoppadding = get_field('row_top_padding');
$rowbottompadding = get_field('row_bottom_padding');

// CUSTOM ID
$id = '' . $block['id'];
if ( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}
// CUSTOM CLASS	
$className = '';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
	
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
switch ($bgposition) {
	case 'top':
		$bgposition = 'top center';
		break;
	case 'bottom':
		$bgposition = 'bottom center';
		break;
	case 'center':
		$bgposition = 'center center';
		break;
	default:
		$bgposition = '';
}
switch ( $overlay ) {
	case 'dark':
		$overlay = 'dark-overlay';
		break;
	case 'light':
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
	case 'dark':
		$bgcolor = ' darkbg';
		break;
	case 'light':
		$bgcolor = ' lightbg';
		break;
	default:
		$bgcolor = '';
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
} ?>

<section<?php if ( $id ): echo ' id="'; echo $id; echo '"'; endif; ?> class="content-section<?php if ( $className ): echo esc_attr($className); endif; if ( $align ): echo $align; endif; if ( $bgcolor ): echo $bgcolor; endif; if ( $bgimg ): echo ' section_has_bg_img'; endif; ?>"<?php if ( $bgimg ): echo ' style="background-image: url('; echo $bgimg; echo ');'; if ( $bgposition ): echo ' background-position: '; echo $bgposition; else: echo ' background-position: center'; endif; echo '"'; endif; if ( $blockvisibility == 1 ): echo 'style="display:none; opacity: 0.25;"'; endif; ?>>
	
	<?php if ( $overlay ): ?>
	<div class="<?php if ( $overlay ): echo $overlay; endif; ?>" style="position: absolute; height: 100%; width: 100%; top: 0; left: 0; opacity: <?php if ( $overlayopacity ): echo $overlayopacity; else: echo '.75'; echo ';'; endif; ?>"></div>
	<?php endif; ?>
	
	<div class="bullet-points inner<?php if ( $rowwidth ): echo $rowwidth; endif; if ( $text ): echo $text; endif; ?>">
		<?php include('includes/section-content-loop.php'); ?>
	</div>
	
</section>