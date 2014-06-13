<?php get_template_part('templates/page-header', 'intro'); ?>

<div class="container">
  <div class="row hidden">
    <?php get_template_part('templates/content', 'page'); ?>
  </div>

  <div class="row">
    <h2 class="text-purple border-bottom text-center">Our Team</h2>
    <?php if(get_field('team_members')): ?>
      <?php while(has_sub_field('team_members')): ?>

      <div class="col-xs-4 text-center team-member">
        <?php

            $image = get_sub_field('team_member_headshot');
            $size = 'team-member-headshot-retina'; // (thumbnail, medium, large, full or custom size)

            if( $image ) {

              echo wp_get_attachment_image( $image, $size );

            }

          ?>
        <!-- <img src="<?php the_sub_field('team_member_headshot'); ?>" class="img-responsive img-circle center-block" alt="<?php the_sub_field('team_member_name'); ?>"> -->
        <h3 class="team-member-name"><?php the_sub_field('team_member_name'); ?></h3>
        <p class="team-member-position"><?php the_sub_field('team_member_title'); ?></p>
      </div>

    <?php endwhile; ?>
  <?php endif; ?>
  </div>

</div>

