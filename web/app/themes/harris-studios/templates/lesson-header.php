<div class="page-header lesson-header text-center">
  <div class="container">
    <h1>
      <?php echo roots_title(); ?> <br>
      <span><?php the_field('lessons_headline'); ?></span>
    </h1>

    <div class="row single-cl-details">
      <div class="col-xs-4 col-xs-offset-2 single-cl-cost">
        <p class="lead"><strong>Cost:</strong></p>
        <div class="price-tag"><?php the_field('lessons_price'); ?></div>
      </div>
      <div class="col-xs-4">
        <p class="lead"><strong>Ages:</strong></p>
        <div class="age"><?php the_field('lesson_age'); ?></div>
      </div>
    </div>
  </div>
</div>
