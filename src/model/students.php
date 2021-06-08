<?php

	/* Importa a Classe de Conexão */
	require_once '../lib/connection.php';

	/* Classe Modelo para os Alunos */
	class studentsModel {

		/* Método de Busca dos Alunos no Banco de Dados */
		public function getStudents($search) {
			/* Chama o método de conexão */
			$Connection = new Connection();
			$conn = $Connection->getConnect();
			/* Cria uma pesquisa no banco de dados. */
			$sql = "SELECT * FROM students WHERE ";
			if(isset($search)){
				$sql .= "(name LIKE '%{$search}%' ";
				$sql .= "OR phone LIKE '%{$search}%' ";
				$sql .= "OR email LIKE '%{$search}%' ";
				$sql .= "OR gender LIKE '%{$search}%' ";
				$sql .= "OR birthday LIKE '%{$search}%') ";
				$sql .= "AND ableStudent = 1 ORDER BY name ASC";
			}else {
				$sql .= "ableStudent = 1 ORDER BY name ASC";
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

		/* Método de Remoção de um Aluno no Banco de Dados */
		public function removeStudent($id) {
			$Connection = new Connection();
			$conn = $Connection->getConnect();
			$sql = "UPDATE students set ableStudent = 0 WHERE idStudent = $id";
			$result = mysqli_query($conn, $sql);
			if($result){
				header('Location:'.SUCCESS_STUDENT);
			}else{ 
				header('Location:'.ERROR.'?codError=4');
			}
		}

		/* Método de Update de um Aluno no Banco de Dados */
		public function updateStudent($id,$name,$phone,$email,$birthday,$gender) {
			if(($name != "") && ($email != "")){
				$Connection = new Connection();
				$conn = $Connection->getConnect();
				$sql = "UPDATE students set name = '$name', phone = '$phone', " ;
				$sql .= "email = '$email', birthday = '$birthday', gender = '$gender' ";
				$sql .= "WHERE idStudent = $id ";
				$result = mysqli_query($conn, $sql);
				if($result){
					header('Location:'.SUCCESS_STUDENT);
				}else{ 
					header('Location:'.ERROR.'?codError=3');
				}
			} else {
				header('Location:'.ERROR.'?codError=10');
			}
		}

		/* Método de Busca de uma Aluno no Banco de Dados */
		public function getStudent($id) {
			$Connection = new Connection();
			$conn = $Connection->getConnect();
			$sql = "SELECT * FROM students WHERE idStudent = $id";
			$result = mysqli_query($conn, $sql); 
			if($result){
				return $result;
			} else{
				header('Location:'.ERROR.'?codError=1');
			}
		}

		/* Método de Criação de um Aluno no Banco de Dados */
		public function createStudent($name,$phone,$email,$birthday,$gender) {
			if(($name != "") && ($email != "")){
				$Connection = new Connection();
				$conn = $Connection->getConnect();
				$sql = "INSERT INTO students (idStudent,ableStudent,name,phone,email,birthday,gender) ";
				$sql .= "VALUES (NULL, '1', '$name', '$phone', '$email', '$birthday','$gender') ";
				$result = mysqli_query($conn, $sql);
				if($result){
					header('Location:'.SUCCESS_STUDENT);
				}else{ 
					header('Location:'.ERROR.'?codError=2');
				}
			} else {
				header('Location:'.ERROR.'?codError=11');
			}
		}

	}
?>