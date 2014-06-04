<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="<?php echo home_url('/') ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/harris-icon-white.svg" alt="<?php bloginfo('title'); ?>"></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav pull-right">
        <li><a href="<?php bloginfo('url'); ?>/events">Classes</a></li>
        <li><a href="<?php bloginfo('url'); ?>/lessons">Lessons</a></li>
        <li>
          <a class="simple-menu" href="#sidr">More
            <div class="hamburger">
              <span class="ham-line"></span>
              <span class="ham-line"></span>
              <span class="ham-line"></span>
            </div>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</header>
