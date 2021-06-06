<?php

	/* Importa a Classe de Conexão */
	require_once '../lib/connection.php';

	/* Classe Modelo para Turmas */
	/* Local onde é feita a comunição com Banco de Dados */
	class classesModel {

		/* Método de Busca as Turmas no Banco de Dados */
		public function getClasses($search) {
			/* Chama o método de conexão */
			$Connection = new Connection();
			$conn = $Connection->getConnect();
			/* Cria uma pesquisa no banco de dados. */
			$sql = "SELECT * FROM classes WHERE ";
			if(isset($search)){
				$sql .= "level LIKE '%{$search}%' ";
				$sql .= "OR shift LIKE '%{$search}%' ";
				$sql .= "OR series LIKE '%{$search}%' ";
				$sql .= "OR year LIKE '%{$search}%' ";
				$sql .= "AND able = 1";
			}else {
				$sql .= "able = 1";
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
		public function removeClass($id) {
			$Connection = new Connection();
			$conn = $Connection->getConnect();
			$sql = "UPDATE classes set able = 0 WHERE idClass = $id";
			$result = mysqli_query($conn, $sql);
			if($result){
				header('Location:'.SUCCESS_CLASS);
			}else{ 
				header('Location:'.ERROR);
			}
		}

		/* Método de Update de uma Turma no Banco de Dados */
		public function updateClass($id,$year,$level,$series,$shift) {
			$Connection = new Connection();
			$conn = $Connection->getConnect();
			$sql = "UPDATE classes set year = '$year', level = '$level', " ;
			$sql .= "series = '$series', shift = '$shift' WHERE idClass = $id ";
			$result = mysqli_query($conn, $sql);
			if($result){
				header('Location:'.SUCCESS_CLASS);
			}else{ 
				header('Location:'.ERROR);
			}
		}

		/* Método de Busca de uma Turma no Banco de Dados */
		public function getClass($id) {
			$Connection = new Connection();
			$conn = $Connection->getConnect();
			$sql = "SELECT * FROM classes WHERE idClass = $id";
			$result = mysqli_query($conn, $sql); 
			if($result){
				return $result;
			} else{
				header('Location:'.ERROR);
			}
		}

		/* Método de Criação de Turma no Banco de Dados */
		public function createClass($year,$level,$series,$shift) {
			$Connection = new Connection();
			$conn = $Connection->getConnect();
			$sql = "INSERT INTO classes (idClass,year,level,series,shift,able) ";
			$sql .= "VALUES (NULL, '$year', '$level', '$series', '$shift', '1') ";
			$result = mysqli_query($conn, $sql);
			if($result){
				header('Location:'.SUCCESS_CLASS);
			}else{ 
				header('Location:'.ERROR);
			}
		}

	}
?>