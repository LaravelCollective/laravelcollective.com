<?php session_start();

/* Feedback form
   ==================================================

	Send user's messages to you
	
	# -- You don't need to change this script.
	# -- All settings you can find in the config.php
	
   ==================================================
*/
 
require_once '../config.php';
require_once 'functions.php';

if ( true != isAjax() ) {
	echo 'Error 42: Not Ajax';
	exit;
}

echo feedback();

function feedback() {
	
	$name  = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$mess  = $_REQUEST['message'];
	$code  = $_REQUEST['code'];
	
	if ( $code != $_SESSION['security_number'] ) {
		return response( 0, 'Code is incorrect' );
	}
	
	if ( false == email_check( $email ) ) {
		return response( 0, 'Email address is invalid' );
	}
	
	if( strlen( $name ) < 2 ) {
		return response( 0, 'Name is too short' );
	}
	
	if( strlen( $mess ) < 10 ) {
		return response( 0, 'Your message is too short' );
	}

	
	ob_start();
	$r = mail( conf('feedback-address'), conf('feedback-subject'), $mess, "From: {$name} <{$email}>\r\n" );
	ob_end_clean();
		
	return ( true == $r ) ? response(1) : response( 0, 'Something is wrong' );
}