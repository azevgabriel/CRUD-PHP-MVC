<?php

    // Classe responsavél por realizar as verificações de dados.
    class checkData {

      public function checkEmail($string){
        $charOne = strrpos($string, '@');
        $charTwo = strrpos($string, '.');
        if(($charOne == -1)||($charTwo == -1)){
          return false;
        }
        return true;
      }

      public function checkDate($string){
        $charOne = strrpos($string, '/');
        if($charOne == -1){
          return false;
        }
        return true;
      }

      public function checkNumber($string){
        if(is_int($string)){
          return TRUE;
        }
        return FALSE;
      }

    }
?>