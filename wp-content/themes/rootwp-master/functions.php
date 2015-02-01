<?php

require_once STYLESHEETPATH . '/lib/root.php';

require_once STYLESHEETPATH . '/../../../wp-admin/includes/plugin.php';
require_once STYLESHEETPATH . '/custom-admin.php';



// Apply actions & filters to admin and public area
add_action('root_setup', 'custom_setup');

// Activities only in admin side
add_action('root_admin_setup', 'custom_admin_setup');

// Public interactions
add_action('root_public_setup', 'custom_public_setup');

function custom_setup() {
    add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args');
    register_nav_menu('menu-header', 'Menu do topo');
    add_action('wp_enqueue_scripts', 'custom_formats');
    add_action('init', 'cptSlide', 0);
    add_action('init', 'configTheme');
}

function custom_admin_setup() {
    
}

function custom_public_setup() {
    
}

// Defines
define('PW_URL', get_home_url());
define('PW_THEME_URL', get_bloginfo('template_url') . '/');
define('PW_SITE_NAME', get_bloginfo('name'));

// Personalizar Menu
function my_wp_nav_menu_args($args = '') {
    $defaults = array(
        'theme_location' => '',
        'menu' => '',
        'container' => 'div',
        'container_class' => '',
        'container_id' => '',
        'menu_class' => 'menu',
        'menu_id' => '',
        'echo' => true,
        'fallback_cb' => 'wp_page_menu',
        'before' => '',
        'after' => '',
        'link_before' => '',
        'link_after' => '',
        'items_wrap' => '<ul id="%1$s" class="nav navbar-nav navbar-right %2$s" style="margin-top: 40px;">%3$s</ul>',
        'depth' => 0,
        'walker' => ''
    );
    return $defaults;
}

// Register Sidebars
register_sidebar(array(
    'name' => __('Widgets para Blog'),
    'id' => 'blog-sidebar',
    'description' => __('Adiciona widgets no sidebar do Blog.'),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>',
));

function custom_formats() {
    wp_register_style('googlefont', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic', NULL, NULL, 'all');
    wp_register_style('bootstrap', PW_THEME_URL . 'css/bootstrap.css', NULL, NULL, 'all');
    wp_register_style('colorbox', PW_THEME_URL . 'js/colorbox/colorbox.css', NULL, NULL, 'all');
    wp_register_style('templatemo', PW_THEME_URL . 'css/templatemo_style.css', NULL, NULL, 'all');
    wp_register_style('responsiveSlideCss', PW_THEME_URL . 'css/responsiveslides.css', NULL, NULL, 'all');
    wp_register_style('custom-slide', PW_THEME_URL . 'css/custom-slide.css', NULL, NULL, 'all');

    wp_register_script('jquery', PW_THEME_URL . 'js/jquery.min.js', NULL, NULL, TRUE);
    wp_register_script('bootstrap', PW_THEME_URL . 'js/bootstrap.min.js', NULL, NULL, TRUE);
    wp_register_script('stickUp', PW_THEME_URL . 'js/stickUp.min.js', NULL, NULL, TRUE);
    wp_register_script('colorbox', PW_THEME_URL . 'js/colorbox/jquery.colorbox-min.js', NULL, NULL, TRUE);
    wp_register_script('templatemo', PW_THEME_URL . 'js/templatemo_script.js', NULL, NULL, TRUE);
    wp_register_script('responsiveSlideJs', PW_THEME_URL . 'js/responsiveslides.js', NULL, NULL, TRUE);
    wp_register_script('functions', PW_THEME_URL . 'js/functions.js', NULL, NULL, TRUE);

    wp_enqueue_style('googlefont');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('templatemo');
    wp_enqueue_style('responsiveSlideCss');
    wp_enqueue_style('custom-slide');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('stickUp');
    wp_enqueue_script('colorbox');
    wp_enqueue_script('templatemo');
    wp_enqueue_script('responsiveSlideJs');
    wp_enqueue_script('functions');
}

function cptSlide() {
    CPT::add(
    'Slide',
    array(
    'singular' => 'Slide',
    'plural' => 'Slides'
    ),
    array(
        'public' => true,
        'has_archive' => true,
        'rewrite' => array( 'slug' => 'slides' ),
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'page-attributes'),
    )
    );
}

function configTheme(){
    add_menu_page('Opções do Tema', 'Opções do Tema', 'administrator', 'opt-theme', 'optionTheme');
}

function optionTheme(){
    echo 'Opções do tema';
}

