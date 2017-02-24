<footer class="container site-footer">
  <hr/>
	<div class="row">
    <?php dynamic_sidebar('footer-widget-area'); ?>
  </div>
  <hr/>
  <div class="row">
    <div class="col-lg-12 site-sub-footer">
      <?php
            wp_nav_menu( array(
                'theme_location'    => 'navbar-left',
                'depth'             => 2,
                'menu_class'        => 'footer-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
      <p>&copy; <?php echo date('Y'); ?> Cra. 12A # 77A - 52 / Of. 601 · Bogotá D.C</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
