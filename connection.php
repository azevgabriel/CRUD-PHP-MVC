<?php

	$servername = "localhost";
	$username = "";
	$password = "";
	$dbname = "adm_tassi";

	// Cria uma conexão com o banco de dados.
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Verifica 
	if (!$conn) {
	    die("A conexão falhou: " . mysqli_connect_error());
	}
?>