<?php
  /* Importa as CONFIGS */
  require_once 'src/lib/config.php';
  
  /* Recebe um Parâmetro na URL para recolher a melhor forma de tratar o erro */
  if (isset($_GET["codError"])){
    $codError = urlencode($_GET["codError"]);
  }

  /* Importa o nav.php */
  include(HEADER_TEMPLATE);
?>
  <article class="error">
    <h1>! Atenção ¡</h1>
    <img src="public/img/error.svg" />
    <p> 
      <?php 
        if ($codError == 1){ 
      ?>
      Falha na consulta do item no banco de dados.
    </p>    
      <?php
        } else if ($codError == 2){ 
      ?>
      Falha no cadastro do item no banco de dados.</br>
      Os campos "ANO" e "PERÍODO" devem conter apenas números.
    </p>    
      <a href="src/view/registerClass.php">Voltar</a>
      <?php
        } else if ($codError == 3){ 
      ?>
      Falha na atualização do item no banco de dados.
      Os campos "ANO" e "PERÍODO" devem conter apenas números.
    </p> 
      <a href="src/view/listClasses.php">Voltar</a>
      <?php
        } else if ($codError == 4){ 
      ?>
      Falha na remoção do item no banco de dados.
    </p>    
      <?php
        } else if ($codError == 5){ 
      ?>
      Falha na conexão no banco de dados.
    </p>    
      <?php
        } else if ($codError == 6){ 
      ?>
      Preencha os campos obrigatórios.
    </p>
    <a href="src/view/listClasses.php">Voltar</a>
      <?php
        } else if ($codError == 7){ 
      ?>
      Preencha os campos obrigatórios.
    </p>
    <a href="src/view/registerClass.php">Voltar</a>
      <?php
        } else if ($codError == 8){ 
      ?>
      Preencha os campos obrigatórios.
    </p>
    <a href="src/view/listSchools.php">Voltar</a>
      <?php
        } else if ($codError == 9){ 
      ?>
      Preencha os campos obrigatórios.
    </p>
    <a href="src/view/registerSchool.php">Voltar</a>
      <?php
        } else if ($codError == 10){ 
      ?>
      Preencha os campos obrigatórios.
    </p>
    <a href="src/view/listStudents.php">Voltar</a>
      <?php
        } else if ($codError == 11){ 
      ?>
      Preencha os campos obrigatórios.
    </p>
    <a href="src/view/registerStudent.php">Voltar</a>
      <?php
        } else if ($codError == 12){ 
      ?>
      Falha no cadastro do item no banco de dados.     
    </p>    
      <a href="src/view/registerSchool.php">Voltar</a>
      <?php
        } else if ($codError == 13){ 
      ?>
      Falha na atualização do item no banco de dados.      
    </p> 
      <a href="src/view/listSchools.php">Voltar</a>
      <?php
        } else if ($codError == 14){ 
      ?>
      Falha no cadastro do item no banco de dados.</br>
    </p>    
      <a href="src/view/registerStudent.php">Voltar</a>
      <?php
        } else if ($codError == 15){ 
      ?>
      Falha na atualização do item no banco de dados.
    </p> 
      <a href="src/view/listStudents.php">Voltar</a>
      <?php
        } else {
          header('Location:'.INDEX);
        }
      ?>
  </article>
<?php
  /* Importa o footer.php */
  include(FOOTER_TEMPLATE);
?>
  