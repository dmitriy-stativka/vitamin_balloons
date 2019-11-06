<?php
/**
 * utg functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package utg
 */

if ( ! function_exists( 'utg_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function utg_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on utg, use a find and replace
		 * to change 'utg' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'utg', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'utg' ),
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
		add_theme_support( 'custom-background', apply_filters( 'utg_custom_background_args', array(
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
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'utg_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function utg_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'utg_content_width', 640 );
}
add_action( 'after_setup_theme', 'utg_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function utg_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'utg' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'utg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'utg_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function utg_scripts() {

    wp_enqueue_style( 'racingbase-style', get_stylesheet_uri() );
    wp_enqueue_style( 'googlefont-style', 'https://fonts.googleapis.com/css?family=Caveat:400,700|Montserrat:500,700,900&display=swap&subset=cyrillic' );
	wp_enqueue_style( 'legacy-style', get_template_directory_uri() ."/styles/styles.min.css" );
	wp_enqueue_style( 'slick-style', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css' );

	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), null, true );
    wp_enqueue_script( 'slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array(), null, true );

    wp_enqueue_script( 'sky-js', 'https://cdnjs.cloudflare.com/ajax/libs/Sly/1.6.1/sly.min.js', array(), null, true );

    wp_enqueue_script( 'app.min.js', get_template_directory_uri() ."/js/app.min.js" , array(), null, true );







    
    wp_enqueue_script('ajax-load', get_template_directory_uri() . '/js/ajax-load.js', array(), null, true);
    
    wp_localize_script( 'ajax-load', 'ajax_vars',
    array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce' => wp_create_nonce( 'ajax-nonce' ),
        'home_url' => get_bloginfo( 'url' )
    ));
    
    



    
	

	wp_enqueue_script( 'utg-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'utg-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    
    // wp_enqueue_script( 'jquery.xeyes-2.0', get_template_directory_uri() . '/js/jquery.xeyes-2.0.min.js', array(), '20151215', true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'utg_scripts' );

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
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}








register_post_type('products', array(
    'labels'             => array(
        'name'               => 'Товары', // Основное название типа записи
        'singular_name'      => 'Товары', // отдельное название записи типа Book
        'add_new'            => 'Добавить товар',
        'add_new_item'       => 'Добавить новый товар',
        'edit_item'          => 'Редактировать товар',
        'new_item'           => 'Новый товар',
        'view_item'          => 'Посмотреть товар',
        'search_items'       => 'Найти сервис',
        'not_found'          => 'Не найдено',
        'not_found_in_trash' => 'В корзине ничего не найдено',
        'parent_item_colon'  => '',
        'menu_name'          => 'Товары'
      ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'            => array( 'title', 'comments'  )  // 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',
));
























/*ajax load post*/
add_action( 'wp_ajax_loader_posts', 'posts_loader' );
add_action( 'wp_ajax_nopriv_loader_posts', 'posts_loader' );

function posts_loader() {
	$nonce = $_POST['nonce'];

	if ( wp_verify_nonce( $nonce, 'ajax-nonce' ) ) {
		if ( ! isset( $_POST['productID'] ) ) {
			return;
		}

		$postOffset  = $_POST['productID'];

		$params = array(
			'post_type'      => $post_type,
			'posts_per_page' => $post_perpage,
			'offset'         => $post_offset,
		);
		$query  = new WP_Query( $params );
		ob_start();
		?>
		<?php if ( $query->have_posts() ): ?>
			<?php while ( $query->have_posts() ): $query->the_post() ?>


            <?php $desc = get_field('description');?>




				<div class="popup">
					<a href="<?php echo the_permalink( $post->ID ); ?>" class="popup_link">
						<div class="popup_image">
							<?php echo get_the_post_thumbnail( $post->ID ); ?>
						</div>
						<div class="popup_text">
							<span class="popup-title"><?php the_title(); ?></span>
						</div>

                        <?php echo $description;?>

					</a>
				</div>


                


			<?php endwhile; ?>
		<?php endif; ?>

		<?php
		$content = ob_get_clean();
		wp_reset_query();

		echo json_encode( array(
			'content'   => $content,
			'postTotal' => ''
		) );
		exit;
	}
	wp_die();
}