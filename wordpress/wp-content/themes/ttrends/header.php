<!doctype html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans|Srisakdi|Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>TTrends</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="header-box">
        <div class="fixer">T &nbsp;&nbsp;  T r e n d s &nbsp;&nbsp; - &nbsp;&nbsp; T h e &nbsp;&nbsp; b e s t &nbsp;&nbsp;  o f &nbsp;&nbsp;  p u r e  &nbsp;&nbsp;  C e y l o n &nbsp;&nbsp;  T e a</div>
        <div class="row">
          <div class="col-md-5 col-sm-5">
            <nav class="navbar navbar-inverse bg-inverse navbar-expand-lg" style="margin-top: 70px;">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  MENU
                </button>
                <?php
                  wp_nav_menu( array(
                    'menu'            => 'primary',
                  	'theme_location'  => 'primary',
                  	'depth'	          => 1, // 1 = no dropdowns, 2 = with dropdowns.
                  	'container'       => 'div',
                  	'container_class' => 'collapse navbar-collapse',
                  	'container_id'    => 'bs-example-navbar-collapse-1',
                  	'menu_class'      => 'navbar-nav',
                  	'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                  	'walker'          => new wp_bootstrap_navwalker()
                  ));
                ?>
            </nav>
          </div>
          <div class="col-md-2">
          </div>
          <div class="col-md-5 col-sm-5">
            <div class="social-media">
              <a href="https://www.facebook.com/Ttrendzqueenstown/" class="custom-link" >
                <i class="fab fa-facebook-square"></i>&nbsp;Ttrendzqueenstown
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="logo-container">
      <div class="logo-box">
      </div>
    </div>

    <div class="main-content">
