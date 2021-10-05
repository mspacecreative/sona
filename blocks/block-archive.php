<?php
$posttype = get_field('post_type');
$membertype = get_field('membership_type');
$brandtype = get_field('brand_type');
$format = get_field('display_format');
$sectionpadding = get_field('section_padding');
$colcount = get_field('column_count');

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

switch ($colcount) {
	case 'two':
		$colcount = ' col-lg-6 col-md-6 col-sm-6 col-xs-6';
		break;
	case 'three':
		$colcount = ' col-lg-4 col-md-4 col-sm-6 col-xs-6';
		break;
	case 'four':
		$colcount = ' col-lg-3 col-md-3 col-sm-6 col-xs-6';
		break;
	case 'five':
		$colcount = ' col-lg-1_5 col-md-1_5 col-sm-1_5 col-xs-6';
		break;
	default:
		$colcount = ' col-lg-6 col-md-6 col-sm-6 col-xs-6';
}

switch ($sectionpadding) {
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

if ( $posttype == 'product' ) {
	
	$args = array(
	'post_type' => $posttype,
	'posts_per_page'=> -1,
	);
	
	include 'includes/block-loop-products.php';
}

elseif ( $posttype == 'team' && $membertype == 'core-team' || $membertype == 'scientific-advisory-board' || $membertype == 'management' || $membertype == 'sona-board' ) {

	$args = array(
	    'posts_per_page' => -1,
	    'post_type'      => $posttype,
	    'tax_query' => array (
			array(
			'taxonomy' => 'member_type',
			'field' => 'slug',
			'terms' => $membertype,
			)
		)
	);

	include 'includes/block-loop-team.php';
} 

elseif ( $posttype == 'team' ) {
	
	$args = array(
	    'posts_per_page' => -1,
	    'post_type'      => $posttype,
	);
	
	include 'includes/block-loop-team.php';
}

elseif ( $posttype == 'brand' && $format == 'grid' && $brandtype == 'resource' || $brandtype == 'partner' ) {
	
	$args = array(
	    'posts_per_page' => -1,
	    'post_type'      => $posttype,
	    'tax_query' => array (
			array(
			'taxonomy' => 'brand_type',
			'field' => 'slug',
			'terms' => $brandtype,
			)
		)
	);

	include 'includes/block-loop-brand_grid.php';
}

elseif ( $posttype == 'brand' && $format == 'carousel' && $brandtype == 'resource' || $brandtype == 'partner' ) {
	
	$args = array(
	    'posts_per_page' => -1,
	    'post_type'      => $posttype,
	    'tax_query' => array (
			array(
			'taxonomy' => 'brand_type',
			'field' => 'slug',
			'terms' => $brandtype,
			)
		)
	);

	include 'includes/block-loop-brand_carousel.php';
} ?>

<style>
	.product img {
		display: block;
		width: 100%;
	}
	.productButton {
		margin-top: 1em;
	}
</style>