<?php

function ltsm_resources_files() {
    wp_enqueue_style('ltsm_resources_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'ltsm_resources_files');

?>