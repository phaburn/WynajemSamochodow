<?php
	/*dane do logowania do MySQL*/
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "wynajem";
	
	$conn = mysqli_connect($host, $user, $pass, $db);
	
	/*funkcja z alertem z javascripta*/
	function alert($msg) {
		echo "<script type='text/javascript'>alert('$msg');</script>";
	}
	function sprawdzeniePolaczenia($conn) {
		if(!$conn) {
			echo " Error! Unable connect to MySQL<br>";
			echo "Connect errno: ".mysqli_connect_errno()."<br>";
			echo "Connect error: ".mysqli_connect_error()."<br>";
		}
		else { echo "Success: A proper connection to MySQL was made!<br>"; }
	}	
?>
