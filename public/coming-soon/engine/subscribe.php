<?php session_start();

/* Subscribe users on your newsletter
   ==================================================

	The script can work in two modes: MailChimp and Email
	
	# -- MailChimp: The script saves emails to the MailChimp's list (http://mailchimp.com) - RECOMMEND
	# -- Email [default]: The script sends emails on your email address
	
   ==================================================
*/

require_once '../config.php';
require_once 'functions.php';

if ( true != isAjax() ) {
	echo 'Error 42: Not Ajax';
	exit;
}

if ( in_array( $_REQUEST['email'], $_SESSION['emails'] ) ) {
	
	echo response(0, 'Email was already used');
	exit;
}

switch ( conf( 'subscribe-type' ) ) {
	case 'mailchimp': 
		echo mailchimp(); 
		break;
	default: echo email();
}

# MailChimp [http://mailchimp.com]
function mailchimp() {
	
	$email = $_REQUEST['email'];

	if ( false === email_check($email) ) {
		return response( 0, 'Email address is invalid' );
	}
	
	require_once 'MCAPI.class.php';
	
	$api = new MCAPI( conf( 'mailchimp-api' ) );
	$list_id = conf( 'mailchimp-list-id' );
	
	if ( true === $api->listSubscribe( $list_id, $email, '' ) ) {
		$_SESSION['emails'][] = $email;
		return response(1);
	} else { 
		return response( 0, $api->errorMessage ); 
	}
}

# Simple mail function
function email() {

	$email = $_REQUEST['email'];

	if ( false === email_check( $email ) ) {
		return response( 0, 'Email address is invalid' );
	}
	
	ob_start();
	$r = mail( conf( 'email-address' ), conf( 'email-subject' ), $email, conf( 'email-from' ) );
	ob_end_clean();
	
	if ( true == $r ) {
		$_SESSION['emails'][] = $email;	
		return response(1);
	} 
	
	return response( 0, 'Something is wrong' );
}
