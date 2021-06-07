<?php

	/* Importa a Classe de Conexão */
	require_once '../lib/connection.php';

	/* Classe Modelo para Turmas */
	/* Local onde é feita a comunição com Banco de Dados */
	class studentsModel {

		/* Método de Busca as Turmas no Banco de Dados */
		public function getStudents($search) {
			/* Chama o método de conexão */
			$Connection = new Connection();
			$conn = $Connection->getConnect();
			/* Cria uma pesquisa no banco de dados. */
			$sql = "SELECT * FROM students WHERE ";
			if(isset($search)){
				$sql .= "name LIKE '%{$search}%' ";
				$sql .= "OR phone LIKE '%{$search}%' ";
				$sql .= "OR email LIKE '%{$search}%' ";
				$sql .= "OR gender LIKE '%{$search}%' ";
				$sql .= "OR birthday LIKE '%{$search}%' ";
				$sql .= "AND able = 1 ORDER BY name ASC";
			}else {
				$sql .= "able = 1 ORDER BY name ASC";
			}
			/* Guarda o resultado do Banco de Dados */
			$result = mysqli_query($conn, $sql); 
			/* Verifica se existe os dados requeridos */
			if($result){
				return $result;
			} else{
				header('Location:'.ERROR);
			}
		}

		/* Método de Remoção de uma Turma no Banco de Dados */
		public function removeStudent($id) {
			$Connection = new Connection();
			$conn = $Connection->getConnect();
			$sql = "UPDATE students set able = 0 WHERE idStudent = $id";
			$result = mysqli_query($conn, $sql);
			if($result){
				header('Location:'.SUCCESS_STUDENT);
			}else{ 
				header('Location:'.ERROR);
			}
		}

		/* Método de Update de uma Turma no Banco de Dados */
		public function updateStudent($id,$name,$phone,$email,$birthday,$gender) {
			$Connection = new Connection();
			$conn = $Connection->getConnect();
			$sql = "UPDATE students set name = '$name', phone = '$phone', " ;
			$sql .= "email = '$email', birthday = '$birthday', gender = '$gender' ";
			$sql .= "WHERE idStudent = $id ";
			$result = mysqli_query($conn, $sql);
			if($result){
				header('Location:'.SUCCESS_STUDENT);
			}else{ 
				echo $id;
			}
		}

		/* Método de Busca de uma Turma no Banco de Dados */
		public function getStudent($id) {
			$Connection = new Connection();
			$conn = $Connection->getConnect();
			$sql = "SELECT * FROM students WHERE idStudent = $id";
			$result = mysqli_query($conn, $sql); 
			if($result){
				return $result;
			} else{
				header('Location:'.ERROR);
			}
		}

		/* Método de Criação de Turma no Banco de Dados */
		public function createStudent($name,$phone,$email,$birthday,$gender) {
			$Connection = new Connection();
			$conn = $Connection->getConnect();
			$sql = "INSERT INTO students (idStudent,name,phone,email,birthday,gender,able) ";
			$sql .= "VALUES (NULL, '$name', '$phone', '$email', '$birthday','$gender', '1') ";
			$result = mysqli_query($conn, $sql);
			if($result){
				header('Location:'.SUCCESS_STUDENT);
			}else{ 
				header('Location:'.ERROR);
			}
		}

	}
?>