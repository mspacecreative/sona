<?php get_header();

	if ( have_posts() ) {
		echo 
		'<div id="main-content">';
		while ( have_posts() ) { 
			the_post();
			the_content();
		}
		echo 
		'</div>';
	}
			
	get_footer(); ?>