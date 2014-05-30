<?php

  /*
  *  Query posts for a relationship value.
  *  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
  */

  $student_testimonies = get_posts(array(
    'post_type' => 'testimonies',
    'meta_query' => array(
      array(
        'key' => 'student_class_or_lesson', // name of custom field
        'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
        'compare' => 'LIKE'
        )
      )
    ));

    ?>
    <?php if( $student_testimonies ): ?>
    <ul>
      <?php foreach( $student_testimonies as $student_testimony ): ?>
      <?php

      $photo = get_field('student_headshot', $student_testimony->ID);

      ?>
      <li>

        <img src="<?php echo $photo; ?>" alt="<?php echo $photo['alt']; ?>" width="30" />
        <?php echo get_the_title( $student_testimony->ID ); ?>
        <?php echo get_post_field('post_content', $student_testimony->ID); ?>
      </li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>
