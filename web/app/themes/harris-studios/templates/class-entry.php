<?php
  $event_id = get_post_meta($post->ID, 'event_id', true);
  $event_price = '$' . do_shortcode('[EVENT_PRICE event_id="'.$event_id.'" number="0"]');
  $event_start_date = do_shortcode('[EVENT_TIME event_id="'.$event_id.'" type="start_date" format="M j"]');
  $event_end_date = do_shortcode('[EVENT_TIME event_id="'.$event_id.'" type="end_date" format="M j"]');
  $event_registration_start = get_post_meta($post->ID, 'event_registration_start', true);
  $event_registration_end = get_post_meta($post->ID, 'event_registration_end', true);
  $todays_date = date('Y-m-d');
?>

<div class="class-or-lesson-title">
  <h2>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h2>
</div>
<div class="clearfix"></div>
<div class="class-or-lesson-headline pull-left">
  <div class="vertical-align-wrapper">
    <div class="vertical-align-inner">
      <h3><?php the_field('lessons_headline'); ?></h3>
    </div>
  </div>
</div>
<div class="class-or-lesson-dates text-center pull-left">
  <div class="vertical-align-wrapper">
    <div class="vertical-align-inner">
      <p class="lead">
        <strong>Dates:</strong></p>
        <?php echo $event_start_date; ?> to <?php echo $event_end_date; ?>
        <br>
        <br>
      <?php if ($todays_date >= $event_registration_start && $todays_date <= $event_registration_end): ?>
        <div class="label label-success">
          Registration Open
        </div>
      <?php else: ?>
        <div class="label label-danger">
          Registration Closed
        </div>
        <!-- <small>Get notified when registration opens</small>
        <div class="input-group input-group-sm">
          <input type="email" class="form-control" placeholder="u@uremail">
          <span class="input-group-btn">
            <button class="btn btn-default btn-danger" type="button"><i class="fa fa-arrow-right"></i></button>
          </span>
        </div> -->
      <?php endif; ?>

    </div>
  </div>
</div>
<div class="class-or-lesson-price text-center pull-left">
  <div class="vertical-align-wrapper">
    <div class="vertical-align-inner">

      <p class="lead"><strong>Cost:</strong> <br> <?php echo $event_price; ?></p>
    </div>
  </div>
</div>
<div class="class-or-lesson-more pull-left">
  <a href="<?php the_permalink(); ?>" class="btn btn-default">
    <i class="fa fa-angle-right"></i>
    Learn More
  </a>
</div>
