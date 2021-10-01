<?php
$heading = get_sub_field('heading');
$iconsizing = get_sub_field('icon_sizing');
$icon = get_sub_field('icon');
$size = 'medium';
$content = get_sub_field('content');
$object = get_sub_field('application');
					
if ( $heading ) {
	echo '<h3 class="gold">' . $heading . '</h3>';
}

if ($object):
setup_postdata($object);

echo 
'<'; if ($object): echo 'a href="#" data-id="'; echo $object->ID; echo '"'; else: echo 'div'; endif; echo ' class="icon row middle-lg middle-md middle-sm middle-xs view-modal"'; echo ' style="flex-direction: column">';
elseif ($icon):
echo 
'<div'; echo ' class="icon row middle-lg middle-md middle-sm middle-xs"'; echo ' style="flex-direction: column">';
endif; ?>
	<?php if ($icon): ?>
	<div class="iconContainer<?php if ($iconsizing): echo ' alt'; endif; ?>">
		<?php echo wp_get_attachment_image( $icon, $size ); ?>
	</div>
	<?php endif; ?>
	
	<?php if ($icon): ?>
	<span class="icon-text">
	<?php endif;
		if ($content):
		echo $content;
		elseif ($object):
		setup_postdata($object);
		$title = get_the_title($object);
		echo $title;
		endif;
	if ($icon): ?>
	</span>
	<?php endif;
if ($icon || $object):
echo '</'; if ($object): echo 'a'; else: echo 'div'; endif; echo '>';
endif;

include 'cta-button-stacked.php';