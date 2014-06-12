<?php
  $event_registration_start = get_post_meta($post->ID, 'event_registration_start', true);
  $event_registration_end = get_post_meta($post->ID, 'event_registration_end', true);
  $todays_date = date('Y-m-d');
  get_template_part('templates/class', 'header');
?>

<section class="cl-details">
  <div class="container">
    <div class="row">
      <div class="col-xs-6">
      <h3>Description:</h3>
      </div>

      <?php if ($todays_date >= $event_registration_start && $todays_date <= $event_registration_end): ?>
      <div class="col-xs-3 pull-right text-right">
        <a href="<?php bloginfo('url'); ?>/class-registration/?ee=<?php echo get_post_meta($post->ID, 'event_id', true); ?>" class="btn btn-lg btn-danger btn-block">Register</a>
      </div>
      <?php endif; ?>
    </div>
    <hr>
    <div class="row">
      <div class="col-xs-8 single-cl-description">
        <?php while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <div class="col-xs-4">
        <div class="single-cl-benefits bg-brand-blueLight text-light">
          <p class="lead">Benefits:</p>
          <?php the_field('lesson_benefits'); ?>
        </div>
      </div>
    </div>
  </div><!-- END: .container -->
</section>

<section class="single-cl-testimony bg-brand-blueLight text-light">
  <div class="container">
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1">
        <?php get_template_part('templates/student', 'testimony' ); ?>
      </div>
    </div>
  </div>
</section>

<section class="single-lesson-instructor">
  <div class="container">
    <h3><?php echo roots_title(); ?> Instructor:</h3>
    <hr>
    <div class="row">
      <div class="col-xs-12">
        <?php get_template_part('templates/class', 'instructors'); ?>
      </div>
    </div>
    <hr>
    <div class="row text-right">
      <?php if ($todays_date >= $event_registration_start && $todays_date <= $event_registration_end): ?>
        <div class="col-xs-9">
          <p class="lead text-purple bodoni">Are you ready to be launched into your brightest future?</p>
        </div>
        <div class="col-xs-3">
          <a href="<?php bloginfo('url'); ?>/class-registration/?ee=<?php echo get_post_meta($post->ID, 'event_id', true); ?>" class="btn btn-lg btn-danger btn-block">Register</a>
        </div>
      <?php else: ?>
        <div class="col-xs-8">
          <p class="lead text-purple bodoni"><strong><span class="text-danger">Registration Closed.</span></strong> Get notified when it opens.</p>
        </div>
        <div class="col-xs-4">
          <?php echo do_shortcode('[mc4wp_form]'); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>


