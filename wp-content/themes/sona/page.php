<?php get_header();
	$hidetitle = get_field('hide_page_title');
	if ( $hidetitle ) {
		if ( have_posts() ) {
			while ( have_posts() ) {
				echo '<div class="topPadding">';
				the_post();
				
				the_content() . 
				
				'</div>';
			}
		}
	}
	
	else {
	
		get_template_part('includes/templates/page-header');
	
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				
				the_content();
			}
		}
	}

	get_footer(); ?>
