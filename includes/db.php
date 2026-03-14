<?php

	function OpenCon(){
		$DB_HOST = 'localhost';
		$DB_USERNAME = 'website';
		$DB_PASS = 'Fl23jR+8Tl^H';
		$DB_DATABASE = 'RclWeb';		
	
		$conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASS,$DB_DATABASE) or die("Connect failed: %s\n". $conn -> error);
 
 		return $conn;
	}

	function CloseCon($conn) {
 		$conn -> close();
 	}	

	function OpenCon2(){
		$DB_HOST = 'localhost';
		$DB_USERNAME = 'crm_user';
		$DB_PASS = 'm^SC#xl9C$TFAXUCdB';
		$DB_DATABASE = 'crm';
		$conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASS,$DB_DATABASE) or die("Connect failed: %s\n". $conn -> error);
 
 		return $conn;
	}
   
?>
