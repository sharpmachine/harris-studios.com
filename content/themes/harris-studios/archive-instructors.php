<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<div class="row">
  <div class="col-sm-6">
    <?php while (have_posts()) : the_post(); ?>
      <?php // get_template_part('templates/content', get_post_format()); ?>
      <h2><?php the_title(); ?></h2>
      <h3><?php the_field('instructor_area_of_expertise'); ?></h3>
      <p class="lead"><?php the_field('instructor_department'); ?></p>
      <img src="<?php the_field('instructor_headshot'); ?>" alt="<?php the_title(); ?>" class="img-responsive img-circle">
      <p><?php //the_content(); ?></p>
      <p><?php the_excerpt(); ?></p>
      <p><a class="post-link" rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>">More</a></p>
      <hr>
    <?php endwhile; ?>
  </div>
  <div class="col-sm-6">
    <h2>Ajax Baby</h2>
    <div id="single-post-container"></div>
  </div>
</div>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
