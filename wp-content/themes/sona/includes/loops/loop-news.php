<?php
global $paged;
$curpage = $paged ? $paged : 1;
$args = array(
'category_name' => 'news',
'posts_per_page' => 12,
'paged' => $paged
);
$query = new WP_Query( $args );
 if ($query->have_posts()): ?>

	<div class="row gutter_space_1 gridContainer">
	
	<?php while ($query->have_posts()) : $query->the_post(); ?>
	
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('col col-lg-4 col-md-4 col-sm-6 col-xs-12'); ?>>
	
			<div class="boxed">
			
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail( 'card-feature', 600, 338, array('center', 'center') ); // Declare pixel size you need inside the array ?>
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
					<span class="date-author"><?php the_time('F j, Y'); ?><!--&nbsp;|&nbsp;
					<?php _e( 'By', 'sona' ); ?> <?php the_author_posts_link(); ?></span>
					 /post details -->
			
					<?php html5wp_excerpt('html5wp_index'); ?>
			
					<!--<?php edit_post_link(); ?> -->
				</div>
				
			</div>
	
		</article>
		<!-- /article -->
		
	<?php endwhile; ?>
		
	</div>
	
	<?php include 'pagination.php'; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'sona' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; wp_reset_query(); ?>
