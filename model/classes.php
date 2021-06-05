<?php

/*
	* Aqui no Model é onde fica a parte lógica da aplicação.
	* Neste exemplo temos uma classe extremamente simples que retorna apenas uma 
	* mensagem de texto, mas em aplicações maiores aqui é o local onde seriam feitas 
	* as comunicações com Banco de Dados por exemplo, as validações, etc.
*/

class classesModel {
	
	public function getClasses() {
		echo "Lista as turmas do banco de dados";
	}
	public function addClass() {
		echo "Adiciona a turma do banco de dados";
	}
	public function deleteClass() {
		echo "Deleta a turma do banco de dados";
	}
	public function updateClass() {
		echo "Atualiza a turma do banco de dados";
	}
}
?>