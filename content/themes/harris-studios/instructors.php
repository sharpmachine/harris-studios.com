<?php
/*
Template Name: Instructors
*/
?>

<?php get_template_part('templates/page-header', 'intro'); ?>
<div class="instructor-overlay"></div>
<div class="container">
  <?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
      <?php _e('Sorry, no results were found.', 'roots'); ?>
    </div>
    <?php get_search_form(); ?>
  <?php endif; ?>


  <!-- Full Bios -->
<div id="sidr-remote-content" class="instructors-bio-sidr">
  <div class="bg-brand-lightBlue text-light text-right">
    <a class="remote-content-menu" href="#">&times;</a>
  </div>
  <div id="the-full-bio"></div>
</div>


<div class="row">
  <h2 class="text-purple border-bottom text-center">Say hello</h2>

  <?php $args = array( 'post_type' => 'instructors'); ?>
  <?php $instructors = new WP_Query( $args ); ?>
  <?php if ( $instructors->have_posts() ) : ?>
    <?php while ( $instructors->have_posts() ) : $instructors->the_post(); ?>
    <div class="col-xs-4">
      <?php get_template_part('templates/instructor', 'entry'); ?>
    </div>
    <?php endwhile; ?>
  <?php endif; ?>
  <?php wp_reset_query(); ?>

</div>
