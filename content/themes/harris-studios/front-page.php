<?php
/*
  * Home Page
*/
?>
<div class="container">

  <h1><?php bloginfo('description'); ?></h1>
  <?php // get_template_part('templates/content', 'page'); ?>

  <nav class="section-navigation">
    <ul class="list-unstyled">
      <li><a href="#music" data-toggle="tooltip" data-placement="right" title="Music"></a></li>
      <li><a href="#performing-arts-film" data-toggle="tooltip" data-placement="right" title="Performing Arts &amp; Film"></a></li>
      <li><a href="#culture" data-toggle="tooltip" data-placement="right" title="Culture"></a></li>
      <li><a href="#redding-events" data-toggle="tooltip" data-placement="right" title="Events"></a></li>
      <li><a href="#newsletter" data-toggle="tooltip" data-placement="right" title="Newsletter"></a></li>
    </ul>
  </nav>

  <div id="music" class="anchor"></div>
  <h2>Music</h2>
  <h3><?php echo term_description( '5', 'department') ?></h3>
  <?php //echo do_shortcode('[EVENT_ESPRESSO_CATEGORY event_category_id="hs_music"]'); ?>

  <div id="performing-arts-film" class="anchor"></div>
  <h2>Performing Arts &amp; Culture</h2>
  <?php echo do_shortcode('[EVENT_ESPRESSO_CATEGORY event_category_id="hs_performing_arts_culture"]'); ?>

  <div id="culture" class="anchor"></div>
  <h3>Culture</h3>
  <?php echo do_shortcode('[EVENT_ESPRESSO_CATEGORY event_category_id="hs_culture"]'); ?>

  <h2>CPT query</h2>
  <?php $args = array( 'post_type' => 'espresso_event', 'showposts' => 1); ?>
  <?php $latest_updates = new WP_Query( $args ); ?>

  <?php if ( $latest_updates->have_posts() ) : ?>

  <?php while ( $latest_updates->have_posts() ) : $latest_updates->the_post(); ?>
  <h3><?php the_title(); ?></h3>
  <h4><?php the_field('lessons_headline'); ?></h4>

<?php endwhile; ?>

<?php wp_reset_postdata(); ?>

<?php else:  ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

  <div id="redding-events" class="anchor"></div>
  <h1>Events</h1>

</div><!-- END: .container -->

