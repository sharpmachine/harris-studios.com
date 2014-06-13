<?php get_template_part('templates/lesson', 'header'); ?>
<section class="cl-details">
  <div class="container">
    <div class="row">
      <div class="col-xs-9">
      <h3>Description:</h3>
      </div>
      <div class="col-xs-3 text-right">
        <form action="<?php bloginfo('url'); ?>/lesson-signup" method="post">
          <input type="text" name="lesson-title" class="hidden" value="<?php the_title(); ?>">
          <input type="submit" value="Sign Up" class="btn btn-lg btn-danger btn-block">
        </form>
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
</section>

<section class="single-cl-testimony bg-brand-blueLight text-light">
  <div class="container">
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1">
        <?php get_template_part('templates/student', 'testimony' ); ?>
      </div>
    </div>
  </div>
</section>

<section class="single-lesson-instructor">
  <div class="container">
    <h3><?php echo roots_title(); ?> Instructors:</h3>
    <hr>
    <div class="row">
      <div class="col-xs-12">
        <?php get_template_part('templates/lesson', 'instructors'); ?>
      </div>
    </div>
    <hr>
    <div class="row text-right">
      <div class="col-xs-9">
        <p class="lead">Are you ready to be launched into your brightest future?</p>
      </div>
      <div class="col-xs-3">
        <form action="<?php bloginfo('url'); ?>/lesson-signup" method="post">
          <input type="text" name="lesson-title" class="hidden" value="<?php the_title(); ?>">
          <input type="submit" value="Sign Up" class="btn btn-lg btn-danger btn-block">
        </form>
      </div>
    </div>
  </div>
</section>
