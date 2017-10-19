<title>Lista pracowników</title>
<?php
	include 'menu.html';
	include 'global.php';
	sprawdzeniePolaczenia($conn);
	
	$qListaPracownikow = "SELECT * FROM pracownicy";;
	$rekordSet = mysqli_query($conn,$qListaPracownikow);
	$numberOfRows = mysqli_num_rows($rekordSet);
	echo "Q: ".$qListaPracownikow."<br>";
	echo "Nb. of rows: ".$numberOfRows."<br>";
	
	echo "<table width='80%' align='center' border='1' cellpadding='2' cellspacing='1' bgcolor='#f4f4f4'>";
	if($numberOfRows >= 1) {
		echo "
			<caption><strong>Tabela: pracownicy. Zestawienie danych.</strong></caption>
			<thead bgcolor='#e0e0e0'> <tr><th colspan='6'>Tabela: pracownicy</th></tr> </thead>
			<tfoot bgcolor='#d0d0d0'> <tr><th colspan='6'>Tabela: pracownicy</th></tr> </tfoot>
		
			<tr><th>ID pracownika</th><th>Imię</th><th>Nazwisko</th><th>E-mail</th><th>Telefon</th><th>Funkcja</th></tr>
		";
	}
	for($i = 1;$i <= $numberOfRows;$i++){
		$row = mysqli_fetch_assoc($rekordSet);
		echo "<tr>
			<td>".$row["idPracownika"]."</td>
			<td>".$row["Imie"]."</td>
			<td>".$row["Nazwisko"]."</td>
			<td>".$row["Email"]."</td>
			<td>".$row["Telefon"]."</td>
			<td>".$row["Funkcja"]."</td>
			</tr>";
	}

	echo "</table>";
?>