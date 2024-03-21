<?php

define("THEME_VERSION", "1.0.0");

/**
 * Proper way to enqueue scripts and styles
 */
function enqueue_all()
{
    wp_enqueue_style('additional-styles', get_template_directory_uri() . "/assets/css/additional-styles.css", array(), THEME_VERSION, false);
    wp_enqueue_script('additional-scripts', get_template_directory_uri() . '/assets/js/additional-scripts.js', array(), THEME_VERSION, true);
}
add_action('wp_enqueue_scripts', 'enqueue_all');
