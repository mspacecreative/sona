<?php
function load_post_by_ajax_callback() {
    check_ajax_referer('view_modal', 'security');
    $args = array(
        'post_type' => array(
        	'application',
        	'brand',
        	'product',
        	'testimonials',
        	'team',
        	'financial_report',
        ),
        'post_status' => 'publish',
        'p' => $_POST['id'],
    );
 
    $posts = new WP_Query( $args );
 
    $arr_response = array();
    if ($posts->have_posts()) {
 
        while($posts->have_posts()) {
 
            $posts->the_post();
            $title = get_the_title();
            $excerpt = get_field('excerpt');
            $modal_content = apply_filters( 'the_content', get_the_content() );
 
            $arr_response = array(
                'title' => $title,
                'excerpt' => $excerpt,
                'content' => $modal_content,
            );
        }
        wp_reset_postdata();
    }
 
    echo json_encode($arr_response);
 
    wp_die();
}

add_action('wp_ajax_load_page_by_ajax', 'load_post_by_ajax_callback');
add_action('wp_ajax_nopriv_load_page_by_ajax', 'load_post_by_ajax_callback');

// MODAL
function openModal() {
	ob_start();
		get_template_part('includes/templates/modal');
	return ob_get_clean();
}
add_shortcode( 'modal', 'openModal' );