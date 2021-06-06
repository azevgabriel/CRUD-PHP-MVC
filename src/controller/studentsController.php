<?php

	/* Importa Modelo dos Alunos */
	require_once '../model/students.php';

	/* Classe referente ao Controle dos Alunos */
	class studentsController {

		/* Método refente à Pesquisa */
		public function search($search) {	
			// Cria um Modelo de Alunos
			$studentsModel = new studentsModel();
			// Chama o método "getStudents" do Modelo de Alunos
			$resultStudents = $studentsModel->getStudents($search);
			/* Importa a Interface Gráfica dos Alunos */
			require_once 'tableStudents.php'; 
		}

		/* Método refente à Remoção de um Aluno */
		public function remove($id) {
			$studentsModel = new studentsModel();
			$studentsModel->removeStudent($id);
		}

		/* Método refente à Pesquisa de um Aluno */
		public function searchID($id) {	
			$studentsModel = new studentsModel();
			return $resultStudent = $studentsModel->getStudent($id);
		}

		/* Método refente ao Update de um Aluno */
		public function update($id,$name,$phone,$email,$birthday,$gender) {
			$studentsModel = new studentsModel();
			$studentsModel->updateStudent($id,$name,$phone,$email,$birthday,$gender);
		}

		/* Método refente à criação de um novo Aluno*/
		public function create($name,$phone,$email,$birthday,$gender) {
			$studentsModel = new studentsModel();
			$studentsModel->createStudent($name,$phone,$email,$birthday,$gender);
		}
	}
?>