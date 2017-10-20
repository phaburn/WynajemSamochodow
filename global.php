<?php
	/*Dane do logowania do MySQL*/
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "wynajem";
	
	$conn = mysqli_connect($host, $user, $pass, $db);
	
	/*Funkcja z alertem z javascripta, tylko do testów*/
	function alert($msg) {
		echo "<script type='text/javascript'>alert('$msg');</script>";
	}

	/*Funkcja usuwająca obce znaki z ciągu znaków, obrona przed np. SQL Injection*/
	function filtruj($zmienna){
		global $conn;	
		if(get_magic_quotes_gpc()) { $zmienna = stripslashes($zmienna); /*usuwamy slashe*/ }
		return mysqli_real_escape_string($conn, htmlspecialchars(trim($zmienna))); /*usuwamy spacje, tagi html oraz niebezpieczne znaki*/
	}

	/*Funkcja sprawdzająca połączenia, wypisuje numer i opis błędu*/
	function sprawdzeniePolaczenia($conn) {
		if(!$conn) {
			echo " Error! Unable connect to MySQL<br>";
			echo "Connect errno: ".mysqli_connect_errno()."<br>";
			echo "Connect error: ".mysqli_connect_error()."<br>";
		}
		else { echo "Success: A proper connection to MySQL was made!<br>"; }
	}	
?>
