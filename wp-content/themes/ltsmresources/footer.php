
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

    <div class="search-overlay search-overlay--active">
    <div class="search-overlay__top">
      <div class="container">
        <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
        <input type="text" class="search-term" placeholder="What are you looking for?" id="search-term">
        <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
      </div>
    </div>
    
    <div class="container">
      <div id="search-overlay__results"></div>
    </div>

  </div>

    <?php wp_footer(); ?>
</body>
</html>