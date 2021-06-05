<?php

// Controller é responsável por receber as requisições do usuário.
// Além de fazer a comunicação entre Model e a View.

require_once 'app/model/classes.php'; // Carrega o arquivo classes.php

class classesController {

	// Método padrão é chamado de index
	public function index() {
		$classesModel = new classesModel(); // Cria um objeto Model
		$listar = $classesModel->getClasses();
		$adicionar = $classesModel->addClass();
		$remover = $classesModel->deleteClass();
		$atualizar = $classesModel->updateClass(); // Chama o método getMensagem() do Model
		require_once 'app/view/classes_view.php'; // Carrega o arquivo da Interface
  }
}