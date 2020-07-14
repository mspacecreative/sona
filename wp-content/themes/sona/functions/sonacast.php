<?php 
// SONACAST
function sonaCastEpisodes() {
	ob_start();
		get_template_part('includes/sonacast');
	return ob_get_clean();
}

add_shortcode( 'sonacast_episodes', 'sonaCastEpisodes' );