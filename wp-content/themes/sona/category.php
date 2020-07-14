<?php get_header();

 	get_template_part('includes/templates/page-header-category'); ?>

	<section class="relativePositioning borderTopGoldGradient">
		<div class="inner topPadding">
			<?php get_template_part('includes/archives/loops/loop-news'); ?>
		</div>
	</section>

<?php get_footer(); ?>
