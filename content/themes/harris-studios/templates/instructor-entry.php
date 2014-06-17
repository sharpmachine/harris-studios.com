<?php
  $departments = get_field('instructor_department');
  $department = "department-" . $departments[0];
?>
<div class="instructor <?php echo $department; ?>">
  <div class="instructor-headshot">
    <?php

      $image = get_field('instructor_headshot');
      $size = 'instructors-headshot-retina'; // (thumbnail, medium, large, full or custom size)

      if( $image ) {

        echo wp_get_attachment_image( $image, $size );

      }

    ?>
  </div>
  <h3 class="text-center"><strong><?php the_title(); ?></strong>
    <span><?php the_field('instructor_area_of_expertise'); ?></span>
  </h3>
  <div class="instructor-department text-center">
  <?php if( in_array( 'music', get_field('instructor_department') ) ): ?>
    <span class="label label-music">Music</span>
  <?php endif; ?>
  <?php if( in_array( 'performing-arts-film', get_field('instructor_department') ) ): ?>
    <span class="label label-performing-arts">PA &amp; Film</span>
  <?php endif; ?>
  <?php if( in_array( 'culture', get_field('instructor_department') ) ): ?>
    <span class="label label-culture">Culture</span>
  <?php endif; ?>
  </div>
  <?php if (is_single()): ?>
    <?php the_content(); ?>
  <?php else: ?>
    <p><?php echo wp_trim_words( get_the_content(), 30 ); ?></p>
    <p class="text-center">
      <a class="remote-content-menu" rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>">Read More...</a>
    </p>
  <?php endif; ?>
</div>

