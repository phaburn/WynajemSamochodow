<title>Wynajem</title>
<?php
	include 'global.php';
	include 'menu.html';
	
/*Wybór klienta do wypożyczenia*/
	$qListaKlientow = "SELECT * FROM klient";
	echo "Q: ".$qListaKlientow."<br>";
	$rekordSet = mysqli_query($conn, $qListaKlientow);
	$numberOfRows = mysqli_num_rows($rekordSet);
	echo "Nb. of rows: ".$numberOfRows."<br>";
	echo "<table width='80%' align='center' border='1' cellpadding='2' cellspacing='1' bgcolor='#f4f4f4'>";
	echo "<form action='wynajmnij.php' name='wynajemSamochodu' method='POST'>";
	if($numberOfRows>=1) {
		echo "<caption><strong>Tabela:Klient.</strong></caption>
			  <thead bgcolor= '#e0e0e0'> <tr> <th></th> <th colspan='7'>Tabela: Klient</th></tr> </thead>
			  <tfoot bgcolor = '#d0d0d0'> <tr> <th></th> <th colspan='7'>Tabela: Klient</th> </tr> </tfoot>
			  
    	 	  <tr><th></th><th>idKlienta</th><th>Login</th><th>Imie</th><th>Nazwisko</th><th>E-mail</th><th>Telefon</th></tr>";	
	}
	for($i = 1;$i <= $numberOfRows; $i++) {
		$row = mysqli_fetch_assoc($rekordSet);
		echo 	"<tr>
				<td><input type='radio' name='klient' value='".$row["idKlienta"]."'></td>
				<td>".$row["idKlienta"]."</td>
				<td>".$row["Login"]."</td>
				<td>".$row["Imie"]."</td>
				<td>".$row["Nazwisko"]."</td>
				<td>".$row["Email"]."</td>
				<td>".$row["Telefon"]."</td>
				</tr>";
	}
	echo "</table>";
	echo "<hr>";
	
/*Wybór samochodu dla klienta*/
	$qListaSamochodow = "SELECT * FROM samochody";
	$rekordSet = mysqli_query($conn, $qListaSamochodow);
	$numberOfRows = mysqli_num_rows($rekordSet);
	echo "Q: ".$qListaSamochodow."<br>";
	echo "Nb. of rows: ".$numberOfRows."<br>";
	
	echo "<table width='80%' align='center' border='1' cellpadding='2' cellspacing='1' bgcolor='#f4f4f4'>";
	if($numberOfRows>=1) {
		echo "
			<caption><strong>Tabele: samochody. Zestawienie wszyskich danych..</strong></caption>
			<thead bgcolor='#e0e0e0'> <tr><th></th><th colspan='6'>Tabela: Samochody</th></tr> </thead>
			<tfoot bgcolor='#d0d0d0'> <tr><th></th><th colspan='6'>Tabela: Samochody</th></tr></tfoot>
			
			<tr><th></th><th>idSamochodu</th><th>Marka</th><th>Model</th><th>Rocznik</th><th>Kolor</th><th>Stan</th></tr>
			";
	}
	for($i = 1;$i <= $numberOfRows;$i++){
		$row = mysqli_fetch_assoc($rekordSet);
		echo "<tr>
				<td><input type='radio' name='samochod' value='".$row["idSamochodu"]."'></td>
				<td>".$row["idSamochodu"]."</td>
				<td>".$row["Marka"]."</td>
				<td>".$row["Model"]."</td>
				<td>".$row["Rocznik"]."</td>
				<td>".$row["Kolor"]."</td>
				<td>".$row["Stan"]."</td>
			</tr>";
	}
	echo "</table>";
	echo "<hr>";
/**/
	echo "<button type='submit' name='wynajmnij'>Wynajmnij</button>";
	
?>