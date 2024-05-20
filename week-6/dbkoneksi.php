<?php

$host = "localhost";
$dbname = "db_puskesmas";
$user = "root";
$pass = "";

$dsn = "mysql:host=$host; dbname=$dbname;";

$dbh = new PDO($dsn, $user, $pass);

?>

