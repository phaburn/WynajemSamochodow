<?php
	require_once 'global.php';
	include 'menu.html';
	sprawdzeniePolaczenia($conn);
	
	$qListaKlientow = "SELECT * FROM klient";
	echo "Q: ".$qListaKlientow."<br>";
	$rekordSet = mysqli_query($conn, $qListaKlientow);
	$numberOfRows = mysqli_num_rows($rekordSet);
	echo "Nb. of rows: ".$numberOfRows."<br>";
	
	if($numberOfRows>1) {
		echo "<caption><strong>Tabela:Klient.</strong></caption>
			  <thead bgcolor= '#e0e0e0'> <tr><th colspan='7'>Tabela Klient</th></tr> </thead>
			  <tfoot bgcolor = '#d0d0d0'> <tr> <th colspan='7'>Tabela: Klient</th> </tr> </tfoot>
			  
    	 	  <tr><th>idKlienta</th><th>Login</th><th>Imie</th><th>Nazwisko</th><th>E-mail</th><th>Telefon</th></tr>";	
	}
?>