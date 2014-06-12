
<?php get_template_part('templates/page', 'header'); ?>
<div class="container">
  <section>
    <div class="post-lesson-title hidden" data-lesson="<?php echo $_POST['lesson-title']; ?> Lessons"></div>
    <?php get_template_part('templates/content', 'page'); ?>
    <div class="row">
      <?php echo do_shortcode('[contact-form-7 id="83" title="Lessons Signup"]'); ?>
    </div>
  </section>
</div>
