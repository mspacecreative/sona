<?php 
$file = get_field('file');
$thumb = get_field('pdf_thumbnail');
$label = get_field('label');
$height = get_field('iframe_height');
$alt = $thumb['alt'];

// ENQUEUE STYLESHEET
wp_register_style('pdf-embed', get_template_directory_uri() . '/assets/css/pdf-embed.css', array(), $ver_num, 'all');
wp_enqueue_style('pdf-embed');

// CUSTOM ID
$id = '' . $block['id'];
if ( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}
// CUSTOM CLASS	
$className = '';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
} ?>

<section<?php if ( $id ): echo ' id="'; echo $id; echo '"'; endif; ?> class="pdf-embed-block text-align-center<?php if ( $className ): echo esc_attr($className); endif; ?>">
	<?php if ( !empty($thumb) ): ?>
	<div class="embed-thumbnail-container">
		<a href="<?php echo $file['url'] ?>" target="_blank">
			<img src="<?php echo $thumb['url'] ?>" alt="<?php if ($alt): echo $alt; else: echo 'Sona Nanotech'; endif; ?>">
		</a>
	</div>
	<?php endif; ?>
	<object class="wp-block-file__embed" data="<?php echo $file['url'] ?>" type="application/pdf" style="width:100%; height:<?php if ($height): echo $height; else: echo '600'; echo 'px;'; endif; ?>" aria-label="PDF embed"></object>
	<div class="top-bottom-padding">
		<a class="dark button" href="<?php echo $file['url'] ?>" target="_blank"><?php if ($label): echo __($label); else: echo __('View PDF'); endif; ?></a>
	</div>
</section>