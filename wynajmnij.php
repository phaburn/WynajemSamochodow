<?php /*wynajmnij.php*/
	include 'global.php';
	$qWynamnij = "INSERT INTO `zamowienia` (`idSamochodu`, `idKlienta`) VALUES ('".$_POST["samochod"]."', '".$_POST["klient"]."');";
	mysqli_query($conn,$qWynamnij);
?>