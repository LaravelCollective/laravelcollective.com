<?php

# AJAX check
function isAjax() { 
	return ( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' ) ); 
}

# Email check
function email_check( $email ) {
	return preg_match( "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$/i", $email );
}

# Config get
function conf( $name ) {
	global $conf;
	return $conf[$name];
}

function response( $status, $body = false ) {
	return json_encode( array( 'status' => $status, 'text' => $body ) );
}

?>