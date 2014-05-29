<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/content', get_post_format()); ?>
  <h1><a href="<?php the_field('re_event_registration_link'); ?>"><?php the_title(); ?></a></h1>
  <p class="lead"><?php the_field('re_start_date'); ?> - <?php the_field('re_end_date'); ?></p>
  <h3><?php the_field('re_venue'); ?></h3>
  <img src="<?php the_field('re_event_photo'); ?>" class="img-responsive" alt="<?php the_title(); ?>"> <br>
  <p><?php the_content(); ?></p>
  <p><a href="<?php the_field('re_event_registration_link'); ?>" class="btn btn-default">More Info</a></p>
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
