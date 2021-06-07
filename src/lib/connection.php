<?php

    // Classe responsavél por realizar a conexão com o banco de dados.
    class Connection
    {
        // Método responsavél pela conexão.
        public function getConnect(){
            $conn = mysqli_connect("localhost:3306", "root", "", "adm_tassi");

            /* Verifica se a conexão falhou ou não. */
            if (!$conn) {
                /* Caso a conexão falhar, mostrar o erro para o usuário. */
                header('Location:'.ERROR.'?codError=5');
            } else  {
                return $conn;
            }
        }       
    }
?>