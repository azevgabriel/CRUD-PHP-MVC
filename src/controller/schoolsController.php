<?php

	/* Importa Modelo das Escolas, Classes e Estudantes */
	require_once '../model/schools.php';
	require_once '../model/classes.php';
	require_once '../model/students.php';

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

		public function getNumberStudents($id){
				//Número de estudante começa no 0;
				$students[$id] = 0;		
				$i = 0;	
				$schoolsModel = new schoolsModel();	
				//Chamo método, que retorna as turmas relacionada à Escola;
				$resultClasses = $schoolsModel->getClassesInSchool($id);
				//While para gerar dados de todas as turmas.
				while($rowAux = mysqli_fetch_assoc($resultClasses)){	
					$classesModel = new classesModel();	
					//Com o ID da Turma verifico se a Turma está habilitada;
					$resultAbleClasses = $classesModel->getClass($rowAux['idClass']);
					$rowAuxAble = mysqli_fetch_assoc($resultAbleClasses);
					//Caso estiver habilitada ela passa no IF;
					if ($rowAuxAble['ableClass'] == 1){
						//Chamo método, que retorna aos estudantes relacionados à Turma;
						$resultStudents = $schoolsModel->getStudentsInClass($rowAux['idClass']);
						//While para gerar dados de todas os alunos;
						while($rowAuxTwo = mysqli_fetch_assoc($resultStudents)){
							$studentsModel = new studentsModel();	
							//Com o ID do Aluno verifico se o Aluno está habilitado;
							$resultAbleStudents = $studentsModel->getStudent($rowAuxTwo['idStudent']);
							$rowAuxTwoAble = mysqli_fetch_assoc($resultAbleStudents);	
							//Caso estiver habilitado ela passa no IF;	
							if ($rowAuxTwoAble['ableStudent'] == 1){									
								$aux=0;
								// Verificar se o idStudent não foi contato nessa escola.
								$repeatId = FALSE;
								for ($aux;$aux<=$i;$aux++){
									if ($rowAuxTwoAble['idStudent'] == $idStudent[$aux]){
										$repeatId = TRUE;					
									}					
								}
								if ($repeatId == FALSE){
									// Incrementa todos os alunos habilitados da turmas referentes à Escola;							
									$students[$id]++;
									$idStudent[$i] = $rowAuxTwoAble['idStudent'];
									$i++;
								}
							}
						}
					}
				}
				return $students[$id];
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