<?php
	include 'global.php';
	include 'menu.html';
	//sprawdzeniePolaczenia($conn);
	
	$qListaSamochodow = "SELECT * FROM samochody";
	$rekordSet = mysqli_query($conn, $qListaSamochodow);
	$numberOfRows = mysqli_num_rows($rekordSet);
	echo "Q: ".$qListaSamochodow."<br>";
	echo "Nb. of rows: ".$numberOfRows."<br>";
	
	echo "<table width='80%' align='center' border='1' cellpadding='2' cellspacing='1' bgcolor='#f4f4f4'>";
	if($numberOfRows>=1) {
		echo "
			<caption><strong>Tabele: samochody. Zestawienie wszyskich danych..</strong></caption>
			<thead bgcolor='#e0e0e0'> <tr><th colspan='6'>Tabela: Samochody</th></tr> </thead>
			<tfoot bgcolor='#d0d0d0'> <tr><th colspan='6'>Tabela: Samochody</th></tr></tfoot>
			
			<tr><th>idSamochodu</th><th>Marka</th><th>Model</th><th>Rocznik</th><th>Kolor</th><th>Stan</th>
			";
	}
	for($i = 1;$i <= $numberOfRows;$i++){
		$row = mysqli_fetch_assoc($rekordSet);
		echo "<tr>
			<td>".$row["idSamochodu"]."</td>
			<td>".$row["Marka"]."</td>
			<td>".$row["Model"]."</td>
			<td>".$row["Rocznik"]."</td>
			<td>".$row["Kolor"]."</td>
			<td>".$row["Stan"]."</td>
			
			</th>";
	}
	echo "</table>";
?>
