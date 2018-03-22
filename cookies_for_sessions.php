<?php
// custom code for cookie scripts
add_action( 'init', 'tsavo_user' );
function tsavo_user() {
	if (!is_page("own-your-home")) {
		return;
		} else {
			echo $_COOKIE["tsavo_user"];
			$cookie_name = "tsavo_user";
			$cookie_value = $_POST['wpforms-2703-field_1'];;
			if (!isset($_COOKIE)) {
			setcookie( $cookie_name, $cookie_value, 3 * DAYS_IN_SECONDS, COOKIEPATH, COOKIE_DOMAIN );
		} else {
			function redirect($url) {
	    ob_start();
	    header('Location: tsavocity.co.ke/own-your-home/hilltop'.$url);
	    ob_end_flush();
	    die();
			}
		}
	}
}
?>
