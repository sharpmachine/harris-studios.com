<div class="container">
  <?php // get_template_part('templates/content', 'single'); ?>
  <h1><?php the_title(); ?></h1>

  <h3><?php //echo get_the_terms( $post->ID, 'department'); ?></h3>

  <?php $terms = get_the_terms( $post->ID , 'department' );

 foreach ( $terms as $term ) {

 $term_link = get_term_link( $term, 'department' );

 echo "<h3>" . $term->name . "</h3>";

} ?>

  <?php the_field('lessons_headline'); ?>
  <?php the_field('lesson_price'); ?>
  <?php the_field('lesson_age'); ?>

  <a href="#" class="btn btn-default">Sign Up</a>

<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; ?>

  <?php wp_reset_postdata(); ?>

<?php the_field('lesson_benefits'); ?>

<?php

$posts = get_field('whos_teaching');

if( $posts ): ?>
    <ul>
    <?php foreach( $posts as $post): ?>
        <?php setup_postdata($post); ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <img src="<?php the_field('instructor_headshot'); ?>" alt="<?php the_title(); ?>">
        </li>
    <?php endforeach; ?>
    </ul>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>

<h1>Testimony</h1>
<?php get_template_part('templates/student', 'testimony' ); ?>
</div>
