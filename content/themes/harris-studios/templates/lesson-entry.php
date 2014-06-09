<div class="class-or-lesson-title">
  <h2>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h2>
</div>
<div class="clearfix"></div>
<div class="class-or-lesson-headline t-and-h pull-left">
  <div class="title-and-headline">
    <div class="title-and-headline-inner">
      <h3><?php the_field('lessons_headline'); ?></h3>
    </div>
  </div>
</div>
<div class="class-or-lesson-price text-center pull-left">
  <p class="lead"><strong>Cost:</strong> <br> <?php the_field('lesson_price'); ?></p>
</div>
<div class="class-or-lesson-more more-info pull-left">
  <a href="<?php the_permalink(); ?>" class="btn btn-default">
    <i class="fa fa-angle-right"></i>
    Learn More
  </a>
</div>
