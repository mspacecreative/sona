<?php get_header();

	get_template_part('includes/templates/page-header-author'); ?>
		
	<section class="relativePositioning">
		<div class="inner topPadding">
			<?php get_template_part('includes/loops/loop'); ?>
		</div>
	</section>

<?php get_footer(); ?>