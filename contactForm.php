<?php

if (isset($_POST['submit'])) {
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$oggetto = $_POST['oggetto'];
	$messaggio = $_POST['messaggio'];

	$mailTo = "coltura.srl@gmail.com";
	$headers = "From: noreply@colturaunion.com";
	$text = "Hai ricevuto una mail da ".$nome.".\n\n".$messaggio.".\n\n".$email;
	mail($mailTo, $oggetto, $text, $headers);
	header("location: http://localhost/carbone/home.php");
	}


?>