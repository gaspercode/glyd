<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];

		$to='vizioncat@outlook.com';
		$subject='Glyd Question'
		$message="Name: ".$name."\n"."Email: ".$email."\n"."Wrote the following: "."\n\n".$message;
		$headers="From ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h2>Message sent! Thank you". " ".$name;
		}
		else {
			echo "Something went wrong.";
		}
	} 

?>