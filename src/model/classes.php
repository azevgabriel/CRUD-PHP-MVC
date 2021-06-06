<?php

/*
Aqui no Model é onde fica a parte lógica da aplicação.
Aqui é o local onde seriam feitas as comunicações 
com Banco de Dados, as validações, etc.
*/
require_once '../lib/connection.php';

class classesModel {
	public function getClasses($search) {
		// Conecta com o banco de dados.
		$Connection = new Connection();
		$conn = $Connection->getConnect();
		// Cria pesquisa no banco de dados.
		$sql = "SELECT * FROM classes WHERE ";
		if(isset($search)){
			$sql .= "level LIKE '%{$search}%' ";
			$sql .= "OR shift LIKE '%{$search}%' ";
			$sql .= "OR series LIKE '%{$search}%' ";
			$sql .= "OR year LIKE '%{$search}%' ";
			$sql .= "AND able = 1";
		}else {
			$sql .= "able = 1";
		}
		//
		$result = mysqli_query($conn, $sql); 

		if($result){
			return $result;
		} else{
			header('Location: error.php');
		}
	}
	public function removeClass($id) {
		// Conecta com o banco de dados.
		$Connection = new Connection();
		$conn = $Connection->getConnect();
		
		$sql = "UPDATE classes set able = 0 WHERE idClass = $id";
		$result = mysqli_query($conn, $sql);
		if($result){
			header('Location: listClasses.php');
		}else{ 
			header('Location: error.php');
		}
	}
	public function updateClass($id,$year,$level,$series,$shift) {
		// Conecta com o banco de dados.
		$Connection = new Connection();
		$conn = $Connection->getConnect();
		
		$sql = "UPDATE classes set year = '$year', level = '$level'," ;
		$sql .= "series = '$series', shift = '$shift' WHERE idClass = $id ";
		$result = mysqli_query($conn, $sql);
		if($result){
			header('Location: listClasses.php');
		}else{ 
			header('Location: error.php');
		}
	}
	public function getClass($id) {
		// Conecta com o banco de dados.
		$Connection = new Connection();
		$conn = $Connection->getConnect();
		// Cria pesquisa no banco de dados.
		$sql = "SELECT * FROM classes WHERE idClass = $id";
		$result = mysqli_query($conn, $sql); 

		if($result){
			return $result;
		} else{
			header('Location: error.php');
		}
	}
	public function createClass($year,$level,$series,$shift) {
		// Conecta com o banco de dados.
		$Connection = new Connection();
		$conn = $Connection->getConnect();
		
		$sql = "INSERT INTO classes (idClass,year,level,series,shift,able) ";
		$sql .= "VALUES (NULL, '$year', '$level', '$series', '$shift', '1') ";
		$result = mysqli_query($conn, $sql);
		if($result){
			header('Location: listClasses.php');
		}else{ 
			header('Location: error.php');
		}
	}
}
?>