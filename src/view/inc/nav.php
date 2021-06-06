<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Controller</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Source+Sans+Pro:wght@400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="src/styles/global.css">
  <link rel="stylesheet" href="src/styles/pages/home.css">
</head>
<body>
  <div class="container">
    <nav>
      <a href="index.php">
        <img src="public/img/logo.svg" />
      </a> 
      <div class="nav-header">
        <img src="public/img/cap.svg" />
        <h1>Controle de Estudantes</h1>
      </div>
      <div class="nav-body">
        <div class="dropdown">
          <button class="dropbtn">Cadastar</button>
          <div class="dropdown-content">
            <a href="src/view/registerClass.php">Estudante</a>
            <a href="src/view/registerClass.php">Turma</a>
            <a href="src/view/registerClass.php">Escola</a>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">Listar</button>
          <div class="dropdown-content">
            <a href="src/view/listClasses.php">Estudantes</a>
            <a href="src/view/listClasses.php">Turmas</a>
            <a href="src/view/listClasses.php">Escolas</a>
          </div>
        </div>
      </div>
      <p>
        CRUD básico feito por 
        <a href="https://github.com/azevgabriel">Gabriel Azevedo</a>
        , com o objetivo de desenvolver um sistema de controle de alunos de uma escola.
      </p>
    </nav>