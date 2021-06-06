<?php

	/* Importa Modelo das Escolas */
	require_once '../model/schools.php';

	/* Classe referente ao Controle das Escolas */
	class schoolsController {

		/* Método refente à Pesquisa */
		public function search($search) {	
			// Cria um Modelo da Escola
			$schoolsModel = new schoolsModel();
			// Chama o método "getSchools" do Modelo de Turma
			$resultSchools = $schoolsModel->getSchools($search);
			/* Importa a Interface Gráfica das Escolas */
			require_once 'tableSchools.php'; 
		}

		/* Método refente à Remoção de uma Escola */
		public function remove($id) {
			$schoolsModel = new schoolsModel();
			$schoolsModel->removeSchool($id);
		}

		/* Método refente à Pesquisa de uma Escola */
		public function searchID($id) {	
			$schoolsModel = new schoolsModel();
			return $resultSchool = $schoolsModel->getSchool($id);
		}

		/* Método refente ao Update de uma Escola */
		public function update($id,$nameSchool,$address) {
			$schoolsModel = new schoolsModel();
			$schoolsModel->updateSchool($id,$nameSchool,$address);
		}

		/* Método refente à criação de um nova Escola */
		public function create($nameSchool,$address) {
			$schoolsModel = new schoolsModel();
			$schoolsModel->createSchool($nameSchool,$address);
		}
	}
?>