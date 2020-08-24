<?php

    if ( site_url() == "http://siteurl" ) {
        define( "VERSION", time() );
    } else {
        define( "VERSION", wp_get_theme()->get( "Version" ) );
    }


/*--------------------------------------------------
	   Call latest jQuery
---------------------------------------------------*/

function saiful_latest_jquery(){
	wp_enqueue_script('jquery');    
}
add_action('init', 'saiful_latest_jquery');


if ( ! function_exists( 'theme_muste_setup' ) ) :

	function theme_muste_setup() {

		load_theme_textdomain( 'theme-muste', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );


        // <!-- =================================================
        // ================= Add theme support  =============
        // =========================================================-->

		add_theme_support( 'post-thumbnails' );


    // <!-- =================================================
    // =================  Regester menu   =============
    // =========================================================-->

		register_nav_menus(
			array(
				'main-menu' => esc_html__( 'MainMenu', 'theme-muste' ),
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


		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'theme_muste_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
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
endif;
add_action( 'after_setup_theme', 'theme_muste_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function theme_muste_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'theme_muste_content_width', 640 );
}
add_action( 'after_setup_theme', 'theme_muste_content_width', 0 );

/**
 * Register widget area.
 *
 */
function theme_muste_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'theme-muste' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'theme-muste' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'theme_muste_widgets_init' );


/**
 * Enqueue scripts and styles.
 */



/*--------------------------------------------------
	  adding css and js
---------------------------------------------------*/


function theme_master_script() {

    wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/css/all.min.css');
    wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/webfonts/fonts/font-style.css');
	wp_enqueue_style( 'opensans-fonts', '//fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet');

	wp_enqueue_style( 'mainstyle', get_stylesheet_uri(), array(), VERSION);
	wp_enqueue_style( 'media-quriers', get_template_directory_uri() . '/css/media-quries.css', array(), VERSION);



    wp_enqueue_script( 'modernizr-js','https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'skip-link-focus-fix-js', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '1.0.0', true );
    wp_enqueue_script( 'customozer-js', get_template_directory_uri() . '/js/customizer.js', array(), '1.0.0', true );

    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), VERSION, true );
}


add_action( 'wp_enqueue_scripts', 'theme_master_script' );





/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Incloud shortcode php
 */
require get_template_directory() . '/inc/shortcode.php';
/**
 * Incloud Custom Post PHP
 */
require get_template_directory() . '/inc/custompost.php';

/**
 * Incloud Codestart Framework
 */

require_once get_theme_file_path("/lib/csf/cs-framework.php");
require_once get_theme_file_path("/inc/tm-theme-option.php");
require_once get_theme_file_path("/inc/cs.php");

