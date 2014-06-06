<?php
/*
  * Home Page
*/
?>

<div class="jumbotron text-center">
  <div class="container">
    <img src="<?php bloginfo('template_directory'); ?>/assets/img/harris-logo-white.svg" width="150px" alt="<?php bloginfo('title'); ?> Logo" class="center-block">
    <h1><?php bloginfo('description'); ?></h1>
  </div>
</div>

<!-- Section Navigation -->
<?php get_template_part('section', 'navigation'); ?>

<div id="music" class="anchor"></div>
<section id="music" class="bg-music text-light soleil-light">
  <div class="container">
    <div class="row">
      <div class="col-xs-4 t-and-h">
        <div class="title-and-headline">
          <div class="title-and-headline-inner">
            <h2>Music</h2>
            <h3 class="h4 soleil-light"><?php echo term_description( '5', 'department') ?></h3>
          </div>
        </div>
      </div>
      <div class="col-xs-4 pull-right">
        <h5 class="soleil-light">Upcoming Music Classes</h5>
        <ul class="list-unstyled">
            <?php $args = array( 'post_type' => 'espresso_event', 'department' => 'music' ,'showposts' => 3); ?>
            <?php $class_listing = new WP_Query( $args ); ?>

            <?php if ( $class_listing->have_posts() ) : ?>

            <?php while ( $class_listing->have_posts() ) : $class_listing->the_post(); ?>
            <li>
              <a href="<?php the_permalink(); ?>">
                <strong><?php the_field('lessons_headline'); ?></strong>
                <em><?php the_title(); ?></em> <i class="fa fa-long-arrow-right"></i>
              </a>
            </li>
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

          <?php else:  ?>
            <li><?php _e( 'Sorry, no posts matched your criteria.' ); ?></li>
          <?php endif; ?>
        </ul>
        <a href="classes#music" class="btn btn-default btn-lg btn-block">See All Music Classes</a>
        <a href="lessons#music" class="small pull-right">1-on-1 music lessons also available</a>
      </div>
    </div>
  </div>
</section>

<div id="performing-arts-film" class="anchor"></div>
<section id="performing-arts-film" class="bg-performing-arts text-light soleil-light">
  <div class="container">
    <div class="row">
      <div class="col-xs-4 t-and-h">
        <div class="title-and-headline">
          <div class="title-and-headline-inner">
            <h2>Performing Arts &amp; Film</h2>
            <h3 class="h4 soleil-light"><?php echo term_description( '6', 'department') ?></h3>
          </div>
        </div>
      </div>
      <div class="col-xs-4 pull-right">
        <h5 class="soleil-light">Upcoming PA &amp; F Classes</h5>
        <ul class="list-unstyled">
            <?php $args = array( 'post_type' => 'espresso_event', 'department' => 'performing-arts-film' ,'showposts' => 3); ?>
            <?php $class_listing = new WP_Query( $args ); ?>

            <?php if ( $class_listing->have_posts() ) : ?>

            <?php while ( $class_listing->have_posts() ) : $class_listing->the_post(); ?>
            <li>
              <a href="<?php the_permalink(); ?>">
                <strong><?php the_field('lessons_headline'); ?></strong>
                <em><?php the_title(); ?></em> <i class="fa fa-long-arrow-right"></i>
              </a>
            </li>
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

          <?php else:  ?>
            <li><?php _e( 'Sorry, no posts matched your criteria.' ); ?></li>
          <?php endif; ?>
        </ul>
        <a href="classes#music" class="btn btn-default btn-lg btn-block">See All PA &amp; F Classes</a>
        <a href="lessons#music" class="small pull-right">1-on-1 PA &amp; F lessons also available</a>
      </div>
    </div>
  </div>
</section>

<div id="culture" class="anchor"></div>
<section id="culture" class="bg-culture text-light soleil-light">
  <div class="container">
    <div class="row">
      <div class="col-xs-4 t-and-h">
        <div class="title-and-headline">
          <div class="title-and-headline-inner">
            <h2>Culture</h2>
            <h3 class="h4 soleil-light"><?php echo term_description( '7', 'department') ?></h3>
          </div>
        </div>
      </div>
      <div class="col-xs-4 pull-right">
        <h5 class="soleil-light">Upcoming Culture Classes</h5>
        <ul class="list-unstyled">
            <?php $args = array( 'post_type' => 'espresso_event', 'department' => 'culture' ,'showposts' => 3); ?>
            <?php $class_listing = new WP_Query( $args ); ?>

            <?php if ( $class_listing->have_posts() ) : ?>

            <?php while ( $class_listing->have_posts() ) : $class_listing->the_post(); ?>
            <li>
              <a href="<?php the_permalink(); ?>">
                <strong><?php the_field('lessons_headline'); ?></strong>
                <em><?php the_title(); ?></em> <i class="fa fa-long-arrow-right"></i>
              </a>
            </li>
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

          <?php else:  ?>
            <li><?php _e( 'Sorry, no posts matched your criteria.' ); ?></li>
          <?php endif; ?>
        </ul>
        <a href="classes#culture" class="btn btn-default btn-lg btn-block">See All Culture Classes</a>
        <a href="lessons#culture" class="small pull-right">1-on-1 culture lessons also available</a>
      </div>
    </div>
  </div>
</section>

<div id="redding-events" class="anchor"></div>
<section id="events" class="bg-brand-yellow">
  <div class="container">
    <div class="row">
      <div class="col-xs-4">
        <h3 class="bodoni">Redding is Alive!</h3>
        <h4>Upcoming Events:</h4>
      </div>
      <div class="col-xs-4">
        <div class="next-event">
          <?php $args = array( 'post_type' => 'redding_events' ,'showposts' => 1); ?>
              <?php $redding_events = new WP_Query( $args ); ?>

              <?php if ( $redding_events->have_posts() ) : ?>

              <?php while ( $redding_events->have_posts() ) : $redding_events->the_post(); ?>

              <div class="next-event-details">
                <h4 class="soleil-semiBold"><?php the_title(); ?></h4>
                <div class="event-date">
                  <?php the_field('re_start_date'); ?>
                  <?php if (get_field('re_end_date')): ?>
                  - <?php the_field('re_end_date'); ?>
                <?php endif; ?>
                </div>
                <div class="event-venue">
                  <?php the_field('re_venue'); ?>
                </div>
                <a href="<?php the_field('re_event_registration_link'); ?>" class="btn btn-default btn-sm">Details <i class="fa fa-external-link"></i></a>
              </div>

              <?php endwhile; ?>

              <?php wp_reset_postdata(); ?>

            <?php else:  ?>
              <li><?php _e( 'Sorry, no posts matched your criteria.' ); ?></li>
            <?php endif; ?></div>
      </div>
      <div class="col-xs-4">
        <div class="all-events-btn">
          <a href="redding-events" class="btn btn-default btn-lg btn-block">See All Events</a>
        </div>
      </div>
    </div>
  </div>
</section>

