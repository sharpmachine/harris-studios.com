<div class="page-header">
  <div class="container">
    <h1 class="text-center">
      <?php echo roots_title(); ?>
    </h1>

    <div class="row">
      <?php $classes_lessons = new WP_Query("page_id=19"); while($classes_lessons->have_posts()) : $classes_lessons->the_post();?>
        <?php the_content(); ?>
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>
    </div>
  </div>
</div>

<div class="container cl-listings lessons-listing">

  <?php get_template_part('templates/class_lesson', 'nav' ); ?>

  <?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
      <?php _e('Sorry, no results were found.', 'roots'); ?>
    </div>
    <?php get_search_form(); ?>
  <?php endif; ?>

  <div id="music" class="anchor"></div>
  <section id="music-lessons">

    <h2 class="text-music border-bottom text-center">Music</h2>

    <?php $args = array( 'post_type' => 'lessons', 'department' => 'music' ,'showposts' => -1); ?>
    <?php $lesson_listing = new WP_Query( $args ); ?>
    <?php if ( $lesson_listing->have_posts() ) : ?>

      <?php while ( $lesson_listing->have_posts() ) : $lesson_listing->the_post(); ?>
        <div class="row lesson-summary">
          <div class="col-xs-12">
            <?php get_template_part('templates/lesson', 'entry' ); ?>
          </div>
        </div>
      <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

      <?php else:  ?>
        <p class="lead">At the moment we are not offering any Music lessons, though this may change in the future. If you have any ideas for lessons, we'd love to hear them. Email your ideas to <a href="mailto:<?php the_field('email_address', 'options'); ?>"><?php the_field('email_address', 'options'); ?></a></p>
      <?php endif; ?>

  </section>

  <div id="performing-arts-film" class="anchor"></div>
  <section id="performing-arts-film-lessons">

    <h2 class="text-performing-arts border-bottom text-center">Performing Arts &amp; Film</h2>

    <?php $args = array( 'post_type' => 'lessons', 'department' => 'performing-arts-film' ,'showposts' => -1); ?>
    <?php $lesson_listing = new WP_Query( $args ); ?>
    <?php if ( $lesson_listing->have_posts() ) : ?>

      <?php while ( $lesson_listing->have_posts() ) : $lesson_listing->the_post(); ?>
        <div class="row">
          <div class="col-xs-12 lesson-summary">
            <?php get_template_part('templates/lesson', 'entry' ); ?>
          </div>
        </div>
      <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

      <?php else:  ?>
        <p class="lead">At the moment we are not offering any Performing Arts &amp; Film lessons, though this may change in the future. If you have any ideas for lessons, we'd love to hear them. Email your ideas to <a href="mailto:<?php the_field('email_address', 'options'); ?>"><?php the_field('email_address', 'options'); ?></a></p>
      <?php endif; ?>

  </section>

  <div id="culture" class="anchor"></div>
  <section id="culture-lessons">

    <h2 class="text-culture border-bottom text-center">Culture</h2>

    <?php $args = array( 'post_type' => 'lessons', 'department' => 'culture' ,'showposts' => -1); ?>
    <?php $lesson_listing = new WP_Query( $args ); ?>
    <?php if ( $lesson_listing->have_posts() ) : ?>

      <?php while ( $lesson_listing->have_posts() ) : $lesson_listing->the_post(); ?>
        <div class="row">
          <div class="col-xs-12 lesson-summary">
            <?php get_template_part('templates/lesson', 'entry' ); ?>
          </div>
        </div>
      <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

      <?php else:  ?>
        <p class="lead">At the moment we are not offering any Culture lessons, though this may change in the future. If you have any ideas for lessons, we'd love to hear them. Email your ideas to <a href="mailto:<?php the_field('email_address', 'options'); ?>"><?php the_field('email_address', 'options'); ?></a></p>
      <?php endif; ?>

  </section>
</div>
