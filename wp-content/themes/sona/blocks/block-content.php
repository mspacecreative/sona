<?php
$bgimg = get_field('background_image');
$bgcolor = get_field('background_color');
$blockanchor = get_field('block_id');
$bgimgoverlay = get_field('background_image_overlay');
$blockanchor = get_field('block_id');
	
if ( $bgimg ):

	if ( $blockanchor && $bgimgoverlay == 'dark' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="bg-img-cover dark-overlay content-section" style="background-image: url(<?php echo $bgimg ?>);">
		<div class="inner">
			<?php include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $bgimgoverlay == 'light' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="bg-img-cover light-overlay content-section" style="background-image: url(<?php echo $bgimg ?>);">
		<div class="inner">
			<?php include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php elseif ( $bgimgoverlay == 'dark' ): ?>
	<div class="bg-img-cover dark-overlay content-section" style="background-image: url(<?php echo $bgimg ?>);">
		<div class="inner">
			<?php include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php elseif ( $bgimgoverlay == 'light' ): ?>
	<div class="bg-img-cover light-overlay content-section" style="background-image: url(<?php echo $bgimg ?>);">
		<div class="inner">
			<?php include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php elseif ( $blockanchor ): ?>
	<div id="<?php the_field('block_id'); ?>" class="bg-img-cover dark-overlay content-section" style="background-image: url(<?php echo $bgimg ?>);">
		<div class="inner">
			<?php include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php else : ?>
	<div class="bg-img-cover content-section" style="background-image: url(<?php echo $bgimg ?>);">
		<div class="inner">
			<?php include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	<?php endif;
	
elseif ( $bgcolor == 'light' ):
	
	if ( $blockanchor ) : ?>
	<div id="<?php the_field('block_id'); ?>" class="lightbg content-section">
		<div class="inner">
			<?php include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php else : ?>
	<div class="lightbg content-section">
		<div class="inner">
			<?php include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	<?php endif;
	
elseif ( $bgcolor == 'dark' ):
	
	if ( $blockanchor ) : ?>
	<div id="<?php the_field('block_id'); ?>" class="darkbg content-section light">
		<div class="inner">
			<?php include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php else : ?>
	<div class="darkbg content-section light">
		<div class="inner">
			<?php include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	<?php endif;
	
else : 
	
	if ( $blockanchor ) : ?>
	<div id="<?php the_field('block_id'); ?>" class="lightbg content-section">
		<div class="inner">
			<?php include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php else : ?>
	<div class="lightbg content-section">
		<div class="inner">
			<?php include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	<?php endif;

endif; ?>