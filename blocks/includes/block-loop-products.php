<?php

$loop = new WP_Query( $args );
if ( $loop->have_posts() ) :

	$productheading = get_sub_field('product_heading');
	$productsuper = get_sub_field('title_superscript');

	if ( $productheading && $productsuper ) {
		echo '<h1 class="tachyon">' . $productheading . '<sup>' . $productsuper . '</sup></h1>';
	} elseif ( $productheading ) {
		echo '<h1 class="tachyon">' . $productheading . '</h1>';
	} ?>
	
	<div class="maxWidth800">	
		<div class="productsContainer row gutter_space_1 center-lg center-md center-sm center-xs topPadding">
				
			<?php while ( $loop->have_posts() ) : $loop->the_post();
			$title = get_the_title();
			//$featuredImg = get_the_post_thumbnail( $post_id, 'medium' );
			$productImg = get_field('product_image', get_the_ID());
			$colcount = get_field('column_count', get_the_ID());
			
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
			} ?>
				
			<div class="product col center<?php if ($colcount): echo $colcount; endif; ?>">
			
				<?php 
				if( !empty( $productImg ) ): ?>
					<img src="<?php echo esc_url($productImg['url']); ?>" alt="<?php echo esc_attr($productImg['alt']); ?>" />
				<?php endif;
				
				global $post;
				$terms = wp_get_post_terms( $post->ID, 'brand');
				foreach ( $terms as $term ) : ?>
				<a class="productButton button dark" href="<?php the_permalink(); ?>"><?php echo $term->name ?><?php _e('&#8482;'); ?> <?php echo $title ?></a>
				<?php endforeach; ?>
			
			</div>
			<?php endwhile; ?>
			
		</div>
	</div>
	
<?php endif; wp_reset_query();