<?php

function Conectar(){
	$conn = null;
	$host = '***********';
	$db= 'dbname=*************';
	$user='************';
	$pwd ='************';
	try {
		$conn = new PDO('mysql:host='.$host.'dbname='.$db, $user, $pwd);

	} catch (PDOException $e) {
		echo "<p>No se pudo conectar</p>";
		exit;
	}
	return $conn;

}
