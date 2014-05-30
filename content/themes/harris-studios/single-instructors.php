<?php // get_template_part('templates/content', 'single'); ?>

<?php
$post = get_post($_POST['id']);
?>

<div id="single-post post-<?php the_ID(); ?>" class="single-instructor">

  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/instructor', 'entry'); ?>
  <?php endwhile;?>

</div>
