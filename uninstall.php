<?php
/**
* Don't display if wordpress admin class is not found
* Protects code if wordpress breaks
* @since 0.2
*/
if ( ! function_exists( 'is_admin' ) ) {
    header( 'Status: 403 Forbidden' );
    header( 'HTTP/1.1 403 Forbidden' );
    exit();
}

//if uninstall not called from WordPress exit
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) 
    exit();
/**
$allOptions = wp_load_alloptions();
foreach ($allOptions as $option_name => $option_value) {
	if (strpos($option_name, 'captcha-them-all') !== FALSE) {
		delete_option( $option_name );
	}
}

**/

delete_option( 'captcha-them-all' );

// For site options in multisite
delete_site_option( 'captcha-them-all'  );  

?>
