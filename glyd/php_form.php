<?php
//$to_mail = "architects@palavin.com,t.lavin@palavin.com,12yorkcourt@gmail.com";
$to_mail = "vizioncat@outlook.com";
//$cc="paul@enhance.ie";
$mail_sent = 0;
if(isset($_POST['submit'])){
    //echo "the form was submitted";

$name = trim(strip_tags($_POST['name']));
if($name == "")
    $error = true;

$email = trim(strip_tags($_POST['email']));
if($email == "")
    $error = true;

$message = trim(strip_tags($_POST['message']));


if($error != true){
    $headers = 'From: "Euro Insulation" <no-reply@euroinsulations.ie>'."\r\n";
    //$headers .= 'CC: "'.$cc.'" <'.$cc.'>'."\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "";

    $subject = "New contact message";

    $message = "New Contact message, received from: <br /> \n ";
    $message .= "<b>Name</b> ".$name."<br /> \n";
    $message .= "<b>Email</b> ".$email."<br /> \n";

    $message .= "<b>message</b> ".$message."<br /> \n";

    if(@mail($to_mail,$subject,$message,$headers))
    {
        echo "mail sent";
        $mail_sent = 1;
    }
    else echo "mail not sent";
} else {
    echo 'validation error';
}
}
?>