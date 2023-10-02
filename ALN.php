<?php
/*
Plugin Name:  3-3 Atlantis Learning Network
Description:  Connects Content in your website to the @lantis Learning Network
Plugin URI:   https://atlantislearningcommunity.org
Author:       Atlantis Learning Network
Version:      3-3 v1 8:30
Text Domain:  atlantis
Domain Path:  /languages
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
*/

// disable direct file access
if ( ! defined( 'WPINC' ) ) {
		die;
	}
	define( 'ALN_VERSION', '1.0.0' );
	define( 'ALNDOMAIN', 'post-types');
	define( 'ALNPATH', plugin_dir_url(__FILE__) ); // This includes the trailing slash.



// Begin Set up: admin only
// if ( is_admin() ) {
	
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
	// require_once plugin_dir_path( __FILE__ ) . 'admin/dashboard.php';
	
	
// }

/* Basic Set Up */

	// require_once dirname( __FILE__ ). '/cmb2-post-search/cmb2_post_search_field.php';
	require_once plugin_dir_path( __FILE__  ) . 'includes/core-functions.php';
	

	













