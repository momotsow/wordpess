<?php get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image"><?php echo '<img src="wp-content/themes/ltsmresources/images/banner.svg" alt="Image" />'; ?></div>
  </div>  
</div>

<div class="home-page container">
  <h1>Grades</h1>
  <!-- Grades -->
  <div class="slideshow">
    <ul class="min-list">
      <?php
      $homepageGrades = new WP_Query(array(
        'posts_per_page' => 50,
        'post_type' => 'grade'
      ));

      while ($homepageGrades->have_posts()) {
        $homepageGrades->the_post(); ?>
        <li class="slide">
          <div class="card">
            <div class="event-summary__content">
              <h2><?php the_title(); ?></h2>
              <p>Books & Learning Materials here</p>
            </div>
            <a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue reading</a>
          </div>
        </li>
      <?php }
      ?>
    </ul>
    <a class="prev">&#10094;</a>
    <a class="next">&#10095;</a>
  </div>

  <h1>Latest lessons</h1>
  <!-- lessons -->
  <div class="slideshow2">
  <ul class="link-list min-list">
    <?php
    $homepageLessons = new WP_Query(array(
      'posts_per_page' => 50,
      'post_type' => 'lesson'
    ));

    while ($homepageLessons->have_posts()) {
      $homepageLessons->the_post(); ?>
      <li class="slide2">
        <div class="card">
          <div class="card-content">
            <div class="card-img">
              <?php the_post_thumbnail('lessonPortrait'); ?>
            </div>
            <div class="event-summary__content">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
          </div>
        </div>
      </li>
    <?php }
    ?>
  </ul>
  <a class="prev2">&#10094;</a>
  <a class="next2">&#10095;</a>
</div>

  <h1>Events</h1>
  <!-- Grades -->
  <ul class="link-list min-list">

    <?php 

      $homepageEvents = new WP_Query(array(
        'posts_per_page' => 4,
        'post_type' => 'event'
      ));

      while($homepageEvents->have_posts()) {
        $homepageEvents->the_post(); ?>
        <div class="event-summary">
          
          <div class="event-summary__content">
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          </div>
        </div>
      <?php }
    ?>
  </ul>
</div>

<?php get_footer();

?>
