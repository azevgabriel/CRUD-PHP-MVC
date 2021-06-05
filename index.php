<?php
  // Página Inicial
  require_once 'app/controller/classesController.php'; // Carrega o arquivo classesController.php
  $classesController = new classesController(); // classesController
  $classesController -> index(); // Chama o método index() do controlador
?>