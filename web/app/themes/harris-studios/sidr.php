<div id="sidr">
  <div class="sidr-close">
    <a class="simple-menu" href="#sidr">&times;</a>
  </div>
  <!-- Your content -->
   <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(array('theme_location' => 'primary_navigation'));
    endif;
  ?>

  <div class="site-info">
    <?php if (get_field('phone_number', 'options')): ?>
      <div class="contact-phone">
        <h4>Phone</h4>
        <?php the_field('phone_number', 'options'); ?>
      </div>
    <?php endif; ?>

    <?php if (get_field('studio_address', 'options')): ?>
      <div class="contact-address">
        <h4>Address</h4>
        <address>
          <?php the_field('studio_address', 'options'); ?>
          <br>
          <a href="https://www.google.com/maps/place/<?php the_field('studio_address', 'options'); ?>%233/@40.555935,-122.39622,17z/data=!3m1!4b1!4m2!3m1!1s0x54d2ec6557164c51:0x5c82211a48529bb" class="btn btn-sm btn-default">Directions <i class="fa fa-map-marker"></i></a>
        </address>
      </div>
    <?php endif; ?>

    <?php if (get_field('email_address', 'options')): ?>
      <div class="contact-email">
        <h4>Email</h4>
        <a href="mailto:<?php the_field('email_address', 'options'); ?>"><?php the_field('email_address', 'options'); ?></a>
      </div>
    <?php endif; ?>
  </div>

  <div class="site-info legal">
    <p class=""><span class="small">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> <br> <a href="<?php bloginfo('url'); ?>/terms-conditions">Terms &amp; Conditions</a> | <a href="<?php bloginfo('url'); ?>/privacy-policy">Privacy Policy</a></span></p>
  </div>
</div>
