<?php 
$args = array( 
	'post_type' => 'brand',
	'posts_per_page'=> -1, 
	'post__not_in' => array( $post->ID ),
	'tax_query' => array(
		array(
		'taxonomy' => 'brand_type',
		'field' => 'slug',
		'terms' => 'partner'
		)
	)
);
$arr_posts = new WP_Query( $args ); ?>
	
	<div class="divided related-posts hide-on-mobile">
		
		<div class="event-container row">
        	<?php
        	while ( $arr_posts->have_posts() ) : $arr_posts->the_post();
		
			$imagelogo = get_field('logo_image', get_the_ID());
			$size = 'medium';
			$logolink = get_field('logo_link', get_the_ID());
			$shrinklogo = get_field('square_logo', get_the_ID());
			$permalink = get_the_permalink(get_the_ID());
			
        	if ( $imagelogo && $logolink && $shrinklogo ) : ?>
        	<span class="partnerLogo event-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12">
        		<a href="<?php echo $logolink ?>" target="_blank">
					<span class="shrink-logo">
						<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
					</span>
				</a>
        	</span>
			
			<?php elseif ( $imagelogo && $shrinklogo ) : ?>
        	<span class="partnerLogo event-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12">
        		<a href="<?php echo $permalink ?>">
					<span class="shrink-logo">
						<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
					</span>
				</a>
        	</span>
			
			<?php elseif ( $imagelogo && $logolink ) : ?>
			<span class="partnerLogo event-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<a href="<?php echo $logolink ?>" target="_blank">
					<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
				</a>
			</span>
			<?php elseif ( $imagelogo ) : ?>
			<span class="partnerLogo event-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<a href="<?php echo $permalink ?>">
					<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
				</a>
			</span>
			<?php endif;
			
			endwhile; ?>
			
        </div>
		
	</div>
	
<?php wp_reset_query(); ?>