<?php

$to = $_POST["to"];
$from = $_POST["from"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$body = "\n\n $message";

$headers = "From: $from";

mail($to,$subject,$body,$headers);

echo "Your Email Has Been Sent Successfully.!!.";
?>