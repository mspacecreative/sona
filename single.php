<?php get_header();

	$defaultimg = get_template_directory_uri() . '/assets/img/placeholders/page-header.jpg'; ?>

	<section class="relativePositioning header-container borderBottomGoldGradient shorter lightOverlay" style="background-image: url(<?php echo $defaultimg ?>); background-position: bottom;">
		
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
		<div class="inner">
			<!-- post details -->
			<span class="date-author"><?php the_time('F j, Y'); ?> <!--&nbsp;|&nbsp;
			<?php _e( 'By', 'sona' ); ?> <?php the_author_posts_link(); ?> -->&nbsp;|&nbsp; <?php _e( 'Categorized in: ', 'sona' ); the_category(', '); // Separated by commas ?></span>
			<!-- /post details -->
						
			<!-- post title -->
			<h1 class="postTitle">
				<?php the_title(); ?>
			</h1>
			<!-- /post title -->
		</div>
		
		<?php endwhile; endif; rewind_posts(); ?>
		
	</section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<section class="relativePositioning">
		<div class="inner top-bottom-padding">
			<div class="row gutter_space_3">
				<div class="col col-lg-8 col-md-8 col-sm-12 col-xs-12 bottomMarginMobile">
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
				<div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<?php get_sidebar(); ?>
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
