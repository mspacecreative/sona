<?php
$heading = get_sub_field('heading');
$iconsizing = get_sub_field('icon_sizing');
$icon = get_sub_field('icon');
$size = 'medium';
$content = get_sub_field('content');
					
if ( $heading ) {
	echo '<h4>' . $heading . '</h4>';
}
if ( $icon && $iconsizing && $content ) {
	echo '<div class="icon row larger middle-lg middle-md middle-sm middle-xs" style="flex-direction: column">' . wp_get_attachment_image( $icon, $size ) '<p class="icon-text">' . $content . '</p></div>';
} elseif ( $icon && $content ) {
	echo '<div class="icon row middle-lg middle-md middle-sm middle-xs" style="flex-direction: column">' . wp_get_attachment_image( $icon, $size ) '<p class="icon-text">' . $content . '</p></div>';
} elseif ( $content ) {
	echo $content;
}
					
include 'cta-button-inline.php';