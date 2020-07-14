<?php 
$args = array( 
	'post_type' => 'team',
	'posts_per_page'=> -1, 
	'post__not_in' => array( $post->ID ) 
);
$arr_posts = new WP_Query( $args ); ?>
	
	<ul class="divided related-posts hide-on-mobile">
		<?php while ( $arr_posts->have_posts() ) : $arr_posts->the_post(); ?>
		
		<div class="event-container row">
        	<?php
        	if ( has_post_thumbnail() ): ?>
        	<span class="event-thumb col-lg-3 col-md-3 col-sm-4 col-xs-4">
        		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'sidebar' ); ?></a>
        	</span>
			
			<?php else : ?>
        	<span class="event-thumb col-lg-3 col-md-3 col-sm-4 col-xs-4">
        		<a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/placeholders/sona-placeholder-square.jpg" alt="Sona Nanotech" /></a>
        	</span>
			<?php endif; ?>
			
        	<div class="bucket-content col-lg-9 col-md-9 col-sm-8 col-xs-8">
        		<h4><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
        		<?php if ( get_field('position__title') ): ?>
				<p class="date-author"><?php the_field('position__title'); ?></p>
				<?php endif; ?>
        	</div>
			
        </div>
		
		<?php endwhile; ?>
		
	</ul>
	
<?php wp_reset_query(); ?>