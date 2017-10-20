<title>Wynajem</title>
<?php
	include 'global.php';
	include 'menu.html';
	
	$qListaKlientow = "SELECT * FROM klient";
	echo "Q: ".$qListaKlientow."<br>";
	$rekordSet = mysqli_query($conn, $qListaKlientow);
	$numberOfRows = mysqli_num_rows($rekordSet);
	echo "Nb. of rows: ".$numberOfRows."<br>";
	
	echo "<table width='80%' align='center' border='1' cellpadding='2' cellspacing='1' bgcolor='#f4f4f4'>";
	echo "<form action='wynajmnij.php' name='wynajemSamochodu' method='POST'>";
	if($numberOfRows>=1) {
		echo "<caption><strong>Tabela:Klient.</strong></caption>
			  <thead bgcolor= '#e0e0e0'> <tr> <th></th> <th colspan='7'>Tabela Klient</th></tr> </thead>
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
	
?>