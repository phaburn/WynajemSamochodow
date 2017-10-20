<?php /*dodajPracownika.php*/
	include 'menu.html';
?>
<table id="rejestracjaPracownika">
	<form action="" method="POST">
		<tr>
			<td>Imię:</td>
			<td><input type="text" name="imie"></td>
		</tr>
		<tr>
			<td>Nazwisko:</td>
			<td><input type="text" name="nazwisko"></td>
		</tr>
		<tr>
			<td>E-mail:</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Telefon:</td>
			<td><input type="text" name="telefon"></td>
		</tr>
		<tr>
			<td>Funkcja:</td>
			<td>
				<select name="funkcjaPracownika">
					<option value="biurowy" selected>Biurowy</option>
					<option value="samochodowy">Samochodowy</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit" name="zatrudnijPracownika">Zatrudnij</button></td>
		</tr>
	</form>
</table>

<?php
	include 'global.php';
	
	/*Rejestracja klienta w bazie*/
	if(isset($_POST['zatrudnijPracownika'])) {
		$imie = filtruj($_POST["imie"]);
		$nazwisko = filtruj($_POST["nazwisko"]);
		$email = filtruj($_POST["email"]);
		$telefon = filtruj($_POST["telefon"]);
		$funkcja = $_POST["funkcjaPracownika"];
		
		$qZatrudnijPracownika = "INSERT INTO `pracownicy`(`Imie`, `Nazwisko`, `Telefon`, `Email`, `Funkcja`) VALUES ('".$imie."', '".$nazwisko."', '".$telefon."', '".$email."', '".$funkcja."')";
		mysqli_query($conn, $qZatrudnijPracownika);
		header("Location: listaPracownikow.php");
		
	}
	
?>