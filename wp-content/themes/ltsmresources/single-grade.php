<?php
get_header();

while (have_posts()) {
  the_post(); ?>
  <div class="inner_banner" style="background-color:#DEE7F4;">
    <h1 class="page-banner__title"><?php the_title(); ?></h1>
  </div>

  <div class="container">
    <?php
    $relatedLessons = get_field('related_program');

    if ($relatedLessons) {
      echo '<ul class="link-list min-list grid-wrap">';
      foreach ($relatedLessons as $lesson) { ?>
        <li class="card">
          <div class="card-content">
            <div class="card-img">
              <?php echo get_the_post_thumbnail($lesson, 'lessonPortrait'); ?>
            </div>
            <div class="event-summary__content">
              <a href="<?php echo get_the_permalink($lesson); ?>">
                <?php echo get_the_title($lesson); ?>
              </a>
            </div>
          </div>
        </li>
      <?php }
      echo '</ul>';
    }
    ?>
  </div>
<?php }

get_footer();
?>
