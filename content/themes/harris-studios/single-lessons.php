<?php get_template_part('templates/lesson', 'header'); ?>

<div class="container">

<div class="row">
  <div class="col-xs-6"><?php $terms = get_the_terms( $post->ID , 'department' );

     foreach ( $terms as $term ) {

     $term_link = get_term_link( $term, 'department' );

     echo "<h3>" . $term->name . "</h3>";

    } ?>
  </div>

  <div class="col-xs-6 text-right">
    <a href="#" class="btn btn-lg btn-danger">Sign Up</a>
  </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-xs-8 single-cl-description">
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div>
    <div class="col-xs-4">
      <div class="single-cl-benefits bg-brand-blueLight text-light">
        <p class="lead">Benefits:</p>
        <?php the_field('lesson_benefits'); ?>
      </div>
    </div>
  </div>
</div><!-- END: .container -->

<section class="single-cl-testimony bg-brand-blueLight text-light">
  <div class="container">
    <div class="row">
      <div class="col-xs-8 col-xs-offset-2">
        <?php get_template_part('templates/student', 'testimony' ); ?>
      </div>
    </div>
  </div>
</section>

<section class="single-lesson-instructor">
  <div class="container">
    <div class="row col-xs-12">
      <?php
        $posts = get_field('whos_teaching');

        if( $posts ):
      ?>
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
    </div>
    <div class="text-right">
      <a href="#" class="btn btn-lg btn-danger">Sign Up</a>
    </div>
  </div>
</section>


