<?php

/*
Template Name: Espresso Events
Template for displaying a list of event posts.
Modified by Chris Reynolds for 3.1.20.P
*/


get_template_part('templates/page-header', 'intro'); ?>

<div class="container cl-listings class-listing">

  <?php get_template_part('templates/class_lesson', 'nav' ); ?>

  <?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
      <?php _e('Sorry, no results were found.', 'roots'); ?>
    </div>
    <?php get_search_form(); ?>
  <?php endif; ?>

  <div id="music" class="anchor"></div>
  <section id="music-lessons">

    <h2 class="text-music border-bottom text-center">Music</h2>

    <?php $args = array( 'post_type' => 'espresso_event', 'department' => 'music' ,'showposts' => -1); ?>
    <?php $lesson_listing = new WP_Query( $args ); ?>
    <?php if ( $lesson_listing->have_posts() ) : ?>

      <?php while ( $lesson_listing->have_posts() ) : $lesson_listing->the_post(); ?>
        <div class="row class-summary">
          <div class="col-xs-12">
            <?php get_template_part('templates/class', 'entry' ); ?>
          </div>
        </div>
      <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

      <?php else:  ?>
        <p class="lead">At the moment we are not offering any Music classes, though this may change in the future. If you have any ideas for classes, we'd love to hear them. Email your ideas to <a href="mailto:<?php the_field('email_address', 'options'); ?>"><?php the_field('email_address', 'options'); ?></a></p>
      <?php endif; ?>

  </section>

  <div id="performing-arts-film" class="anchor"></div>
  <section id="performing-arts-film-lessons">

    <h2 class="text-performing-arts border-bottom text-center">Performing Arts &amp; Film</h2>

    <?php $args = array( 'post_type' => 'espresso_event', 'department' => 'performing-arts-film' ,'showposts' => -1); ?>
    <?php $lesson_listing = new WP_Query( $args ); ?>
    <?php if ( $lesson_listing->have_posts() ) : ?>

      <?php while ( $lesson_listing->have_posts() ) : $lesson_listing->the_post(); ?>
        <div class="row">
          <div class="col-xs-12 class-summary">
            <?php get_template_part('templates/class', 'entry' ); ?>
          </div>
        </div>
      <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

      <?php else:  ?>
        <p class="lead">At the moment we are not offering any Performing Arts &amp; Film classes, though this may change in the future. If you have any ideas for classes, we'd love to hear them. Email your ideas to <a href="mailto:<?php the_field('email_address', 'options'); ?>"><?php the_field('email_address', 'options'); ?></a></p>
      <?php endif; ?>

  </section>

  <div id="culture" class="anchor"></div>
  <section id="culture-lessons">

    <h2 class="text-culture border-bottom text-center">Culture</h2>

    <?php $args = array( 'post_type' => 'espresso_event', 'department' => 'culture' ,'showposts' => -1); ?>
    <?php $lesson_listing = new WP_Query( $args ); ?>
    <?php if ( $lesson_listing->have_posts() ) : ?>

      <?php while ( $lesson_listing->have_posts() ) : $lesson_listing->the_post(); ?>
        <div class="row">
          <div class="col-xs-12 class-summary">
            <?php get_template_part('templates/class', 'entry' ); ?>
          </div>
        </div>
      <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

      <?php else:  ?>
        <p class="lead">At the moment we are not offering any Culture classes, though this may change in the future. If you have any ideas for classes, we'd love to hear them. Email your ideas to <a href="mailto:<?php the_field('email_address', 'options'); ?>"><?php the_field('email_address', 'options'); ?></a></p>
      <?php endif; ?>

  </section>

</div><!-- END: .container -->


