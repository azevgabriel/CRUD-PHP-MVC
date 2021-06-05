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
		return "Lista as turmas do banco de dados";
	}
	public function addClass() {
		return "Adiciona a turma do banco de dados";
	}
	public function deleteClass() {
		return "Deleta a turma do banco de dados";
	}
	public function updateClass() {
		return "Atualiza a turma do banco de dados";
	}
}
?>