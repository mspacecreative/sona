<?php

function sona_styles()
{
    wp_register_script('conditionizr', get_template_directory_uri() . '/assets/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
    wp_enqueue_script('conditionizr');

    wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
    wp_enqueue_script('modernizr');

    wp_register_script('sona-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true); // Custom scripts
    wp_enqueue_script('sona-scripts');
    
    wp_register_style('sona-styles', get_template_directory_uri() . '/assets/css/style.css', array(), null, 'all');
    wp_enqueue_style('sona-styles');
    
    wp_register_style('typekit', 'https://use.typekit.net/nqa2hgd.css', array(), null, 'all');
    wp_enqueue_style('typekit');
    
    wp_register_script('fontawesome', 'https://use.fontawesome.com/6ccd600e51.js', array('jquery'), null, true);
	wp_enqueue_script('fontawesome');
}
add_action('wp_enqueue_scripts', 'sona_styles');