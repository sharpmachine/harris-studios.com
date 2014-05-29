<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>

<div class="row">
<?php if(get_field('team_members')): ?>
  <?php while(has_sub_field('team_members')): ?>

    <div class="col-sm-4">
      <img src="<?php the_sub_field('team_member_headshot'); ?>" class="img-responsive img-circle" alt="<?php the_sub_field('team_member_name'); ?>">
      <h3 class="team-member-name"><?php the_sub_field('team_member_name'); ?></h3>
      <div class="team-member-position"><?php the_sub_field('team_member_title'); ?></div>
    </div>

  <?php endwhile; ?>
<?php endif; ?>
</div>
