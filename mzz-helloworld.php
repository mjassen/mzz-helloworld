<?php
/*
Plugin Name: mzz-helloworld
Description: A hello world plugin for WordPress
License: GPLv2
*/

// echoes the text
function mzz_helloworld() {
	echo "Hello, Mzz World!";
}

// execute when the admin_notices action is called, thus the text shows at top of WP Admin Dashboard area
add_action( 'admin_notices', 'mzz_helloworld' );

?>
