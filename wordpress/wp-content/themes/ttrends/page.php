<?php get_header(); ?>

      <div class="row">
        <div class="col-sm-8 blog-main">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
          <div class="blog-post">
            <h1>
                <?php the_title(); ?>
            </h1>

            <?php the_content(); ?>
          </div><!-- /.blog-post -->
          <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Page Found'); ?></p>
        <?php endif; ?>

        </div><!-- /.blog-main -->
    </div>

    <?php get_footer(); ?>
