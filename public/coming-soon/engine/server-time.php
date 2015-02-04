<?php 

	header( 'Cache-Control: no-cache, must-revalidate' );   // HTTP/1.1 
	header( 'Expires: Fri, 1 Jan 2010 00:00:00 GMT' ); 	 	// Date in the past 
	header( 'Content-Type: text/plain; charset=utf-8' ); 	// MIME type 

	$now = new DateTime();
	echo $now->format( "M j, Y H:i:s O" ) . "\n";
?>