<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php //dynamic_sidebar('sidebar-footer'); ?>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer>

<script>
   jQuery(document).ready(function(){

        jQuery.ajaxSetup({cache:false});
        jQuery(".post-link").click(function(){
            var post_link = jQuery(this).attr("href");

            jQuery("#single-post-container").html("content loading");
            jQuery("#single-post-container").load(post_link);
        return false;
        });

    });
</script>
<?php wp_footer(); ?>
