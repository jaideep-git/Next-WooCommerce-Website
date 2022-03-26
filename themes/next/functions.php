<?php
/**
 * NextTheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package NextTheme
 */

if ( ! defined( 'NEXT_VERSION' ) ) {
  // Replace the version number of the theme on each release.
    define( 'NEXT_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function next_setup() {
/*
    * Make theme available for translation.
    * Translations can be filed in the /languages/ directory.
    * If you're building a theme based on NextTheme, use a find and replace
    * to change 'next' to the name of your theme in all the template files.
    */
load_theme_textdomain( 'next', get_template_directory() . '/languages' );

  // Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );

/*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
add_theme_support( 'title-tag' );

/*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
add_theme_support( 'post-thumbnails' );

  // This theme uses wp_nav_menu() in one location.
register_nav_menus(
    array(
        'menu-primary' => esc_html__( 'Primary', 'next' ),
        'menu-secondary' => esc_html__( 'Secondary', 'next'),
    )
);

/*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
    add_theme_support(
    'html5',
    array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
        )
    );

  // Add theme support for selective refresh for widgets.
add_theme_support( 'customize-selective-refresh-widgets' );

/**
   * Add support for core custom logo.
   *
   * @link https://codex.wordpress.org/Theme_Logo
   */
add_theme_support(
    'custom-logo',
    array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
        )
    );
}
add_action( 'after_setup_theme', 'next_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function next_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'next_content_width', 640 );
}
add_action( 'after_setup_theme', 'next_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function next_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'next' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'next' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
        );
    register_sidebar(
        array(
            'name'          => esc_html__( 'social-media-links', 'next' ),
            'id'            => 'social-media-links',
            'description'   => esc_html__( 'Add widgets here.', 'next' ),
        )
    );
    register_sidebar(
        array(
            'name'             =>   esc_html__( 'footer Widget 1', 'text_domain' ),
            'id'               =>   'footer-widget-1',
            'description'	   =>   esc_html__('Column One', 'text_domain'),
            'before_title'	   =>   '<h3 class="title">',
            'after_title' 	   =>   '</h3>',
            'before_widget'	   =>   '<div id="%1$s" class="widget %2$s">',
            'after_widget'     =>   '</div>'
        )
    );
    register_sidebar(
        array(
            'name'             =>   esc_html__( 'footer Widget 2', 'text_domain' ),
            'id'               =>   'footer-widget-2',
            'description'	   =>   esc_html__('Column One', 'text_domain'),
            'before_title'	   =>   '<h4 class="title">',
            'after_title' 	   =>   '</h4>',
            'before_widget'	   =>   '<div id="%1$s" class="widget %2$s">',
            'after_widget'     =>   '</div>'
        )
    );
    register_sidebar(
        array(
            'name'             =>   esc_html__( 'footer Widget 3', 'text_domain' ),
            'id'               =>   'footer-widget-3',
            'description'	   =>   esc_html__('Column One', 'text_domain'),
            'before_title'	   =>   '<h4 class="title">',
            'after_title' 	   =>   '</h4>',
            'before_widget'	   =>   '<div id="%1$s" class="widget %2$s">',
            'after_widget'     =>   '</div>'
        )
    );
    register_sidebar(
        array(
            'name'             =>   esc_html__( 'footer Widget 4', 'text_domain' ),
            'id'               =>   'footer-widget-4',
            'description'	   =>   esc_html__('Column One', 'text_domain'),
            'before_title'	   =>   '<h4 class="title">',
            'after_title' 	   =>   '</h4>',
            'before_widget'	   =>   '<div id="%1$s" class="widget %2$s">',
            'after_widget'     =>   '</div>'
        )
    );
}
add_action( 'widgets_init', 'next_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function next_scripts() {
    wp_enqueue_style( 'next-style', get_stylesheet_uri(), array(), NEXT_VERSION );

    wp_enqueue_style('foundation-style', get_template_directory_uri() . '/assets/css/vendor/foundation.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/app.css');

    wp_enqueue_script(
        'what-input-script',
        get_template_directory_uri() . '/assets/js/vendor/what-input.js',
        array('jquery'), 
        false, 
        true
    );

    wp_enqueue_script(
        'foundation-script', 
        get_template_directory_uri() . '/assets/js/foundation.js', 
        array('jquery', 'what-input-script'),
        false, 
        true
    );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'next_scripts' );

/**
 * Custom Fonts
 * font-family: 'Montserrat', sans-serif;
*/
function enqueue_custom_fonts() {
	if(!is_admin()) {
		wp_register_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap');

		wp_enqueue_style('montserrat');
	}
}
add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Block-editor additions.
 */
require get_template_directory() . '/inc/block-editor.php';

/**
 * WooCommerce additions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Custom post type addition.
 */
require get_template_directory() . '/inc/post-types.php';


