<?php while (have_posts()) : the_post(); ?>
  <h1>Content Page</h1>
  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
