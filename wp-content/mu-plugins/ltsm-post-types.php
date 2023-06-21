<?php

function ltsm_post_types() {
  // Event Post type => Jokes
  register_post_type('event', array(
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-art'
  ));

  //Program => Lesson
    register_post_type('lesson', array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'thumbnail'),
      'rewrite' => array('slug' => 'lessons'),
      'has_archive' => true,
      'public' => true,
      'labels' => array(
        'name' => 'Lessons',
        'add_new_item' => 'Add New Lesson',
        'edit_item' => 'Edit Lesson',
        'all_items' => 'All Lessons',
        'singular_name' => 'Lesson'
      ),
      'menu_icon' => 'dashicons-awards'
    ));

     // Professor Post Type => Grade
    register_post_type('grade', array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'thumbnail'),
      'has_archive' => true,
      'public' => true,
      'labels' => array(
        'name' => 'Grade',
        'add_new_item' => 'Add New Grade',
        'edit_item' => 'Edit Grade',
        'all_items' => 'All Grades',
        'singular_name' => 'Grade'
      ),
      'menu_icon' => 'dashicons-welcome-learn-more'
    ));
}

add_action('init', 'ltsm_post_types');
