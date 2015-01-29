<?php
	$recipient="neetudave25@gmail.com";
    $subject="Message from website";
    $sender=$_POST["yourname"];
    $senderEmail=$_POST["youremail"];
    $message=$_POST["yourmsg"];

    mail($recipient, $subject, $message, "From: $sender <$senderEmail>");

?>