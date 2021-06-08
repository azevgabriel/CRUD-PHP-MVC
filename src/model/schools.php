<?php

	/* Importa a Classe de Conexão */
	require_once '../lib/connection.php';

	/* Classe Modelo para as Escolas */
	class schoolsModel {

		/* Método de Busca as Escolas no Banco de Dados */
		public function getSchools($search) {
			/* Chama o método de conexão */
			$Connection = new Connection();
			$conn = $Connection->getConnect();
			/* Cria uma pesquisa no banco de dados. */
			$sql = "SELECT * FROM schools WHERE ";
			if(isset($search)){
				$sql .= "(nameSchool LIKE '%{$search}%' ";
				$sql .= "OR address LIKE '%{$search}%') ";
				$sql .= "AND ableSchool = 1 ORDER BY nameSchool ASC";
			}else {
				$sql .= "ableSchool = 1 ORDER BY nameSchool ASC";
			}
			/* Guarda o resultado do Banco de Dados */
			$result = mysqli_query($conn, $sql); 
			/* Verifica se existe os dados requeridos */
			if($result){
				return $result;
			} else{
				/* Tratativa de Erro */
				header('Location:'.ERROR.'?codError=1');
			}
		}

		/* Método de Remoção de uma Escola no Banco de Dados */
		public function removeSchool($id) {
			$Connection = new Connection();
			$conn = $Connection->getConnect();
			$sql = "UPDATE schools set ableSchool = 0 WHERE idSchool = $id";
			$result = mysqli_query($conn, $sql);
			if($result){
				header('Location:'.SUCCESS_SCHOOL);
			}else{ 
				header('Location:'.ERROR.'?codError=4');
			}
		}

		/* Método de Update de uma Escola no Banco de Dados */
		public function updateSchool($id,$nameSchool,$address) {
			if(($nameSchool != "") && ($address != "")){	
				$Connection = new Connection();
				$conn = $Connection->getConnect();
				$sql = "UPDATE schools set nameSchool = '$nameSchool', ";
				$sql .= "address = '$address' WHERE idSchool = $id ";
				$result = mysqli_query($conn, $sql);
				if($result){
					header('Location:'.SUCCESS_SCHOOL);
				}else{ 
					header('Location:'.ERROR.'?codError=3');		
				}
			} else {
				header('Location:'.ERROR.'?codError=8');
			}
		}

		/* Método de Busca de uma Escola no Banco de Dados */
		public function getSchool($id) {
			$Connection = new Connection();
			$conn = $Connection->getConnect();
			$sql = "SELECT * FROM schools WHERE idSchool = $id";
			$result = mysqli_query($conn, $sql); 
			if($result){
				return $result;
			} else{
				header('Location:'.ERROR.'?codError=1');
			}
		}

		public function getClassesInSchool($idSchool) {
			$Connection = new Connection();
			$conn = $Connection->getConnect();
			$sql = "SELECT * FROM `relationship_classes_schools` WHERE `idSchool` = $idSchool ";
			$result = mysqli_query($conn, $sql); 
			if($result){
				return $result;
			} else{
				header('Location:'.ERROR.'?codError=1');
			}
		}

		public function getStudentsInClass($idClass) {
			$Connection = new Connection();
			$conn = $Connection->getConnect();
			$sql = "SELECT * FROM `relationship_students_classes` WHERE `idClass` = $idClass ";
			$result = mysqli_query($conn, $sql); 
			if($result){
				return $result;
			} else{
				header('Location:'.ERROR.'?codError=1');
			}
		}

		/* Método de Criação de uma Escola no Banco de Dados */
		public function createSchool($nameSchool,$address) {
			if(($nameSchool != "") && ($address != "")){
				$Connection = new Connection();
				$conn = $Connection->getConnect();
				$sql = "INSERT INTO schools (idSchool,ableSchool,nameSchool,address) ";
				$sql .= "VALUES (NULL, '1', '$nameSchool', '$address') ";
				$result = mysqli_query($conn, $sql);
				if($result){
					header('Location:'.SUCCESS_SCHOOL);
				}else{ 
					header('Location:'.ERROR.'?codError=2');
				}
			} else {
				header('Location:'.ERROR.'?codError=9');
			}
		}

	}
?>