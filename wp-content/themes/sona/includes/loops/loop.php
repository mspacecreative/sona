<?php
global $paged;
$curpage = $paged ? $paged : 1;
$args = array(
'posts_per_page' => 12,
'paged' => $paged
);
$wp_query = new WP_Query( $args );
if ( $wp_query->have_posts() ): ?>

	<div class="row gutter_space_1 gridContainer">
	
	<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
	
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('col col-lg-4 col-md-4 col-sm-6 col-xs-12'); ?>>
	
			<div class="boxed">
			
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail() ): // Check if thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail( 'card-feature', 600, 338, array('center', 'center') ); // Declare pixel size you need inside the array ?>
					</a>
					<?php else : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholders/sona-placeholder-wide.jpg">
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->
		
				<div class="boxed-inner">
					<!-- post title -->
					<h2>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h2>
					<!-- /post title -->
			
					<!-- post details -->
					<span class="date-author"><?php the_time('F j, Y'); ?></span>
					<!-- /post details -->
			
					<?php html5wp_excerpt('html5wp_index'); ?>
			
					<!--<?php edit_post_link(); ?> -->
				</div>
				
			</div>
	
		</article>
		<!-- /article -->
		
	<?php endwhile; ?>
		
	</div>
	
	<?php include 'pagination/pagination.php';

	else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'sona' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
