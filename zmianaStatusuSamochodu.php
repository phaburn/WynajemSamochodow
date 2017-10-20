<?php
	include 'global.php';
	$qZmianaStatusu = "UPDATE `samochody` SET `Stan` = '".$_POST["zmianaStatusuSamochodu"]."' WHERE `samochody`.`idSamochodu` = ".$_POST["idSamochodu"].";";
	mysqli_query($conn,$qZmianaStatusu);
	header("Location: listaSamochodow.php");
?>