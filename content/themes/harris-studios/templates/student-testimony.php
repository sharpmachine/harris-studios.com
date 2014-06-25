<?php

$student_testimonies = get_posts(array(
  'post_type' => 'testimonies',
  'showposts' => 1,
  'meta_query' => array (
    array(
        'key' => 'student_class_or_lesson', // name of custom field
        'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
        'compare' => 'LIKE'
        )
    )
  ));

  ?>


  <?php if( $student_testimonies ): ?>
  <?php foreach( $student_testimonies as $student_testimony ): ?>


  <div class="row">
    <div class="col-xs-8 t-quote">
      <div class="vertical-align-wrapper">
        <div class="vertical-align-inner">
          <div class="testimony-quote">
            <p><span class="quotes-char">&#8220;</span><?php echo wp_trim_words(get_post_field('post_content', $student_testimony->ID), 70); ?><span class="quotes-char">&#8221;</span></p>
          </div>
          <div class="testimony-name text-right">
            <cite>- <?php echo get_the_title( $student_testimony->ID ); ?></cite>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-4">
      <?php
        $photo = get_field('student_headshot', $student_testimony->ID);
        $size = 'student-headshot-retina';

        if( $photo ) {
          echo wp_get_attachment_image( $photo, $size );
        }
      ?>
    </div>
  </div>

<?php endforeach; ?>
<?php endif; ?>
