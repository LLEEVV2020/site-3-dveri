<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

/**
 * Twenty Nineteen only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

if ( ! function_exists( 'twentynineteen_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function twentynineteen_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Nineteen, use a find and replace
		 * to change 'twentynineteen' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'twentynineteen', get_template_directory() . '/languages' );

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
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'twentynineteen' ),
				'footer' => __( 'Footer Menu', 'twentynineteen' ),
				'social' => __( 'Social Links Menu', 'twentynineteen' ),
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
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'twentynineteen' ),
					'shortName' => __( 'S', 'twentynineteen' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'twentynineteen' ),
					'shortName' => __( 'M', 'twentynineteen' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'twentynineteen' ),
					'shortName' => __( 'L', 'twentynineteen' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'twentynineteen' ),
					'shortName' => __( 'XL', 'twentynineteen' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'twentynineteen' ),
					'slug'  => 'primary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 33 ),
				),
				array(
					'name'  => __( 'Secondary', 'twentynineteen' ),
					'slug'  => 'secondary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 23 ),
				),
				array(
					'name'  => __( 'Dark Gray', 'twentynineteen' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'twentynineteen' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'twentynineteen' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'twentynineteen_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentynineteen_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'twentynineteen' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'twentynineteen_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function twentynineteen_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'twentynineteen_content_width', 640 );
}
add_action( 'after_setup_theme', 'twentynineteen_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function twentynineteen_scripts() {
	//wp_enqueue_style( 'twentynineteen-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	wp_style_add_data( 'twentynineteen-style', 'rtl', 'replace' );

	if ( has_nav_menu( 'menu-1' ) ) {
		wp_enqueue_script( 'twentynineteen-priority-menu', get_theme_file_uri( '/js/priority-menu.js' ), array(), '1.1', true );
		wp_enqueue_script( 'twentynineteen-touch-navigation', get_theme_file_uri( '/js/touch-keyboard-navigation.js' ), array(), '1.1', true );
	}

	wp_enqueue_style( 'twentynineteen-print-style', get_template_directory_uri() . '/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    
    
    get_template_part( 'custom-head' );
    
}
add_action( 'wp_enqueue_scripts', 'twentynineteen_scripts' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function twentynineteen_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'twentynineteen_skip_link_focus_fix' );

/**
 * Enqueue supplemental block editor styles.
 */
function twentynineteen_editor_customizer_styles() {

	wp_enqueue_style( 'twentynineteen-editor-customizer-styles', get_theme_file_uri( '/style-editor-customizer.css' ), false, '1.1', 'all' );

	if ( 'custom' === get_theme_mod( 'primary_color' ) ) {
		// Include color patterns.
		require_once get_parent_theme_file_path( '/inc/color-patterns.php' );
		wp_add_inline_style( 'twentynineteen-editor-customizer-styles', twentynineteen_custom_colors_css() );
	}
}
add_action( 'enqueue_block_editor_assets', 'twentynineteen_editor_customizer_styles' );

/**
 * Display custom color CSS in customizer and on frontend.
 */
function twentynineteen_colors_css_wrap() {

	// Only include custom colors in customizer or frontend.
	if ( ( ! is_customize_preview() && 'default' === get_theme_mod( 'primary_color', 'default' ) ) || is_admin() ) {
		return;
	}

	require_once get_parent_theme_file_path( '/inc/color-patterns.php' );

	$primary_color = 199;
	if ( 'default' !== get_theme_mod( 'primary_color', 'default' ) ) {
		$primary_color = get_theme_mod( 'primary_color_hue', 199 );
	}
	?>

	<style type="text/css" id="custom-theme-colors" <?php echo is_customize_preview() ? 'data-hue="' . absint( $primary_color ) . '"' : ''; ?>>
		<?php echo twentynineteen_custom_colors_css(); ?>
	</style>
	<?php
}
add_action( 'wp_head', 'twentynineteen_colors_css_wrap' );

/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-twentynineteen-svg-icons.php';

/**
 * Custom Comment Walker template.
 */
require get_template_directory() . '/classes/class-twentynineteen-walker-comment.php';

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/*
https://toster.ru/q/344093

<?php if(empty(get_option('my_phone')) ){
                                                          echo "8 (4752) 33-33-35";
                                                      }
                                                      else{
                                                          echo get_option('my_phone'); 
                                                      } ?>
*/
/*путь к картинкам*/
function link_img_more_options(){
  add_settings_field('link_img_name','Путь_к_картинкам','display_link_img','general');
  register_setting('general','link_img');
}
add_action('admin_init','link_img_more_options');
function display_link_img(){
  echo "<input type='text' name='link_img' value='".esc_attr(get_option('link_img'))."'>";	
}

