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
          <a href="register.php">Estudante</a>
          <a href="register.php">Turma</a>
          <a href="register.php">Escola</a>
        </div>
      </div>
      <br/>
      <div class="dropdown">
        <button class="dropbtn">Listar</button>
        <div class="dropdown-content">
          <a href="listClasses.php">Estudantes</a>
          <a href="listClasses.php">Turmas</a>
          <a href="listClasses.php">Escolas</a>
        </div>
      </div>
      </div>
      <p>
        Crud básico feito por 
        <a href="https://github.com/azevgabriel">Gabriel Azevedo</a>
        ,como objetivo de desenvolver um sistema de controle de alunos de uma escola.
      </p>
    </nav>