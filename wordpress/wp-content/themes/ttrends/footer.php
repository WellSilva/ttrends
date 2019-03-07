      <?php if(!is_front_page()) : ?>
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <?php if(is_active_sidebar('sidebar')): ?>
            <?php dynamic_sidebar('sidebar'); ?>
          <?php endif; ?>
        </div><!-- /.blog-sidebar -->
      <?php endif; ?>

    </div>
  </body>

  <footer>
    <?php wp_footer(); ?>
    Developed by Wellington Silva - 2019
  </footer
</html>
