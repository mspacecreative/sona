<?php
$columns = get_field('columns');
$rowheading = get_field('row_heading');
$rowsubheading = get_field('row_sub_heading');
$bgcolor = get_field('background_colour');
$textcolor = get_field('text_colour');
$boxedcontent = get_field('boxed_content');
$blockanchor = get_field('block_anchor');
$rowwidth = get_field('row_width');
$centeredtext = get_field('center_align_text');
$roundedcorners = get_field('rounded_corners');
$centeredheading = get_field('centered_heading');
$icon = get_sub_field('icon');
$sectionpadding = get_field('section_padding');

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
switch ( $sectionpadding ) {
	case 'top':
		$sectionpadding = ' top-padding';
		break;
	case 'bottom':
		$sectionpadding = ' bottom-padding';
		break;
	case 'both':
		$sectionpadding = ' top-bottom-padding';
		break;
	default:
		$sectionpadding = '';
}
switch ($columns) {
	case 'two':
		$columns = ' col-lg-6 col-md-6 col-sm-6 col-xs-6';
		break;
	case 'three':
		$columns = ' col-lg-4 col-md-4 col-sm-6 col-xs-6';
		break;
	case 'four':
		$columns = ' col-lg-3 col-md-3 col-sm-6 col-xs-6';
		break;
	case 'five':
		$columns = ' col-lg-1_5 col-md-1_5 col-sm-1_5 col-xs-6';
		break;
	default:
		$columns = ' col-lg-6 col-md-6 col-sm-6 col-xs-6';
}
switch ($bgcolor) {
	case 'dark':
		$bgcolour = ' darkbg light';
		break;
	case 'light':
		$bgcolour = ' lightbg';
		break;
	default:
		$bgcolour = ' lightbg';
} ?>

<div<?php if ( $id ): echo ' id="'; echo $id; echo '"'; endif; ?> class="variable-columns-block<?php if ($sectionpadding): echo $sectionpadding; endif; if ( $className ): echo esc_attr($className); endif; if ($bgcolour): echo $bgcolour; endif; ?>">

	<div class="inner no-top-bottom-padding<?php if ($narrow): echo ' maxWidth980'; endif; ?>">
		
		<?php if ($rowheading): ?>
		<h1 class="<?php if ($rowsubheading): echo 'bottom-margin-1'; else: echo 'bottom-margin-2'; endif; if ($centeredheading): echo ' text-align-center'; endif; ?>"><?php echo $rowheading ?></h1>
		<?php endif; ?>
		
		<?php if ($rowsubheading): ?>
		<h2 class="bottom-margin-2<?php if ($centeredheading): echo ' text-align-center'; endif; ?>"><?php echo $rowsubheading ?></h2>
		<?php endif;
		
		if( have_rows('columns_grid') ): ?>
		<div class="row gutter_space_2 bullet-points extra-col-spacing<?php if ($centeredtext): echo ' center-lg center-md center-sm center-xs'; endif; if ($icon): echo ' icons-visible'; endif; if ($rowwidth): echo $rowwidth; endif; ?>">
			
			<?php while( have_rows('columns_grid') ): the_row();
			$inlinelinks = get_sub_field('inline_links'); ?>
			
			<div class="col bottomMarginMobile<?php if ($columns): echo $columns; endif; ?>">
				
				<?php if ($boxedcontent): ?>
				<div class="boxed<?php if ($bgcolor == 'dark'): echo ' dark'; endif; if ($roundedcorners): echo ' roundedCorners'; endif; ?>">
				<?php endif;
				
				if ($inlinelinks) {
					include 'includes/content-inline.php';
				} else {
					include 'includes/content-stacked.php';
				}
				
				if ($boxedcontent): ?>
				</div>
				<?php endif; ?>
				
			</div>
			
			<?php endwhile; ?>
			
		</div>
		<?php endif; ?>
		
	</div>
</div>