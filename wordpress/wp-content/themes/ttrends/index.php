<?php get_header(); ?>
      <div style="padding-top: 220px; text-align: center;">
        <h1>Blog</h1>
      </div>
      <div class="row">
        <div class="col-sm-8 blog-main" style="margin-top: 30px;">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
              <?php get_template_part('content', get_post_format()); ?>
          <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>
        </div><!-- /.blog-main -->
      </div>
<?php get_footer(); ?>
