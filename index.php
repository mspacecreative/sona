<?php get_header();

 	get_template_part('includes/templates/page-header-blog'); ?>

	<section class="relativePositioning borderTopGoldGradient">
		<div class="inner topPadding">
			<?php get_template_part('includes/archives/loops/loop-blog'); ?>
		</div>
	</section>

<?php get_footer(); ?>
