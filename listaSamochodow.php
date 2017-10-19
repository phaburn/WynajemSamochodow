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
			
			<tr><th>idSamochodu</th><th>Marka</th><th>Model</th><th>Rocznik</th><th>Kolor</th><th>Stan</th><th>Zmiana statusu samochodu</th></tr>
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
				<td>
					<form action='' method=\"POST\">
						<select name='zmianaStatusuSamochodu'>
							<option value='Wolny'>Wolny</option>
							<option value='Zarezerwowany'>Zarezerwowany</option>
							<option value='Wynajety'>Wynajęty</option>
							<option value='Serwis'>Serwis</option>
						</select>
					</form>
					<button type='Submit' name='zmien' value='".$row["idSamochodu"]."'>Zmień</button>
				</td>
			</tr>";
	}
	echo "</table>";
	
	if($_POST['zmien']==1 ) {
		alert("Udalo sie!1");
	}

?>
