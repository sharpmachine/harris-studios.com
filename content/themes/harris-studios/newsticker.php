<?php if (is_front_page()): ?>
  <div class="newsticker">
    <div class="container">
      <?php $args = array( 'post_type' => 'newsticker','showposts' => 1); ?>
      <?php $newsticker = new WP_Query( $args ); ?>
      <?php if ( $newsticker->have_posts() ) : ?>
        <?php while ($newsticker->have_posts()) : $newsticker->the_post(); ?>
          <strong><i class="fa fa-calendar"></i> What's Next?:</strong> <a href="<?php the_field('links_to'); ?>"><?php echo wp_trim_words(get_the_title(), 10 ); ?> <i class="fa fa-caret-right"></i></a>
          <span class="pull-right"><a href="#music">More <i class="fa fa-caret-down"></i></a></span>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>
