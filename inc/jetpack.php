<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package obreezy
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function obreezy_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'	=> 'obreezy_infinite_scroll_render',
		'footer'	=> 'page',
	) );
} // end function obreezy_jetpack_setup
add_action( 'after_setup_theme', 'obreezy_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function obreezy_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'components/content', get_post_format() );
	}
} // end function obreezy_infinite_scroll_render


/**
 * Add support for the Site Logo
 */
function obreezy_site_logo_init() {
	add_image_size( 'component-s-logo', 200, 200 );
	add_theme_support( 'site-logo', array( 'size' => 'component-s-logo' ) );
}
add_action( 'after_setup_theme', 'obreezy_site_logo_init' );

/**
 * Return early if Site Logo is not available.
 */
function obreezy_the_site_logo() {
	if ( ! function_exists( 'jetpack_the_site_logo' ) ) {
		return;
	} else {
		jetpack_the_site_logo();
	}
}

/**
* Add theme support for Responsive Videos.
*/
add_theme_support( 'jetpack-responsive-videos' );

/**
* Add theme support for Jetpack Social Menus.
*/
add_theme_support( 'jetpack-social-menu' );

/**
* If there's no Jetpack Social Menu, let's register a fallback.
*/
if ( ! function_exists( 'jetpack_social_menu' ) ) :
	function obreezy_social_menu_init() {
		register_nav_menus( array(
			'social'  => __( 'Social Links Menu', 'obreezy' ),
		) );
	}
	add_action( 'after_setup_theme', 'obreezy_social_menu_init' );
endif;

/**
 * Return fallback if Social Menu is not available.
 */
function obreezy_social_menu() {
	if ( ! function_exists( 'jetpack_social_menu' ) ) :
		if ( has_nav_menu( 'social' ) ) :
?>
			<nav class="social-navigation" role="navigation">
				<?php wp_nav_menu( array(
					'theme_location' => 'social',
					'link_before' => '<span class="screen-reader-text">',
					'link_after' => '</span>',
					'depth' => 1,
				) ); ?>
			</nav><!-- .social-navigation -->
<?php
		endif;
	else :
		jetpack_social_menu();
	endif;
}
