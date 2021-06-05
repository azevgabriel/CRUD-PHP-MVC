<?php

/*
Aqui no Model é onde fica a parte lógica da aplicação.
Aqui é o local onde seriam feitas as comunicações 
com Banco de Dados, as validações, etc.
*/
require_once 'src/lib/connection.php';

class classesModel {
	public $idClass;
	public $year;
	public $level;
	public $series;
	public $shift;
	
	public function getClasses($search) {
		// Conecta com o banco de dados.
		$Connection = new Connection();
		$conn = $Connection->getConnect();
		// Cria pesquisa no banco de dados.
		$sql = "SELECT * FROM classes ";
		if(isset($search)){
			$sql .= "WHERE `level` LIKE '%{$search}%' ";
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
}
?>