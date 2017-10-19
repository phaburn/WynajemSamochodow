<title>Menu</title>
<?php	
	//Błąd: Wyświetlanie komunikatów w rejestracjaKlienta.php
	include 'menu.html';
	require_once 'global.php';
	echo "Conn param: ".$host.", ".$user.", ".$pass.", ".$db."<br>";
	
	sprawdzeniePolaczenia($conn);
//--------------------------------------------------------------------------------------
 
?>
