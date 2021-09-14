<?php 
$args = array(
	'post_type' => 'testimonials',
	'posts_per_page'=> 3,
);
	
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) : ?>
	
	<div class="testimonialsContainer row gutter_space_1">
			
		<?php while ( $loop->have_posts() ) : $loop->the_post();
		$content = get_the_content();
		$title = get_the_title();
		$position = get_field('author_positiontitle'); ?>
			
		<div class="testimonial col-lg-4 col-md-4 col-sm-6 col-xs-12 col bottomMarginMobile">
		
			<div class="boxed roundedCorners">
			<?php 
			if ( $content && $title && $position ) :
				echo $content ?>
				<p class="author"><?php echo $title ?></p>
				<p class="position"><?php echo $position ?></p>
				
			<?php elseif ( $content && $title ) :
				echo $content ?>
				<p class="author"><?php echo $title ?></p>
			<?php endif; ?>
			</div>
		
		</div>
		<?php endwhile; ?>
		
	</div>
	
<?php endif; wp_reset_query(); ?>

<style>
	.testimonial {
		position: relative;
	}
	.testimonial::before {
		position: absolute;
		content: "\f10e";
		font-family: fontAwesome;
		top: -20px;
		padding: 5px 15px 0;
		left: 50%;
		font-size: 30px;
		margin-left: -25px;
		background-color: #fff;
		color: #cda85b;
	}
	.light .testimonial::before {
		background-color: #000;
	}
	.testimonial > .boxed {
		border-width: 2px;
		border-color: #333;
	}
	.light .testimonial > .boxed {
		border-color: #cda85b;
	}
</style>
