<?php
	/* Redirect non-admin users to home page */
	function redirect_non_admin_users() {
		if ( !current_user_can( 'manage_options') && '/wp-admin/admin-ajax.php' != $_SERVER['PHP_SELF'] ) {
			wp_redirect( home_url() );
			exit;
		}
	}
	add_action( 'admin_init', 'redirect_non_admin_users' );
?>