<footer class="content-info" role="contentinfo">
  <div class="container">
    <div id="newsletter" class="anchor"></div>
    <div class="the-loop">
      <div class="row">
        <div class="col-xs-4">
          <h3 class="bodoni">the loop</h3>
        </div>
        <div class="col-xs-4">
          <div class="newsletter">
            <span class="small">Stay in the loop on upcoming events and classes</span>
            <?php echo do_shortcode('[mc4wp_form]'); ?>
          </div>
        </div>
        <div class="col-xs-4">
          <div class="social-media pull-right">
            <?php if (get_field('facebook', 'options')): ?>
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
</footer>

<?php wp_footer(); ?>
