<?php
/*
  * Home Page
*/
?>
<h1><?php bloginfo('description'); ?></h1>
<?php get_template_part('templates/content', 'page'); ?>

<h2>Music</h2>
<?php echo do_shortcode('[EVENT_ESPRESSO_CATEGORY event_category_id="hs_music"]'); ?>

<h2>Performing Arts &amp; Culture</h2>
<?php echo do_shortcode('[EVENT_ESPRESSO_CATEGORY event_category_id="hs_performing_arts_culture"]'); ?>

<h3>Culture</h3>
<?php echo do_shortcode('[EVENT_ESPRESSO_CATEGORY event_category_id="hs_culture"]'); ?>

<h2>CPT query</h2>
<?php $args = array( 'post_type' => 'espresso_event', 'showposts' => 1); ?>
<?php $latest_updates = new WP_Query( $args ); ?>

<?php if ( $latest_updates->have_posts() ) : ?>

  <?php while ( $latest_updates->have_posts() ) : $latest_updates->the_post(); ?>
    <h3><?php the_title(); ?></h3>
  <?php endwhile; ?>

  <?php wp_reset_postdata(); ?>

<?php else:  ?>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


