<?php

	function OpenCon(){
		$DB_HOST = 'localhost';
		$DB_USERNAME = 'root';
		$DB_PASS = '2z@hyA90l';
		$DB_DATABASE = 'RclWeb';
	
		$conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASS,$DB_DATABASE) or die("Connect failed: %s\n". $conn -> error);
 
 		return $conn;
	}

	function CloseCon($conn) {
 		$conn -> close();
 	}	
   
?>