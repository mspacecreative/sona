<?php

// LOOP THROUGH NEWS POSTS
function newsPosts() {
	ob_start();
		get_template_part('includes/archives/archive-news');
	return ob_get_clean();
}
add_shortcode( 'news_posts', 'newsPosts' );

// BLOG SIDEBAR RECENT POSTS
function recentPosts() {
	ob_start();
		get_template_part('includes/archives/loops/loop-sidebar-blog');
	return ob_get_clean();
}
add_shortcode( 'sidebar_recent_posts', 'recentPosts' );