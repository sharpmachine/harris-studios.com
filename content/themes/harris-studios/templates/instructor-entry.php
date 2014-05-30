<h3><?php the_title(); ?></h3>
<h4><?php the_field('instructor_area_of_expertise'); ?></h4>
<p class="lead"><?php the_field('instructor_department'); ?></p>
<img src="<?php the_field('instructor_headshot'); ?>" alt="<?php the_title(); ?>" class="img-responsive img-circle">
<?php if (is_single()): ?>
  <?php the_content(); ?>
<?php else: ?>
  <p><?php echo wp_trim_words( get_the_content(), 40 ); ?></p>
  <p><a id="remote-content-menu" rel="<?php the_ID(); ?>" data-url="<?php bloginfo('url'); ?>" data-href="<?php the_permalink(); ?>" href="#remote-content-menu">More</a></p>
<?php endif; ?>

