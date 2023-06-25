
<footer class="site-footer">
      <div class="site-footer__inner container container--narrow">
        <div class="group">
          <div class="site-footer__col-one">
            <?php echo get_theme_file_uri('/images/unisa.jpg') ?>
          </div>

          <div class="site-footer__col-two-three-group">
            <div class="site-footer__col-two">
             <?php echo get_theme_file_uri('/images/unisa.jpg') ?>
            </div>

            <div class="site-footer__col-three">
              <?php echo get_theme_file_uri('/images/unisa.jpg') ?>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <div class="search-overlay">
    <div class="search-overlay__top">
      <div class="container">
        <!-- <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i> -->
        <input type="text" class="search-term" placeholder="What are you looking for?" id="search-term">
        <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
      </div>
    </div>
    
    <div class="container">
      <div id="search-overlay__results"></div>
    </div>

  </div>

    <?php wp_footer(); ?>

    
<script>
  document.addEventListener('DOMContentLoaded', function () {
  let slides = document.querySelectorAll('.slide');
  let currentSlide = 0;

  function showSlide(n) {
    if (n >= slides.length) {
      currentSlide = 0;
    } else if (n < 0) {
      currentSlide = slides.length - 1;
    }

    for (var i = 0; i < slides.length; i++) {
      slides[i].style.display = 'none';
    }

    // Display the current slide and the next two slides
    for (let j = currentSlide; j < currentSlide + 3; j++) {
      slides[j].style.display = 'block';
    }
  }

  function nextSlide() {
    currentSlide++;
    showSlide(currentSlide);
  }

  function prevSlide() {
    currentSlide--;
    showSlide(currentSlide);
  }

  var nextButton = document.querySelector('.next');
  var prevButton = document.querySelector('.prev');

  nextButton.addEventListener('click', nextSlide);
  prevButton.addEventListener('click', prevSlide);
});

document.addEventListener('DOMContentLoaded', function () {
  let slides = document.querySelectorAll('.slide2');
  let currentSlide = 0;

  function showSlide(n) {
    if (n >= slides.length) {
      currentSlide = 0;
    } else if (n < 0) {
      currentSlide = slides.length - 1;
    }

    for (var i = 0; i < slides.length; i++) {
      slides[i].style.display = 'none';
    }

    // Display the current slide and the next two slides
    for (let j = currentSlide; j < currentSlide + 3; j++) {
      slides[j].style.display = 'block';
    }
  }

  function nextSlide() {
    currentSlide++;
    showSlide(currentSlide);
  }

  function prevSlide() {
    currentSlide--;
    showSlide(currentSlide);
  }

  var nextButton = document.querySelector('.next2');
  var prevButton = document.querySelector('.prev2');

  nextButton.addEventListener('click', nextSlide);
  prevButton.addEventListener('click', prevSlide);
});

</script>
</body>
</html>