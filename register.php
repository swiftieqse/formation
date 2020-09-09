<?php
header("location:landing.html",true);
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$file=fopen("user.txt","a");
fwrite($file,"name: ");
fwrite($file,$name);
fwrite($file,"email: ");
fwrite($file,$email);
fwrite($file,"password: ");
fwrite($file,$password);
fclose($file);
?>