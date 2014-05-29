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

<div class="row">
  <div class="col-xs-12">
    <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>
</div>
</div>



<div class="row">
  <div class="col-sm-6">
    <h2>Class Instructors</h2>
    <?php $args = array( 'post_type' => 'instructors', 'instructor_type' => 'class-instructor'); ?>
    <?php $instructors = new WP_Query( $args ); ?>
    <?php if ( $instructors->have_posts() ) : ?>
    <?php while ( $instructors->have_posts() ) : $instructors->the_post(); ?>
    <?php // get_template_part('templates/content', get_post_format()); ?>
    <div class="col-xs-12">
      <h3><?php the_title(); ?></h3>
      <h4><?php the_field('instructor_area_of_expertise'); ?></h4>
      <p class="lead"><?php the_field('instructor_department'); ?></p>
      <img src="<?php the_field('instructor_headshot'); ?>" alt="<?php the_title(); ?>" class="img-responsive img-circle">
      <p><?php echo wp_trim_words( get_the_content(), 40 ); ?></p>
      <p><a class="post-link" rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>">More</a></p>
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
    <?php // get_template_part('templates/content', get_post_format()); ?>
    <div class="col-xs-12">
      <h3><?php the_title(); ?></h3>
      <h4><?php the_field('instructor_area_of_expertise'); ?></h4>
      <p class="lead"><?php the_field('instructor_department'); ?></p>
      <img src="<?php the_field('instructor_headshot'); ?>" alt="<?php the_title(); ?>" class="img-responsive img-circle">
      <p><?php echo wp_trim_words( get_the_content(), 40 ); ?></p>
      <p><a class="post-link" rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>">More</a></p>
    </div>
    <hr>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>




<div class="col-sm-6">
  <h2>Ajax Baby</h2>
  <div id="single-post-container"></div>
</div>
</div>
