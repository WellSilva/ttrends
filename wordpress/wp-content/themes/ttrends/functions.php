<?php
  function scripts_enqueue () {
    wp_enqueue_style ('customstyle', get_template_directory_uri() . '/css/ttrends.css', array(), '1.0.0', 'all');
    wp_enqueue_style ('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0.0', 'all');
    wp_enqueue_script ('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true);
    wp_enqueue_script ('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '3.3.1', true);
  }

  function theme_setup () {
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
      'primary' => __('Primary Menu', 'TTrends')
    ));

    add_theme_support('post-formats', array('aside', 'gallery'));
  }

  function wpb_init_widgets($id){
    register_sidebar(array(
      'name'  => 'Sidebar',
      'id'    => 'sidebar',
      'before_widget' => '<div class="sidebar-module">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>'
    ));
  }

  // Excerpt Length Control
  function set_excerpt_length(){
    return 45;
  }

  add_filter('excerpt_length', 'set_excerpt_length');

  require_once('wp-bootstrap-navwalker.php');
  add_action('wp_enqueue_scripts', 'scripts_enqueue');
  add_action('after_setup_theme', 'theme_setup');
  add_action('widgets_init', 'wpb_init_widgets');
 ?>
