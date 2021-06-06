<?php

/*
Aqui no Model é onde fica a parte lógica da aplicação.
Aqui é o local onde seriam feitas as comunicações 
com Banco de Dados, as validações, etc.
*/
require_once 'src/lib/connection.php';

class classesModel {
	public function getClasses($search) {
		// Conecta com o banco de dados.
		$Connection = new Connection();
		$conn = $Connection->getConnect();
		// Cria pesquisa no banco de dados.
		$sql = "SELECT * FROM classes WHERE able = 1";
		if(isset($search)){
			$sql .= "OR `level` LIKE '%{$search}%' ";
			$sql .= "OR `shift` LIKE '%{$search}%' ";
			$sql .= "OR `series` LIKE '%{$search}%' ";
			$sql .= "OR `year` LIKE '%{$search}%';";
		}
		//
		$result = mysqli_query($conn, $sql); 

		if($result){
			return $result;
		} else{
			echo "Erro na listagem de Turmas.";
		}
	}
	public function removeClass($id) {
		// Conecta com o banco de dados.
		$Connection = new Connection();
		$conn = $Connection->getConnect();
		
		$sql = "UPDATE classes set able = 0 WHERE idClass = $id";
		$result = mysqli_query($conn, $sql);
	}
}
?>