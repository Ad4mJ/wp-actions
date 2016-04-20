<?php
	/* changing default wordpres email settings */
	function new_mail_from($old) {
	 return 'no-reply@domain.com';
	}

	function new_mail_from_name($old) {
	 return 'Administrator';
	}
	
	add_filter('wp_mail_from', 'new_mail_from');
	add_filter('wp_mail_from_name', 'new_mail_from_name');
?>