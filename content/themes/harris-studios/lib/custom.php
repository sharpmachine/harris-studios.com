<?php
/**
 * Custom functions
 */

// Redding Events
add_image_size('redding-event-photo-retina', 620, 440, true);

// Team
add_image_size('team-member-headshot-retina', 466, 466, true);

// Instructors
add_image_size('instructors-headshot-retina', 406, 406, true);

// Student Headshot
add_image_size('student-headshot-retina', 478, 478, true);

// Student Headshot
add_image_size('single-lesson-instructor-headshot-retina', 410, 410, true);

// Lesson title shortcode for lesson signup page
function lesson_title(){
  return $_POST['lesson-title'];
}
add_shortcode( 'lessontitle', 'lesson_title' );

// function example_add_rewrite_rules() {

//     add_rewrite_rule( 'classes', 'events', 'top' );
//     flush_rewrite_rules();

// }
// add_action( 'init', 'example_add_rewrite_rules' );

remove_filter( 'espresso_get_question_groups_for_event_where', espresso_rp_basic_get_question_groups_for_event_where, 10 );


  function remove_dashboard_widgets(){
    global$wp_meta_boxes;
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['yoast_db_widget']);
  }

  add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

  function modify_footer_admin () {
    echo 'Created by <a href="http://sharpmachinemedia.com">Sharp Machine Media</a>.';
    echo '  Powered by <a href="http://WordPress.org">WordPress</a>.';
  }

  add_filter('admin_footer_text', 'modify_footer_admin');

//Admin style overrides
  function admin_overrides() {
    echo '<style type="text/css">
  #cpt_info_box {
    display: none !important; /* Hides Custom Post Type info box */
  }
  </style>';
}

add_action('admin_head', 'admin_overrides');

//Login Logo
function custom_login_logo() {
  echo '<style type="text/css">
  h1 a
  {
   background-image:url('.get_bloginfo('template_directory').'/assets/img/harris-logo-purple.svg) !important;
   background-size: 200px 200px !important;
   width: 200px !important; /* Same width as logo */
   height: 200px !important; /* Same height as logo */
 }
 </style>';
}

add_action('login_head', 'custom_login_logo');

// Remove items from admin menu bar
function remove_admin_bar_links() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('themes');
  $wp_admin_bar->remove_menu('background');
  $wp_admin_bar->remove_menu('header');
  $wp_admin_bar->remove_menu('documentation');
  $wp_admin_bar->remove_menu('about');
  $wp_admin_bar->remove_menu('wporg');
  $wp_admin_bar->remove_menu('support-forums');
  $wp_admin_bar->remove_menu('feedback');
}
add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );

// Add items to admin menu bar
function my_admin_bar_link() {
  global $wp_admin_bar;
  if ( !is_super_admin() || !is_admin_bar_showing() )
    return;
  $wp_admin_bar->add_menu( array(
    'id' => 'sharpmachine',
    'parent' => 'wp-logo',
    'title' => __( 'Sharp Machine Media'),
    'href' => 'http://www.sharpmachinemedia.com'
    ) );

  $wp_admin_bar->add_menu( array(
    'id' => 'mailchimp',
    'parent' => 'wp-logo-external',
    'title' => __( 'Mailchimp'),
    'href' => 'http://login.mailchimp.com'
    ) );

  $wp_admin_bar->add_menu( array(
    'id' => 'analytics',
    'parent' => 'wp-logo-external',
    'title' => __( 'Analytics'),
    'href' => 'http://www.google.com/analytics'
    ) );

  $wp_admin_bar->add_menu( array(
    'id' => 'mail',
    'parent' => 'wp-logo-external',
    'title' => __( 'Mail'),
    'href' => 'http://mail.'. substr(get_bloginfo('url'), 7).''
    ) );

  $wp_admin_bar->add_menu( array(
    'id' => 'calendar',
    'parent' => 'wp-logo-external',
    'title' => __( 'Calendar'),
    'href' => 'http://calendar.'. substr(get_bloginfo('url'), 7).''
    ) );

  $wp_admin_bar->add_menu( array(
    'id' => 'docs',
    'parent' => 'wp-logo-external',
    'title' => __( 'Docs'),
    'href' => 'http://docs.'. substr(get_bloginfo('url'), 7).''
    ) );
}
add_action('admin_bar_menu', 'my_admin_bar_link');

