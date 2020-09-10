<?php
$hexheading = get_field('hex_heading');
$rowheading = get_field('heading');
$centerheading = get_field('align_heading');
$colcount = get_field('column_count');
?>
<!-- FEATURED PRODUCTS -->
<section class="featured-products section relativePositioning goldBorderTop darkGreyBg light">
	<?php if ( $hexheading ) {
		echo '<div class="absoluteHeading">
				<h3>' . $hexheading . '</h3>
			  </div>';
	} ?>
				
	<div class="inner">
		<?php if ( $rowheading && $centerheading == 'left' ) {
			echo '<h1>' . $rowheading . '</h1>';
		} elseif ( $rowheading && $centerheading == 'center' ) {
			echo '<h1 class="text-align-center">' . $rowheading . '</h1>';
		} elseif ( $rowheading && $centerheading == 'right' ) {
			echo '<h1 class="text-align-right">' . $rowheading . '</h1>';
		} elseif ( $rowheading ) {
			echo '<h1>' . $rowheading . '</h1>';
		}
		if ( have_rows('products') ): ?>
		<div class="row gutter_space_2 centeredList topBottomPaddingShort extra-col-spacing">
			
			<?php while ( have_rows('products') ): the_row();
			
			$productheading = get_sub_field('product_heading');
			$productsuper = get_sub_field('title_superscript');
			$productimg = get_sub_field('product_image');
			$productimgposition = get_sub_field('image_position');
			$size = 'medium';
			$content = get_sub_field('content');
			$bulletspacing = get_sub_field('bullet_spacing');
			
			if ( $colcount == 'two' ): ?>
			<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 bottomMarginMobile">
			<?php elseif ( $colcount == 'three' ): ?>
			<div class="col col-lg-4 col-md-6 col-sm-12 col-xs-12 bottomMarginMobile">
			<?php elseif ( $colcount == 'four' ): ?>
			<div class="col col-lg-3 col-md-4 col-sm-12 col-xs-12 bottomMarginMobile">
			<?php else : ?>
			<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 bottomMarginMobile">
			<?php endif; ?>
			
				<div class="boxed relativePositioning dark roundedCorners">
					<?php if ( $productheading && $productsuper ) {
						echo '<h1 class="tachyon">' . $productheading . '<sup>' . $productsuper . '</sup></h1>';
					} elseif ( $productheading ) {
						echo '<h1 class="tachyon">' . $productheading . '</h1>';
					}
					if ( $content && $bulletspacing ) {
						echo '<div class="bulletSpacing bullet-points">' . $content . '</div>';
					} elseif ( $content ) {
						echo '<div class="bullet-points">' . $content . '</div>';
					}
					if ( have_rows('cta_button') ) {
						while ( have_rows('cta_button') ) {
							the_row();
							$link = get_sub_field('link');
							$label = get_sub_field('label');
							if ( $link && $label ) {
								echo '<a class="button light" href="' . $link . '">' . $label . '</a>';
							} elseif ( $link ) {
								echo '<a class="button light" href="' . $link . '">' . __('Learn more') . '</a>';
							}
						}
					}
					if ( $productimg && $productimgposition ) {
						echo '<img src="' . esc_url($productimg['url']) . '" alt="' . esc_attr($productimg['alt']) . '" class="productAbsoluteImg flushRight">';
					} elseif ( $productimg ) {
						echo '<img src="' . esc_url($productimg['url']) . '" alt="' . esc_attr($productimg['alt']) . '" class="productAbsoluteImg">';
					} ?>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</section>
<!-- / FEATURED PRODUCTS -->