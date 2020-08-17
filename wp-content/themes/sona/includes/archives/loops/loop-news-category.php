<?php
$currCat = get_category(get_query_var('cat'));
$cat_name = $currCat->name;
$cat_id   = get_cat_ID( $cat_name );
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
$args = array(
	'posts_per_page' => 12,
	'paged' => $paged,
	'cat' => $cat_id
);

$wp_query = new WP_Query( $args );

if ($wp_query->have_posts()): ?>

	<div class="row gutter_space_1 gridContainer">
	
	<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
	
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('col col-lg-4 col-md-4 col-sm-6 col-xs-12'); ?>>
	
			<div class="boxed">
			
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail() ): // Check if thumbnail exists ?>
					<a class="featureImgLink" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(array(600,338)); // Declare pixel size you need inside the array ?>
					</a>
				<?php else : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholders/sona-placeholder-wide.jpg">
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->
		
				<div class="boxed-inner">
					
					<!-- post details -->
					<span class="date-author"><?php the_time('F j, Y'); ?><!--&nbsp;|&nbsp;
					<?php _e( 'By', 'sona' ); ?> <?php the_author_posts_link(); ?>--></span>
					 <!-- /post details -->
					
					<!-- post title -->
					<h2>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h2>
					<!-- /post title -->
			
					<?php html5wp_excerpt('html5wp_index');
					
					if ( has_excerpt() ) {
						echo '<p class="view-article-container"><a class="view-article button dark" href="' . get_permalink($post->ID) . '">' . __('Read more', 'sona') . '</a></p>';
					} ?>
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
