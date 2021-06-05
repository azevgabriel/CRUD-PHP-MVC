<?php

// Controller é responsável por receber as requisições do usuário.
// Além de fazer a comunicação entre Model e a View.

require_once 'src/model/classes.php';

class classesController {

	// Método padrão é chamado de index
	public function Search($search) {	
		$classesModel = new classesModel();
		$resultClasses = $classesModel->getClasses($search);
		
		require_once 'src/view/classes_view.php'; // Carrega o arquivo da Interface
  }
}