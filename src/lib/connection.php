<?php
    // Classe responsavél por realizar a conexão.
    class Connection
    {
        public function getConnect(){
            $conn = mysqli_connect("localhost:3306", "root", "", "adm_tassi");
            //Verifica se a conexão falhou.
            if (!$conn) {
                return ("A conexão com o Banco de Dados falhou!");
            }
        }       
    }
?>