<?php
  $event_id = get_post_meta($post->ID, 'event_id', true);
  $event_price = '$' . do_shortcode('[EVENT_PRICE event_id="'.$event_id.'" number="0"]');
  $event_start_date = do_shortcode('[EVENT_TIME event_id="'.$event_id.'" type="start_date" format="M j"]');
  $event_day_of_week = do_shortcode('[EVENT_TIME event_id="'.$event_id.'" type="start_date" format="l"]');
  $event_end_date = do_shortcode('[EVENT_TIME event_id="'.$event_id.'" type="end_date" format="M j"]');
  $event_registration_start = get_post_meta($post->ID, 'event_registration_start', true);
  $event_registration_end = get_post_meta($post->ID, 'event_registration_end', true);
  $event_start_time = do_shortcode('[EVENT_TIME event_id="'.$event_id.'" type="start_time"]');
  $event_end_time = do_shortcode('[EVENT_TIME event_id="'.$event_id.'" type="end_time"]');
  $todays_date = date('Y-m-d');
?>
<div class="page-header class-header text-center">
  <div class="container">
    <h1>
      <?php echo roots_title(); ?> <br>
      <span><?php the_field('lessons_headline'); ?></span>
    </h1>

    <div class="row single-cl-details">
      <div class="col-xs-4 single-cl-cost">
        <p class="lead"><strong>Cost:</strong></p>
        <div class="price-tag"><?php echo $event_price; ?></div>
      </div>
      <div class="col-xs-4 single-class-dates">
        <p class="lead"><strong>Dates:</strong></p>
        <div class="class-dates"><?php echo $event_start_date; ?> to <?php echo $event_end_date; ?></div>
        <div class="class-times"><?php echo $event_day_of_week; ?>s <?php echo $event_start_time; ?> - <?php echo $event_end_time; ?></div>

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
      <div class="col-xs-4">
        <p class="lead"><strong>Ages:</strong></p>
        <div class="age"><?php the_field('lesson_age'); ?></div>
      </div>
    </div>
  </div>
</div>
