<?php

function ltsm_resources_files() {
    wp_enqueue_script('ltsm_resources_js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style('ltsm_resources_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'ltsm_resources_files');

function resources_feature() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'resources_feature');