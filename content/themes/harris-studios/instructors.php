<?php
/*
Template Name: Instructors
*/
?>

<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<!-- Page intro -->
<div class="row">
  <div class="col-xs-12">
    <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
  </div>
</div>

<!-- Full Bios -->
<div id="sidr-remote-content"></div>

<div class="row">
  <div class="col-sm-6">
    <h2>Class Instructors</h2>
    <?php $args = array( 'post_type' => 'instructors', 'instructor_type' => 'class-instructor'); ?>
    <?php $instructors = new WP_Query( $args ); ?>
    <?php if ( $instructors->have_posts() ) : ?>
    <?php while ( $instructors->have_posts() ) : $instructors->the_post(); ?>
    <div class="col-xs-12">
      <?php get_template_part('templates/instructor', 'entry'); ?>
    </div>
    <hr>
      <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

    <h2>Private Instructors</h2>
    <?php $args = array( 'post_type' => 'instructors', 'instructor_type' => 'private-instructor'); ?>
    <?php $instructors = new WP_Query( $args ); ?>
    <?php if ( $instructors->have_posts() ) : ?>
    <?php while ( $instructors->have_posts() ) : $instructors->the_post(); ?>
    <div class="col-xs-12">
      <?php get_template_part('templates/instructor', 'entry'); ?>
    </div>
    <hr>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <div class="col-sm-6">
    <h2>Ajax Baby</h2>
    <!-- <div id="single-post-container"></div> -->
  </div>
</div>
