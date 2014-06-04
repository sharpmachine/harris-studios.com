<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
    <![endif]-->

    <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
    ?>

    <div id="sidr">
      <!-- Your content -->
       <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation'));
        endif;
      ?>

      <div class="contact-info">
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
    </div>

    <div class="wrap" role="document">
      <div class="content row">
        <main class="main <?php echo roots_main_class(); ?>" role="main">
          <?php include roots_template_path(); ?>
        </main><!-- /.main -->
        <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>