// Create the function to output the contents of our Dashboard Widget
function help_dashboard_widget_function() {
  // Display whatever it is you want to show
  echo '
  <ul style="width:40%;float:left;margin-right:55px;min-width:153px;">
  <li style="color:#666;font-size:14px;border-bottom-style:solid;border-bottom-width:1px;border-bottom-color:#DFDFDF;padding-bottom:5px;margin-bottom:10px;">WordPress 101 Videos:</li>
  <li><a href="http://wp.tutsplus.com/tutorials/wp101-video-training-part-1-the-dashboard/" target="_blank">The Dashboard</a></li>
  <li><a href="http://wp.tutsplus.com/tutorials/wp-101-video-training-part-2-creating-a-new-post/" target="_blank">Creating A New Post</a></li>
  <li><a href="http://wp.tutsplus.com/tutorials/wp-101-video-training-part-3-edit-existing-post/" target="_blank">Edit Existing Post</a></li>
  <li><a href="http://wp.tutsplus.com/tutorials/wp-101-video-training-part-4-using-categories-and-tags/" target="_blank">Using Categories and Tag</a></li>
  <li><a href="http://wp.tutsplus.com/tutorials/wp-101-video-training-part-5-creating-and-editing-pages/" target="_blank">Creating and Editing Pages</a></li>
  <li><a href="http://wp.tutsplus.com/tutorials/wp-101-video-training-part-6-adding-images/" target="_blank">Adding Images &amp; Photos</a></li>
  <li><a href="http://wp.tutsplus.com/tutorials/wp-101-video-training-part-7-embedding-video/" target="_blank">How to Embed Video</a></li>
  <li><a href="http://wp.tutsplus.com/tutorials/wp-101-video-training-part-8-media-library/" target="_blank">Using the Media Library</a></li>
  <li><a href="http://wp.tutsplus.com/tutorials/wp-101-video-training-part-9-managing-comments/" target="_blank">Managing Comments</a></li>
  <li><a href="http://wp.tutsplus.com/tutorials/wp-101-video-training-part-10-creating-links/" target="_blank">Creating Links</a></li>
  <li><a href="http://wp.tutsplus.com/tutorials/wp-101-video-training-part-12-widgets/" target="_blank">Adding Widgets</a></li>
  <li><a href="http://wp.tutsplus.com/tutorials/wp-101-video-training-part-13-custom-menus/" target="_blank">Building Custom Menus</a></li>
  <li><a href="http://wp.tutsplus.com/tutorials/wp-101-video-training-part-15-users/" target="_blank">Adding New Users</a></li>
  </ul>

  <ul style="width:40%;float:left;min-width:153px;">
  <li style="color:#666;font-size:14px;border-bottom-style:solid;border-bottom-width:1px;border-bottom-color:#DFDFDF;padding-bottom:5px;margin-bottom:10px;">Videos Specific To Your Site:</li>
  <li><a href="http://www.youtube.com/watch?v=IE_10_nwe0c" target="_blank">SEO Ultimate Tutorial</a></li>
  <li><a href="#" target="_blank">Video</a></li>
  <li><a href="#" target="_blank">Video</a></li>
  </ul>

  <p style="clear:both;padding-top:5px;margin-bottom:0.5em;color:#666;font-size:14px;">Helpful Quick Links:</p>

  <a href="http://login.mailchimp.com" target="_blank">Mailchimp Login</a> |
  <a href="http://mailchimp.com/support/online-training" target="_blank">Mailchimp Training</a> |
  <a href="http://docs.disqus.com/kb" target="_blank">Disqus Training</a> |
  <a href="http://google.com/analytics" target="_blank">Analytics Login</a> |
  <a href="http://mail.'. substr(get_bloginfo('url'), 7).'" target="_blank">Mail Login</a>

  <p>Still stuck?  Give us a call at <strong>(530) 638-3581</strong> or email us at <a href="mailto:info@sharpmachinemedia.com?subject=Help!"><strong>info@sharpmachinemedia.com</strong></a>.
  ';
}

// Create the function use in the action hook
function help_add_dashboard_widgets() {
  add_meta_box('help_dashboard_widget', 'Need Help?', 'help_dashboard_widget_function', 'dashboard', 'side', 'low');
}

// Hook into the 'wp_dashboard_setup' action to register our other functions
add_action('wp_dashboard_setup', 'help_add_dashboard_widgets' );