/*телефон*/
function phone_more_options(){
  add_settings_field('phone','Телефон','display_phone','general');
  register_setting('general','my_phone');
}
add_action('admin_init','phone_more_options');
function display_phone(){
  echo "<input type='text' name='my_phone' value='".esc_attr(get_option('my_phone'))."'>";		
}
/*емайл*/
function mail_more_options(){
  add_settings_field('mail','Eмайл','display_mail','general');
  register_setting('general','my_mail');
  register_setting('general','email_hidden');
  register_setting('general','time_grafik');
}
add_action('admin_init','mail_more_options');
function display_mail(){
  	echo "<div><input type='text' name='my_mail' value='".esc_attr(get_option('my_mail'))."'> <span>емайл который виден на сайте, чтоб его скрыть пишем &nbsp;</span><div>";	
  echo "<div><input type='text' name='email_hidden' value='".esc_attr(get_option('email_hidden'))."'> <span>емайл скрытый, для отправки писем</span><div>";		
  echo "<div><input type='text' name='time_grafik' value='".esc_attr(get_option('time_grafik'))."'> <span>Время работы. Например с с 8:00 до 20:00</span><div>";		
}

/*города*/
function city_more_options(){
  add_settings_field('city','Города','display_city','general');
    register_setting('general','my_city_1v');
  register_setting('general','my_city_v');
  register_setting('general','my_city_v_o');
  register_setting('general','my_city_po');
  register_setting('general','my_city_ot');
}
add_action('admin_init','city_more_options');
function display_city(){
    echo "<div><input placeholder='Москва' type='text' name='my_city_1v' value='".esc_attr(get_option('my_city_1v'))."'>Москва</i> </span></div>";	
  echo "<div><input placeholder='В Москве' type='text' name='my_city_v' value='".esc_attr(get_option('my_city_v'))."'> <span>В Москве</span> <span><i>es2_doors_2.php (главная)</i> </span></div>";	
  echo "<div><input placeholder='В Москве' type='text' name='my_city_v_o' value='".esc_attr(get_option('my_city_v_o'))."'> <span>В Москве  и области</span> <span><i>es6_doors_3.php (главная)</i> </span></div>";	
  echo "<div><input placeholder='по всей Москве и области' type='text' name='my_city_po' value='".esc_attr(get_option('my_city_po'))."'> <span>по всей Москве и области</span> <i>АДРЕСА И ТЕЛЕФОНЫ --> contact-wrap.php</i></div>";	
    echo "<div><input placeholder='от Москвы' type='text' name='my_city_ot' value='".esc_attr(get_option('my_city_ot'))."'> <span>от Москвы</span> <i>АДРЕСА И ТЕЛЕФОНЫ --> b_contact.php</i></div>";	
}

/*адреса*/
function adress_more_options(){
	add_settings_field('adress','Адреса','display_adress','general');
	register_setting('general','my_adress_1');
	register_setting('general','my_adress_2');
	register_setting('general','karta_adressa');
	register_setting('general','radar');
    register_setting('general','rekviziti');
  }
  add_action('admin_init','adress_more_options');
  function display_adress(){
	  echo "<div><input placeholder='адрес 1' type='text' name='my_adress_1' value='".esc_attr(get_option('my_adress_1'))."'> <span>Контакт 1</span> <span><i> my_adress_1 </i> </span></div>";	
	  echo "<div><input placeholder='адрес 2' type='text' name='my_adress_2' value='".esc_attr(get_option('my_adress_2'))."'> <span>Контакт 2</span> <i> my_adress_2 </i></div>";	
	  echo "<div><input placeholder='карта 2гис' type='text' name='karta_adressa' value='".esc_attr(get_option('karta_adressa'))."'> <span> </span> <i>karta_adressa</i></div>";	
	  echo "<div><input placeholder='radar' type='text' name='radar' value='".esc_attr(get_option('radar'))."'> <span> </span> <i>radar</i></div>";	
      echo "<div><input placeholder='rekviziti' type='text' name='rekviziti' value='".esc_attr(get_option('rekviziti'))."'> <span> </span> <i>реквизиты</i></div>";	
  }


function city_lat_more_options(){
  add_settings_field('city_lat_name','City','display_city_lat','general');
  register_setting('general','my_city_lat');
}
add_action('admin_init','city_lat_more_options');
function display_city_lat(){
  echo "<input type='text' name='my_city_lat' value='".esc_attr(get_option('my_city_lat'))."'> <span>Нужно вставить картинку и создать папку <i>.../city_include</i> </span>";		
}



