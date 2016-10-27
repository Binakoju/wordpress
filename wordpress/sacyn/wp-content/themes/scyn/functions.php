<?php

remove_filter('the_content', 'wpautop');

add_action( 'after_setup_theme', 'sacyn_setup' );
if ( ! function_exists( 'sacyn_setup' ) ):
	function sacyn_setup() {	
		add_editor_style();
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'menus' );
		add_theme_support( 'post-thumbnails' );

		if(function_exists('register_nav_menus')) {
			register_nav_menus(array(
				'main-menu' => __( 'Main Menu' ),
				'footer-menu' => __( 'Footer Menu' )
			));
		}
	}
endif; // scyn_setup
?>
<?php // Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');
?>


