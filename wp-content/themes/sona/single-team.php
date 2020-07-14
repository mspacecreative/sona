<?php get_header();

	$defaultimg = get_template_directory_uri() . '/assets/img/placeholders/page-header.jpg'; ?>

	<section class="relativePositioning header-container shorter lightOverlay" style="background-image: url(<?php echo $defaultimg ?>); background-position: bottom;">
		
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
		<div class="inner">
			<!-- post title -->
			<h1 class="postTitle">
				<?php the_title(); ?>
			</h1>
			<?php if ( get_field('position__title') ): ?>
			<h4 style="margin-top: 10px;"><?php the_field('position__title'); ?></h4>
			<?php endif;
			if ( have_rows('social_media') ) {
				while ( have_rows('social_media') ) {
					the_row();
					$linkedin = get_sub_field('linkedin');
					$twitter = get_sub_field('twitter');
					
					echo '<div class="team-social-media">';	
					
					if ( $linkedin ) {
						echo '<a href="' . $linkedin . '" target="_blank"><i class="fa fa-linkedin"></i></a>';
					}
					if ( $twitter ) {
						echo '<a href="' . $twitter . '" target="_blank"><i class="fa fa-twitter"></i></a>';
					}
					
					echo '</div>';
				}
			} ?>
			<!-- /post title -->
		</div>
		
		<?php endwhile; endif; rewind_posts(); ?>
		
	</section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<section class="relativePositioning borderTopGoldGradient">
		<div class="inner">
			<div class="row gutter_space_3">
				<div class="col col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							
						<!--post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<!-- <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail('large'); // Fullsize image for the single post ?>
						</a>-->
						<?php endif; ?>
						<!-- /post thumbnail -->
						
						<?php the_content(); // Dynamic Content ?>
			
						<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
			
					</article>
					<!-- /article -->
				</div>
				<div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12 topPadding">
					<?php dynamic_sidebar('sidebar-team'); ?>
				</div>
			</div>
		</div>
	</section>

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'sona' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>

<?php get_footer(); ?>
