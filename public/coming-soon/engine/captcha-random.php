<?php session_start();

	require_once '../config.php';
	require_once 'functions.php';
	
	if ( true !== conf( 'captcha-enable' ) ) {
		echo 'no';
		exit;
	}
	
	# init CAPTCHA
	$_SESSION['security_number'] = getRandomSymbols();
	
	function getRandomSymbols() {	
		$l  = conf( 'captcha-length' ); 
		$ch = conf( 'captcha-symbols' );
		$string = "";
		
		while ($l > 0) { $string .= $ch[mt_rand(0,strlen($ch)-1)]; $l -= 1; }
		return $string;
	}