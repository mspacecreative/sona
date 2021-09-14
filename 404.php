<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="section">

			<!-- article -->
			<article id="post-404" class="inner">

				<h1><?php _e( 'Page not found', 'sona' ); ?></h1>
				<p>
				<?php _e( 'The page you&#8217;re looking for does not exist. Please try using the navigation above or refining your search below. Or click ' ); ?><a href="<?php echo home_url(); ?>">here</a><?php _e(' to go to the home page'); ?></p>
				</p>
				<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
