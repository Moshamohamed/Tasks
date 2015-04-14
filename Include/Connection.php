<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "awc-Dev";

try {
    	$Conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
		$Conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$Conn->exec("SET NAMES utf8");
}
catch (PDOException $e) {
		die($e->getMessage());
}