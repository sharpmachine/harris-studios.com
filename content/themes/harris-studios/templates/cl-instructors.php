
<?php
  $posts = get_field('whos_teaching');

  if( $posts ):
?>

<div class="row">
  <?php foreach( $posts as $post): ?>
    <?php setup_postdata($post); ?>
  <div class="col-xs-3 single-lesson-instructors">
        <?php

          $image = get_field('instructor_headshot');
          $size = 'instructors-headshot-retina'; // (thumbnail, medium, large, full or custom size)

          if( $image ) {

            echo wp_get_attachment_image( $image, $size );

          }
        ?>
    <h4 class="text-center"><?php the_title(); ?></h4>
  </div>
  <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>
</div><!-- END: .row -->
<?php endif; ?>
