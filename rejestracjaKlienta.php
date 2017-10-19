<?php
	include 'menu.html';
?>
<style>
	table#rejestracja {
		font-weight:bold;
	}
</style>

<table id="rejestracja">
	<form method="POST" action="">
		<tr>
			<td>Login:</td>
			<td><input type="text" name="login"></td>
		</tr>
		<tr>
			<td>Hasło:</td>
			<td><input type="password" name="haslo1"></td>
		</tr>	
		<tr>
			<td>Powtórz hasło:</td>
			<td><input type="password" name="haslo2"></td>
		</tr>
		
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
		<tr><td></td><td><input type="submit" value="Utwórz konto" name="zarejestruj"></td></tr>
	</form>
</table>

<?php
	/*REJESTRACJA KLIENTA W BAZIE KLIENTÓW*/
	include 'global.php';
	$conn = mysqli_connect($host,$user,$pass,$db);
	
	
	function filtruj($zmienna){
		global $conn;	
		if(get_magic_quotes_gpc()) { $zmienna = stripslashes($zmienna); /*usuwamy slashe*/ }
		return mysqli_real_escape_string($conn, htmlspecialchars(trim($zmienna))); /*usuwamy spacje, tagi html oraz niebezpieczne znaki*/
	}
	
	if (isset($_POST['zarejestruj'])) {
		$login = filtruj($_POST['login']);
		$haslo1 = filtruj($_POST['haslo1']);
		$haslo2 = filtruj($_POST['haslo2']);
		$imie = filtruj($_POST['imie']);
		$nazwisko = filtruj($_POST['nazwisko']);
		$email = filtruj($_POST['email']);
		$telefon = filtruj($_POST['telefon']);
		
		/*sprawdzamy czy podany login istnieje w bazie*/
		if(mysqli_num_rows(mysqli_query($conn, "SELECT login FROM klient WHERE login ='".$login."';")) == 0) { 
			/*sprawdzamy czy podane hasla sa takie same*/
			if($haslo1 == $haslo2) {
				mysqli_query($conn, "INSERT INTO `klient`(`Imie`, `Nazwisko`, `Login`, `Haslo`, `Telefon`, `Email`) VALUES
									('".$imie."', '".$nazwisko."', '".$login."', '".md5($haslo1)."', '".$telefon."', '".$email."')");
				echo "Konto zostało utworzone!";
				
			} else { echo "Podane hasła się różnią."; }
		} else { echo "Podany login jest juz zajety."; }
	}
	mysqli_close($conn);
?>