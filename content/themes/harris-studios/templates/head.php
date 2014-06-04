<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/img/ico/favicon.ico">

  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

  <?php wp_head(); ?>

  <script type="text/javascript" src="//use.typekit.net/xqv2ltj.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
</head>
