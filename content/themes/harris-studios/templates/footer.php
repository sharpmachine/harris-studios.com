<footer class="content-info" role="contentinfo">
  <div class="container">
    <div id="newsletter" class="anchor"></div>
    <h1>newsletter</h1>

    <div class="row">
      <div class="col-lg-6">
        <?php echo do_shortcode('[mc4wp_form]'); ?>
      </div><!-- /.col-lg-6 -->

      <?php if (get_field('facebook', 'options')): ?>
          <a href="<?php the_field('facebook', 'options'); ?>">Facebook</a>
        <?php endif; ?>

        <?php if (get_field('twitter', 'options')): ?>
          <a href="<?php the_field('twitter', 'options'); ?>">Twitter</a>
        <?php endif; ?>

        <?php if (get_field('instagram', 'options')): ?>
          <a href="<?php the_field('instagram', 'options'); ?>">Instagram</a>
        <?php endif; ?>
    </div>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a href="<?php bloginfo('url'); ?>/terms-conditions">Terms &amp; Conditions</a> | <a href="<?php bloginfo('url'); ?>/privacy-policy">Privacy Policy</a></p>
  </div>
</footer>

<?php wp_footer(); ?>
