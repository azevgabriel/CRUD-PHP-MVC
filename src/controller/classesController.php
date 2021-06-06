<?php

	/* Importa Modelo das Turmas */
	require_once '../model/classes.php';

	/* Classe referente ao Controle de Turmas */
	class classesController {

		/* Método refente à Pesquisa */
		public function search($search) {	
			// Cria um Modelo de Turma
			$classesModel = new classesModel();
			// Chama o método "getClasses" do Modelo de Turma
			$resultClasses = $classesModel->getClasses($search);
			/* Importa a Interface Gráfica das Turmas */
			require_once 'tableClasses.php'; 
		}

		/* Método refente à Remoção de uma Turma */
		public function remove($id) {
			$classesModel = new classesModel();
			$classesModel->removeClass($id);
		}

		/* Método refente à Pesquisa de um Turma */
		public function searchID($id) {	
			$classesModel = new classesModel();
			return $resultClass = $classesModel->getClass($id);
		}

		/* Método refente ao Update de uma Turma */
		public function update($id,$year,$level,$series,$shift) {
			$classesModel = new classesModel();
			$classesModel->updateClass($id,$year,$level,$series,$shift);
		}

		/* Método refente à criação de um nova Turma*/
		public function create($year,$level,$series,$shift) {
			$classesModel = new classesModel();
			$classesModel->createClass($year,$level,$series,$shift);
		}
	}
?>