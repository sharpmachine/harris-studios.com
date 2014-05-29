<?php // get_template_part('templates/content', 'single'); ?>

<?php
$post = get_post($_POST['id']);
?>

<div id="single-post post-<?php the_ID(); ?>" class="single-instructor">

  <?php while (have_posts()) : the_post(); ?>

  <h2><?php the_title();?></h2>
  <h4><?php the_field('instructor_area_of_expertise'); ?></h4>
      <p class="lead"><?php the_field('instructor_department'); ?></p>
      <img src="<?php the_field('instructor_headshot'); ?>" alt="<?php the_title(); ?>" class="img-responsive img-circle">

  <?php the_content();?>

<?php endwhile;?>

</div>
