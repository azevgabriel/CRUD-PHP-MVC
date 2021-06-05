<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tassi Transporte</title>
</head>
<body>
  <?php
    // Página Inicial
    require_once 'src/controller/classesController.php'; // Carrega o arquivo classesController.php
    $classesController = new classesController(); // classesController
    $classesController -> index(); // Chama o método index() do controlador
  ?>
</body>
</html>