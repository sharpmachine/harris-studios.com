
<?php
  $posts = get_field('whos_teaching');

  if( $posts ):
?>


  <?php foreach( $posts as $post): ?>
    <?php setup_postdata($post); ?>
<div class="row">
  <div class="col-xs-3 single-class-instructor">
    <div class="single-class-instructor-headshot">
        <?php

           $image = get_field('instructor_headshot');
           $size = 'single-lesson-instructor-headshot-retina';

           if( $image ) {

             echo wp_get_attachment_image( $image, $size );

           }
         ?>
    </div>
    <h4 class="text-center"><?php the_title(); ?></h4>
  </div>
  <div class="col-xs-8 single-class-instructor-excerpt">
    <div class="vertical-align-wrapper">
      <div class="vertical-align-inner">
        <?php the_excerpt(); ?>
      </div>
    </div>
  </div>
</div><!-- END: .row -->
  <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>
