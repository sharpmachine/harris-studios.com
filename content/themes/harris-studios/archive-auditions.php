<?php
/*
  * Auditions Landing Page
*/
?>
<?php get_template_part('templates/page', 'header'); ?>
<div class="container text-center">
  <div class="row">
    <div class="col-xs-8 col-xs-offset-2">
      <?php if (!have_posts()) : ?>
          <h2><?php _e('There are no upcoming auditions at this time.  Check back soon.', 'roots'); ?></h2>
        <?php get_search_form(); ?>
      <?php endif; ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php //get_template_part('templates/content', get_post_format()); ?>

        <article <?php post_class(); ?>>
          <header>
            <h2 class="entry-title"><?php the_title(); ?></h2>
            <?php //get_template_part('templates/entry-meta'); ?>
            <p class="lead">
              <strong><?php the_field('audition_starting_date'); ?> @ <?php the_field('audition_start_time'); ?></strong>
            </p>
            <address>
              <p><strong>Where:</strong></p>
              <?php the_field('audition_location'); ?>
            </address>
          </header>
          <div class="entry-summary">
            <p><strong>Details:</strong></p>
            <?php the_content(); ?>
          </div>
        </article>
        <hr>
      <?php endwhile; ?>

      <?php if ($wp_query->max_num_pages > 1) : ?>
        <nav class="post-nav">
          <ul class="pager">
            <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
            <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
          </ul>
        </nav>
      <?php endif; ?>
    </div>
  </div>
</div>
