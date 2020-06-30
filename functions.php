<?php 
	require get_template_directory() . '/inc/classes/widget/search.php';
	require get_template_directory() . '/inc/classes/widget/about.php';
	require get_template_directory() . '/inc/classes/widget/categorys.php';
	require get_template_directory() . '/inc/classes/widget/addBanner.php';
	require get_template_directory() . '/inc/classes/widget/recentPost.php';
	require get_template_directory() . '/inc/classes/widget/tagcould.php';
	require get_template_directory() . '/inc/wordpress_development/custtom_post.php';
	require get_template_directory() . '/inc/wordpress_development/shortcord/artical-writing.php';
	require get_template_directory() . '/inc/wordpress_development/ecommerce/single_product/add.php';
	require get_template_directory() . '/inc/wordpress_development/ecommerce/single_product/remove.php';
	
 ?>

<?php
/**
 * Developer Eman functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Developer_Eman
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'developer_eman_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function developer_eman_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Developer Eman, use a find and replace
		 * to change 'developer-eman' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'developer-eman', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		add_theme_support( 'woocommerce' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-formats', ['audio', 'quote', 'video','gallery','link'] );
		add_theme_support( 'custom-header');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary_menu' => 'Primary Menu',
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
				'developer_eman_custom_background_args',
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
add_action( 'after_setup_theme', 'developer_eman_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function developer_eman_widgets_init() {
	register_sidebar(
		array(
			'name'          => 'Sidebar',
			'id'            => 'sidebar',
			'description'   => 'Add sidebar',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => 'Fotter Sidebar',
			'id'            => 'fotter_sidebar',
			'description'   => 'Add Footer sidebar',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

	register_widget('developoer_search');
	register_widget('developoer_about');
	register_widget('developoer_categorys');
	register_widget('developer_bannerAdd');
	register_widget('developer_recentPost');
	register_widget('developer_tagcould');

}
add_action( 'widgets_init', 'developer_eman_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function developer_eman_scripts() {

	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('myScript', get_template_directory_uri(). '/js/myFunction.js', [], true, true);
	wp_enqueue_script('scripts_star', get_template_directory_uri(). '/assets/js/scripts.js', ['myScript'], true, true);
	wp_localize_script( 'scripts_star', 'personalDeta', array(
		'location_uri' => get_template_directory_uri()
	) );
}
add_action( 'wp_enqueue_scripts', 'developer_eman_scripts' );

/**
 * Redux include
 */
require get_template_directory() . '/inc/redux/ReduxCore/framework.php';
require get_template_directory() . '/inc/redux/sample/config.php';

/**
 * Cmb2 include
 */
require get_template_directory() . '/inc/CMB2/init.php';
require get_template_directory() . '/inc/CMB2/config.php';


/**
 * TGM include
 */
require get_template_directory() . '/inc/TGM/example.php';

/**
 * custom walker
 */
require get_template_directory() . '/inc/classes/custom-menu.php';



/**
 * Admin Backed Script
 */

function adminBackedScript(){ 
		
	?>
	
	<script>
		const postFormates = document.querySelectorAll('.post-format');
		postFormates.forEach( num => {
			if(num.checked === true){
				const audioIferem = document.querySelector('#audio_iferem');
				const vedioIferem = document.querySelector('#vedio_iferem');
				const linkIferem = document.querySelector('#link_ulr');
				const gellary = document.querySelector('#gellary_filed');
				const edditor = document.querySelector('#postdivrich');
				if(num.value == 0){
					audioIferem.style.display = 'none';
					vedioIferem.style.display = 'none';
					linkIferem.style.display = 'none';
					gellary.style.display = 'none';
					edditor.style.display = 'block';
				}else if(num.value == 'audio'){
					audioIferem.style.display = 'block';
					vedioIferem.style.display = 'none';
					linkIferem.style.display = 'none';
					gellary.style.display = 'none';
					edditor.style.display = 'block';
				}else if(num.value == 'quote'){
					audioIferem.style.display = 'none';
					vedioIferem.style.display = 'none';
					linkIferem.style.display = 'none';
					gellary.style.display = 'none';
					edditor.style.display = 'block';
				}else if(num.value == 'video'){
					audioIferem.style.display = 'none';
					vedioIferem.style.display = 'block';
					linkIferem.style.display = 'none';
					gellary.style.display = 'none';
					edditor.style.display = 'block';
				}else if(num.value == 'link'){
					audioIferem.style.display = 'none';
					vedioIferem.style.display = 'none';
					linkIferem.style.display = 'block';
					gellary.style.display = 'none';
					edditor.style.display = 'none';
				}else if(num.value == 'gallery'){
					audioIferem.style.display = 'none';
					vedioIferem.style.display = 'none';
					linkIferem.style.display = 'none';
					gellary.style.display = 'block';
					edditor.style.display = 'block';
				}
			}
			num.addEventListener('change', ()=>{
				const audioIferem = document.querySelector('#audio_iferem');
				const vedioIferem = document.querySelector('#vedio_iferem');
				const linkIferem = document.querySelector('#link_ulr');
				const gellary = document.querySelector('#gellary_filed');
				const edditor = document.querySelector('#postdivrich');
				if(num.value == 0){
					audioIferem.style.display = 'none';
					vedioIferem.style.display = 'none';
					linkIferem.style.display = 'none';
					gellary.style.display = 'none';
					edditor.style.display = 'block';
				}else if(num.value == 'audio'){
					audioIferem.style.display = 'block';
					vedioIferem.style.display = 'none';
					linkIferem.style.display = 'none';
					gellary.style.display = 'none';
					edditor.style.display = 'block';
				}else if(num.value == 'quote'){
					audioIferem.style.display = 'none';
					vedioIferem.style.display = 'none';
					linkIferem.style.display = 'none';
					gellary.style.display = 'none';
					edditor.style.display = 'block';
				}else if(num.value == 'video'){
					audioIferem.style.display = 'none';
					vedioIferem.style.display = 'block';
					linkIferem.style.display = 'none';
					gellary.style.display = 'none';
					edditor.style.display = 'block';
				}else if(num.value == 'link'){
					audioIferem.style.display = 'none';
					vedioIferem.style.display = 'none';
					linkIferem.style.display = 'block';
					gellary.style.display = 'none';
					edditor.style.display = 'none';
				}else if(num.value == 'gallery'){
					audioIferem.style.display = 'none';
					vedioIferem.style.display = 'none';
					linkIferem.style.display = 'none';
					gellary.style.display = 'block';
					edditor.style.display = 'block';
				}
			})
		})
	</script>

<?php 
	
}

add_action('admin_print_footer_scripts','adminBackedScript', 3000);

//comment and replay

require get_template_directory() . '/inc/wordpress_development/commentandreplay.php';
require get_template_directory() . '/inc/wordpress_development/removeaction.php';
require get_template_directory() . '/inc/wordpress_development/filterreplacement.php';
require get_template_directory() . '/inc/wordpress_development/addAction.php';








