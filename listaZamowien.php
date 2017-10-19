<title>Lista zamówień</title>
<?php
	include "menu.html";
	include "global.php";
	sprawdzeniePolaczenia($conn);
	
	$qListaZamowien = "SELECT zamowienia.idZamowienia,klient.Imie, klient.Nazwisko, klient.Email, klient.Telefon, samochody.Marka, samochody.Model, samochody.Rocznik, samochody.Kolor FROM `Zamowienia` INNER JOIN samochody,klient WHERE zamowienia.idKlienta = klient.idKlienta AND zamowienia.idSamochodu = samochody.idSamochodu";
	$rekordSet = mysqli_query($conn,$qListaZamowien);
	$numberOfRows = mysqli_num_rows($rekordSet);
	echo "Q: ".$qListaZamowien."<br>";
	echo "Nb. of rows: ".$numberOfRows."<br>";
	
	echo "<table width='80%' align='center' border='1' cellpadding='2' cellspacing='1' bgcolor='#f4f4f4'>";
	if($numberOfRows>=1) {
		echo "
			<caption><strong>Tabele: Klienci, Samochody, Zamowienia. Zestawienie danych.</strong></caption>
			<thead bgcolor='#e0e0e0'> <tr><th colspan='1'>Tabela:Zamowienia</th><th colspan='4'>Tabela:Klient</th><th colspan='4'>Tabela:Samochody</th></tr> </thead>
			<tfoot bgcolor='d0d0d0'> <tr><th colspan='1'>Tabela:Zamowienia</th><th colspan='4'>Tabela:Klient</th><th colspan='4'>Tabela:Samochody</th></tr> </tfoot>
			
			<tr><th>idZamowienia</th><th>Imię</th><th>Nazwisko</th><th>E-mail</th><th>Telefon</th><th>Marka</th><th>Model</th><th>Rocznik</th><th>Kolor</th></tr>
			";
	}
	for($i = 1;$i<=$numberOfRows;$i++){
		$row = mysqli_fetch_assoc($rekordSet);
		echo "<tr>
			<td>".$row['idZamowienia']."</td>
			<td>".$row['Imie']."</td>
			<td>".$row['Nazwisko']."</td>
			<td>".$row['Email']."</td>
			<td>".$row['Telefon']."</td>
			<td>".$row['Marka']."</td>
			<td>".$row['Model']."</td>
			<td>".$row['Rocznik']."</td>
			<td>".$row['Kolor']."</td>
			</tr>";		
	}
	echo "</table>";
?>