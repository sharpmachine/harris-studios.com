
<?php $class_listing = new WP_Query( $args ); ?>

  <?php if ( $class_listing->have_posts() ) : ?>

  <?php while ( $class_listing->have_posts() ) : $class_listing->the_post(); ?>
  <li>
    <a href="<?php the_permalink(); ?>">
      <strong><?php the_field('lessons_headline'); ?></strong><br>
      <em><?php the_title(); ?></em> <i class="fa fa-long-arrow-right"></i>
    </a>
  </li>

  <li>
    <a href="#">
      <strong><?php the_field('lessons_headline'); ?></strong><br>
      <em><?php the_title(); ?></em> <i class="fa fa-long-arrow-right"></i>
    </a>
  </li>
  <li>
    <a href="#">
      <strong><?php the_field('lessons_headline'); ?></strong><br>
      <em><?php the_title(); ?></em> <i class="fa fa-long-arrow-right"></i>
    </a>
  </li>
  <?php endwhile; ?>

  <?php wp_reset_postdata(); ?>

<?php else:  ?>
  <li><?php _e( 'Sorry, no posts matched your criteria.' ); ?></li>
<?php endif; ?>
