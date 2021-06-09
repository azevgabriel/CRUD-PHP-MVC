<?php

	/* Importa a Classe de Conexão */
	require_once '../lib/connection.php';
	require_once '../lib/checkData.php';

	/* Classe Modelo para Turmas */
	class classesModel {

		/* Método de Busca as Turmas no Banco de Dados */
		public function getClasses($search) {
			/* Chama o método de conexão */
			$Connection = new Connection();
			$conn = $Connection->getConnect();
			/* Cria uma pesquisa no banco de dados. */
			$sql = "SELECT * FROM classes WHERE ";
			if(isset($search)){
				$sql .= "(level LIKE '%{$search}%' ";
				$sql .= "OR shift LIKE '%{$search}%' ";
				$sql .= "OR series LIKE '%{$search}%' ";
				$sql .= "OR year LIKE '%{$search}%') ";
				$sql .= "AND ableClass = 1 ORDER BY year ASC ";
			}else {
				$sql .= "ableClass = 1  ORDER BY year ASC";
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

		/* Método de Remoção de uma Turma no Banco de Dados */
		public function removeClass($id) {
			$Connection = new Connection();
			$conn = $Connection->getConnect();
			$sql = "UPDATE classes set ableClass = 0 WHERE idClass = $id";
			$result = mysqli_query($conn, $sql);
			if($result){
				header('Location:'.SUCCESS_CLASS);
			}else{ 
				header('Location:'.ERROR.'?codError=4');
			}
		}

		/* Método de Update de uma Turma no Banco de Dados */
		public function updateClass($id,$year,$level,$series,$shift) {
			if(($year != "") && ($level != "") && ($series != "")){
				$Connection = new Connection();
				$conn = $Connection->getConnect();
				$sql = "UPDATE classes set year = '$year', level = '$level', " ;
				$sql .= "series = '$series', shift = '$shift' WHERE idClass = $id ";
				$result = mysqli_query($conn, $sql);
				if($result){
					header('Location:'.SUCCESS_CLASS);
				}else{ 
					header('Location:'.ERROR.'?codError=3');
				}
			} else {
				header('Location:'.ERROR.'?codError=6');
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
				header('Location:'.ERROR.'?codError=1');
			}
		}

		/* Método de Criação de uma Turma no Banco de Dados */
		public function createClass($year,$level,$series,$shift) {
			if(($year != "") && ($level != "") && ($series != "")){
				$Connection = new Connection();
				$conn = $Connection->getConnect();
				$sql = "INSERT INTO classes (idClass,ableClass,year,level,series,shift) ";
				$sql .= "VALUES (NULL, '1','$year', '$level', '$series', '$shift') ";
				$result = mysqli_query($conn, $sql);
				if($result){
					header('Location:'.SUCCESS_CLASS);
				}else{ 
					header('Location:'.ERROR.'?codError=2');
				}
			} else {
				header('Location:'.ERROR.'?codError=7');
			}
		}

	}
?>