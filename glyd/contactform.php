<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];

	$mailTo = "gaspergray@glydapp.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;

	mail($mailTo, $txt, $headers);
	header("Location: index.php?mailsend");
}