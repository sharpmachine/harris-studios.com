<?php get_template_part('templates/page', 'header'); ?>
<div class="container">

  <!-- <h2 class="text-purple border-bottom text-center">Redding is Alive!</h2> -->

  <?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
      <?php _e('Sorry, no results were found.', 'roots'); ?>
    </div>
    <?php get_search_form(); ?>
  <?php endif; ?>

  <?php while (have_posts()) : the_post(); ?>

  <div class="row event-post text-light">

    <div class="col-xs-12">
      <div class="event-post-date pull-right">
        <?php the_field('re_start_date'); ?>
        <?php if (get_field('re_end_date')): ?>
        - <?php the_field('re_end_date'); ?>
        <?php endif; ?>
      </div>
      <div class="clearfix"></div>
      <div class="event-post-photo pull-left">
        <a href="<?php the_field('re_event_registration_link'); ?>">
          <?php

            $image = get_field('re_event_photo');
            $size = 'redding-event-photo-retina';

            if( $image ) {

              echo wp_get_attachment_image( $image, $size );

            }

          ?>
        </a>
      </div>
      <div class="event-post-info pull-left">
        <h2><a href="<?php the_field('re_event_registration_link'); ?>"><?php the_title(); ?></a></h2>
        <p class="lead"><?php the_field('re_venue'); ?></p>
         <p><?php echo wp_trim_words( get_the_content(), 24 ); ?></p>
      </div>
      <div class="more-info pull-left">
          <a href="<?php the_field('re_event_registration_link'); ?>" class="btn btn-default">
            <i class="fa fa-angle-right"></i>
            More Info
            <i class="fa fa-external-link"></i>
          </a>
      </div>
    </div>
  </div>

  <?php endwhile; ?>

  <?php if ($wp_query->max_num_pages > 1) : ?>
    <nav class="post-nav">
      <ul class="pager">
        <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
        <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
      </ul>
    </nav>
  <?php endif; ?></div>
