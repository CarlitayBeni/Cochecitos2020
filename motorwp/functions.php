<?php
/**
 * GymAndClub functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package motorwp
 */

if ( ! function_exists( 'gymclub_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gymclub_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on GymAndClub, use a find and replace
		 * to change 'gymclub' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gymclub', get_template_directory() . '/languages' );

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
		add_image_size( 'blog-single', 750, 320, array( 'left', 'top' )); /* Esta img se muestra en el single */		
		add_image_size( 'blog-index', 750, 310, true); /* Esta img se muestra en el blog-recortada */
		add_image_size( 'cudricula_grande', 765, 550, true); /* Esta img se muestra en el blog-recortada */
		add_image_size( 'cuadricula_min', 333, 182, array( 'left', 'top' ));

			
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'gymclub' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'gymclub_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 100,
			'width'       => 250,
			) );
	}
endif;
add_action( 'after_setup_theme', 'gymclub_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gymclub_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gymclub_content_width', 640 );
}
add_action( 'after_setup_theme', 'gymclub_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gymclub_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gymclub' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gymclub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer -Zone 1', 'gymclub' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here-Footer Zone 1.', 'gymclub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer -Zone 2', 'gymclub' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here-Footer Zone 2.', 'gymclub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer -Zone 3', 'gymclub' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here-Footer Zone 2.', 'gymclub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );



	register_sidebar( array(
		'name'          => esc_html__( 'Para template Cuadricula', 'gymclub' ),
		'id'            => 'img-cuadricula',
		'description'   => esc_html__( 'Agregar banner a tpl cuadricula', 'gymclub' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	

}
add_action( 'widgets_init', 'gymclub_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gymclub_scripts() {
	
	
	wp_enqueue_style( 'montserrat_font', 'https://fonts.googleapis.com/css?family=Montserrat:400,800', array(), 'all');
	wp_enqueue_style( 'lato_font', "https://fonts.googleapis.com/css?family=Lato:400,900", false );
	wp_enqueue_style( 'iconos_fontawesome', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css', false );
	wp_enqueue_style( 'bootstrap_4', get_template_directory_uri() .'/css/bootstrap.min.css');	
	wp_enqueue_style( 'gymclub-style', get_stylesheet_uri() );	

	wp_enqueue_script( 'bootstrap_js_4', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '20151215', true );
	wp_enqueue_script( 'gymclub-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'gymclub-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	

	wp_enqueue_script( 'gymclub-iniciar-js', get_template_directory_uri() . '/js/iniciar_js_gym.js', array('jquery' ), '20181218', true );	
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gymclub_scripts' );




/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
 * Codigo parapersonalizar el formulario de comentarios.
 */
require get_template_directory() . '/inc/formulario_personalizado.php';






function resumen($limit) {
	$content = explode(' ', get_the_content(), $limit);
	if (count($content)>=$limit) {
	array_pop($content);
	$content = implode(" ",$content).'...';
	} else {
	$content = implode(" ",$content);
	}
	$content = preg_replace('/[.+]/','', $content);
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]<>;', $content);
	return $content;
	}


/**
 * Codigo para incluir una agenda
 */
require get_template_directory() . '/inc/widgets_mundo_motor.php';





