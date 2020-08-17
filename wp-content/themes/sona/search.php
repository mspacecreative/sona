<?php get_header();

 	get_template_part('includes/templates/page-header-search'); ?>

	<section class="relativePositioning section">
		<div class="inner">
			<?php get_template_part('includes/loops/loop-search'); ?>
		</div>
	</section>

<?php get_footer(); ?>