<footer class="content-info" role="contentinfo">
  <div class="container">
    <div id="newsletter" class="anchor"></div>
    <div class="the-loop">
      <div class="row">
        <div class="col-xs-3">
          <h2>the loop</h2>
        </div>
        <div class="col-xs-5">
          SUBSCRIBE: <br>
          Stay in the loop on upcoming events and classes
          <?php echo do_shortcode('[mc4wp_form]'); ?>
        </div>
        <div class="col-xs-4">
          <div class="social-media pull-right">
            <?php if (get_field('facebook', 'options')): ?>
              <a href="<?php the_field('facebook', 'options'); ?>"><i class="fa fa-facebook"></i></a>
              <a href="<?php the_field('facebook', 'options'); ?>"><i class="fa fa-facebook"></i></a>
              <a href="<?php the_field('facebook', 'options'); ?>"><i class="fa fa-facebook"></i></a>
            <?php endif; ?>

            <?php if (get_field('twitter', 'options')): ?>
              <a href="<?php the_field('twitter', 'options'); ?>"><i class="fa fa-twitter"></i></a>
            <?php endif; ?>

            <?php if (get_field('instagram', 'options')): ?>
              <a href="<?php the_field('instagram', 'options'); ?>"><i class="fa fa-instagram"></i></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <p class="text-center">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a href="<?php bloginfo('url'); ?>/terms-conditions">Terms &amp; Conditions</a> | <a href="<?php bloginfo('url'); ?>/privacy-policy">Privacy Policy</a></p>
</footer>

<?php wp_footer(); ?>
