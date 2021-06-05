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
	
	public function getClasses() {
		// Conecta com o banco de dados.
		$Connection = new Connection();
		$conn = $Connection->getConnect();
		// Cria pesquisa no banco de dados.
		$sql = "SELECT * FROM classes";

		//
		$result = mysqli_query($conn, $sql);

		if($result){
			$json = array();
			while($row = mysqli_fetch_assoc($result)){
				$id = $row['idClass'];
				$json[$id]['Ano'] = $row['year'];
				$json[$id]['Nivel'] = $row['level'];
				$json[$id]['Periodo'] = $row['series'];
				$json[$id]['Turno'] = $row['shift'];
			}
			return json_encode($json);
		} else{
			echo "Erro na listagem de Turmas.";
		}
	}
}
?>