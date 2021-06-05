<?php
    class Connection
    {
        public function getConnect(){
            $conn = mysqli_connect("localhost:3306", "root", "", "adm_tassi");
            if (!$conn) {
                return ("A conexão com o Banco de Dados falhou!");
            }
        }       
    }
?>