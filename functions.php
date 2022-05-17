<?php
/**
 * KuroE functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package KuroE
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'KuroE_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function KuroE_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on KuroE, use a find and replace
		 * to change 'KuroE' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'KuroE', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'KuroE' ),
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
				'KuroE_custom_background_args',
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
add_action( 'after_setup_theme', 'KuroE_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function KuroE_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'KuroE_content_width', 640 );
}
add_action( 'after_setup_theme', 'KuroE_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function KuroE_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'KuroE' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'KuroE' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'KuroE_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function KuroE_scripts() {
	//wp_enqueue_style( 'KuroE-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'KuroE-main', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css');
	wp_enqueue_style("bootstrap",get_stylesheet_directory_uri() . "/css/bootstrap.css?v=2.0");
	wp_enqueue_style("ui",get_stylesheet_directory_uri() . "/css/ui.css?v=2.0");
	wp_enqueue_style("responsive",get_stylesheet_directory_uri() . "/css/responsive.css?v=2.0");
	wp_enqueue_style("fonts",get_stylesheet_directory_uri() . "/fonts/fontawesome/css/all.min.css");
	wp_style_add_data( 'KuroE-style', 'rtl', 'replace' );
	
	wp_enqueue_script( 'KuroE-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js', array('jquery') );
	wp_enqueue_script( 'bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js', array('jquery') );
	wp_enqueue_script( 'KuroE-script', get_template_directory_uri() . '/js/script.js', array('jquery') );
	wp_enqueue_style('kuro', get_stylesheet_uri());
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'KuroE_scripts' );


function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

/**
 * Custom Fonts
 * font-family: 'Nunito', sans-serif;
*/
function enqueue_custom_fonts() {
	if(!is_admin()) {
		wp_register_style('source_sans_pro', 'https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,600&display=swap');
		wp_register_style('nunito', 'https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap');

		wp_enqueue_style('source_sans_pro');
		wp_enqueue_style('nunito');
	}
}
add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');


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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> – <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}





/**
 * Footer Widget One
*/
function custom_footer_widget_one() {
	$args = array(
		'id' 							=> 'footer-widget-col-one',
		'name'						=> __('Footer Column One', 'text_domain'),
		'description'			=> __('Column One', 'text_domain'),
		'before_title'		=> '<h3 class="title">',
		'after_title' 		=> '</h3>',
		'before_widget'		=> '<div id="%1$s" class="widget %2$s">',
		'after_widget'    => '</div>'
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'custom_footer_widget_one');


/**
 * Footer Widget Two
*/
function custom_footer_widget_two() {
	$args = array(
		'id' 							=> 'footer-widget-col-two',
		'name'						=> __('Footer Column Two', 'text_domain'),
		'description'			=> __('Column One', 'text_domain'),
		'before_title'		=> '<h3 class="title">',
		'after_title' 		=> '</h3>',
		'before_widget'		=> '<div id="%1$s" class="widget %2$s">',
		'after_widget'    => '</div>'
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'custom_footer_widget_two');


/**
 * Footer Widget Three
*/
function custom_footer_widget_three() {
	$args = array(
		'id' 							=> 'footer-widget-col-three',
		'name'						=> __('Footer Column Three', 'text_domain'),
		'description'			=> __('Column One', 'text_domain'),
		'before_title'		=> '<h3 class="title">',
		'after_title' 		=> '</h3>',
		'before_widget'		=> '<div id="%1$s" class="widget %2$s">',
		'after_widget'    => '</div>'
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'custom_footer_widget_three');




/**
 * WooCommerce
*/
add_theme_support('woocommerce');

// Remove WooCommerce Styles
function remove_woocommerce_styles($enqueue_styles) {
	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	// unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	// unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}

add_filter( 'woocommerce_enqueue_styles',  'remove_woocommerce_styles');

/**
 * Enqueue your own stylesheet
*/
function wp_enqueue_woocommerce_style(){
	wp_register_style( 'mytheme-woocommerce', get_template_directory_uri() . '/css/woocommerce/woocommerce.css' );
	
	if ( class_exists( 'woocommerce' ) ) {
		wp_enqueue_style( 'mytheme-woocommerce' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_enqueue_woocommerce_style' );