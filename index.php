<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Controller</title>
  <link rel="stylesheet" href="src/styles/global.css">
  <link rel="stylesheet" href="src/styles/pages/home.css">
</head>
<body>
  <div class="container">
    <nav>
      <img src="public/img/logo.svg"/>
      <h1>Controle de Estudantes</h1>
      <div class="nav">
        <button>Cadastar</button>
        <br />
        <button>Listar</button>
      </div>
      <p>
        Crud básico feito por 
        <a href="https://github.com/azevgabriel">Gabriel Azevedo</a>
        ,como objetivo de desenvolver um sistema de controle de alunos de uma escola.
      </p>
    </nav>
    
    <article>
    <?php
      require_once 'src/controller/classesController.php'; // Carrega o arquivo classesController.php
      $classesController = new classesController(); // classesController
      $classesController -> index(); // Chama o método index() do controlador
    ?>
    </article>
  <div>
</body>
</html>