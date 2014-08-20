<div class="class-or-lesson-title">
  <h2>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h2>
</div>
<div class="clearfix"></div>
<div class="class-or-lesson-headline pull-left">
  <div class="vertical-align-wrapper">
    <div class="vertical-align-inner">
      <h3><?php the_field('lessons_headline'); ?></h3>
    </div>
  </div>
</div>
<div class="class-or-lesson-price text-center pull-left">
  <div class="vertical-align-wrapper">
    <div class="vertical-align-inner">
      <p class="lead"><strong>Cost:</strong> <br> <?php the_field('lessons_price'); ?></p>
    </div>
  </div>
</div>
<div class="class-or-lesson-more pull-left">
  <a href="<?php the_permalink(); ?>" class="btn btn-default">
    <i class="fa fa-angle-right"></i>
    Learn More
  </a>
</div>
