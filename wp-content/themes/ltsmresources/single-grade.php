<?php
  
  get_header();

  while(have_posts()) {
    the_post(); ?>
    <div class="inner_banner" style="background-color:#DEE7F4;">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
    </div>

    <div class="container container--narrow page-section">
          

      <div class="generic-content">
        <div class="row group">

          <div class="one-third">
            <?php the_post_thumbnail('gradePortrait'); ?>
          </div>

          <div class="two-thirds">
            <?php the_content(); ?>
          </div>

        </div>
      </div>

      <?php
        $relatedLessons = get_field('related_lessons');
      
        if ($relatedLessons) {
          echo '<hr class="section-break">';
          echo '<h2 class="headline headline--medium">Subject(s) Taught</h2>';
          echo '<ul class="link-list min-list">';
          foreach($relatedLessons as $lesson) { ?>
            <li><a href="<?php echo get_the_permalink($lesson); ?>"><?php echo get_the_title($lesson); ?></a></li>
          <?php }
          echo '</ul>';
        }

      ?>

    </div>
    

    
  <?php }

  get_footer();

?>