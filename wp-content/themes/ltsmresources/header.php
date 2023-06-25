<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>Learn With Us!</strong></a></h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
              <!-- <li <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 16) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-us') ?>">About Us</a></li> 

              <li <?php if (get_post_type() == 'lesson') echo 'class="current-menu-item"' ?>><a href="<?php echo get_post_type_archive_link('lesson') ?>">Lessons</a></li>
              <li <?php if (get_post_type() == 'grade') echo 'class="current-menu-item"' ?>><a href="<?php echo get_post_type_archive_link('grade') ?>">Grades</a></li>

              <li <?php if (get_post_type() == 'event' OR is_page('past-events')) echo 'class="current-menu-item"';  ?>><a href="<?php echo get_post_type_archive_link('event'); ?>">Events</a></li>
              <li><a href="#">Campuses</a></li>
              <li <?php if (get_post_type() == 'post') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/blog'); ?>">Blog</a></li> -->

              <!-- social media icons -->
              <li class="social-media" <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 16) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-us') ?>"><img src="wp-content/themes/ltsmresources/images/social-media1.svg" alt="email"></a></li>
              <li class="social-media" <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 16) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-us') ?>"><img src="wp-content/themes/ltsmresources/images/social-media2.svg" alt="email"></a></li>
              <li class="social-media" <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 16) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-us') ?>"><img src="wp-content/themes/ltsmresources/images/social-media3.svg" alt="email"></a></li>
              <li class="social-media" <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 16) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-us') ?>"><img src="wp-content/themes/ltsmresources/images/social-media4.svg" alt="email"></a></li>
            </ul>
          </nav>
          <div class="site-header__util">
            <a href="#" class="btn btn--small login-btn float-left push-right">Login</a>
            <a href="#" class="btn btn--small  sign-up-btn float-left">Sign Up</a>
          </div>
        </div>
      </div>
    </header>
  
    <div>
      <ul class="sec-nav">
        <li class="sec-menu-item" <?php if (is_page('science') or wp_get_post_parent_id(0) == 16) echo 'class="sec-menu-item"' ?>><a class="width-icon" href="<?php echo site_url('#') ?>"><img src="wp-content/themes/ltsmresources/images/science.svg" alt=""></a><span>Science</span></li>
        <li class="sec-menu-item" <?php if (is_page('technology') or wp_get_post_parent_id(0) == 16) echo 'class="sec-menu-item"' ?>><a class="width-icon" href="<?php echo site_url('#') ?>"><img src="wp-content/themes/ltsmresources/images/technology.svg" alt=""></a><span>Technology</span></li>
        <li class="sec-menu-item" <?php if (is_page('engineering') or wp_get_post_parent_id(0) == 16) echo 'class="sec-menu-item"' ?>><a class="width-icon" href="<?php echo site_url('#') ?>"><img src="wp-content/themes/ltsmresources/images/engineering.svg" alt=""></a><span>Engineering</span></li>
        <li class="sec-menu-item" <?php if (is_page('mathematics') or wp_get_post_parent_id(0) == 16) echo 'class="sec-menu-item"' ?>><a class="width-icon" href="<?php echo site_url('#') ?>"><img src="wp-content/themes/ltsmresources/images/math.svg" alt=""></a><span>Mathematics</span></li>
      </ul>
    </div>
