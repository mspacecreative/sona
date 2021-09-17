<?php
$heading = get_sub_field('heading');
$iconsizing = get_sub_field('icon_sizing');
$icon = get_sub_field('icon');
$size = 'medium';
$content = get_sub_field('content');
					
if ( $heading ) {
	echo '<h3 class="gold">' . $heading . '</h3>';
}

if ($icon): ?>
<div class="icon row middle-lg middle-md middle-sm middle-xs" style="flex-direction: column">
	<div class="iconContainer<?php if ($iconsizing): echo ' alt'; endif; ?>">
		<?php echo wp_get_attachment_image( $icon, $size ); ?>
	</div>
	<?php endif; ?>
	<?php if ($icon): ?>
	<span class="icon-text">
	<?php endif;
		if ($content):
		echo $content;
		endif;
	if ($icon): ?>
	</span>
	<?php endif;
if ($icon): ?>
</div>
<?php endif;

include 'cta-button-inline.php';