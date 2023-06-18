<?php

function ltsm_resources_files() {
    wp_enqueue_script('ltsm_resources_js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style('ltsm_resources_styles', get_stylesheet_uri());
    wp_enqueue_style('ltsm_resources_extra_styles', get_theme_file_uri('/build/index.css'));

}

add_action('wp_enqueue_scripts', 'ltsm_resources_files');

function resources_feature() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('pageBanner', 1500, 350, true);
}

add_action('after_setup_theme', 'resources_feature');

function ltsm_adjust_queries($query) {
  if (!is_admin() AND is_post_type_archive('program') AND is_main_query()) {
    $query->set('orderby', 'title');
    $query->set('order', 'ASC');
    $query->set('posts_per_page', -1);
  }

  if (!is_admin() AND is_post_type_archive('event') AND is_main_query()) {
    $today = date('Ymd');
    $query->set('meta_key', 'event_date');
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
    $query->set('meta_query', array(
              array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
              )
            ));
  }
}
  
add_action('pre_get_posts', 'ltsm_adjust_queries');