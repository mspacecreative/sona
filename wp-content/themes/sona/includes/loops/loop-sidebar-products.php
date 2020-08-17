<?php 
$args = array(
	'post_type' => 'product',
	'posts_per_page'=> -1,
	'post__not_in'  => array(get_the_ID())
);
	
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) : ?>

<div class="divided related-posts hide-on-mobile">
	<div class="row">
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 sidebarProductBox">
			<div class="event-container row">
		        <?php
		        $productImg = get_field('product_image');
		        if( !empty( $productImg ) ): ?>
		        <span class="event-thumb col-lg-4 col-md-4 col-sm-4 col-xs-4">
		        	<a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($productImg['url']); ?>" alt="<?php echo esc_attr($productImg['alt']); ?>" /></a>
		        </span>
					
				<?php else : ?>
		        <span class="event-thumb col-lg-4 col-md-4 col-sm-4 col-xs-4">
		        	<a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/placeholders/sona-placeholder-square.jpg" alt="Sona Nanotech" /></a>
		        </span>
					
		        <?php endif; ?>
		        <div class="bucket-content col-lg-4 col-md-4 col-sm-8 col-xs-8">
		        	<h4><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
		        </div>
					
		    </div>
		</div>
	<?php endwhile; ?>
	</div>
		
</div>
	
<?php endif; wp_reset_query(); ?>