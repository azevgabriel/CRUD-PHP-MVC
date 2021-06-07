<?php
  /* Importa as CONFIGS */
  require_once 'src/lib/config.php';
  
  if (isset($_GET["codError"])){
    $codError = urlencode($_GET["codError"]);
  }

  /* Importa o nav.php */
  include(HEADER_TEMPLATE);
?>
  <article class="error">
    <h1>Atenção</h1>
    <p> 
      <?php 
        if ($codError == 1){ 
      ?>
      Falha na consulta do item no banco de dados.
      <?php
        } else if ($codError == 2){ 
      ?>
      Falha no cadastro do item no banco de dados.
      <?php
        } else if ($codError == 3){ 
      ?>
      Falha na atualização do item no banco de dados.
      <?php
        } else if ($codError == 4){ 
      ?>
      Falha na remoção do item no banco de dados.
      <?php
        } else if ($codError == 5){ 
      ?>
      Falha na conexão no banco de dados.
      <?php
        } else if ($codError == 6){ 
      ?>
      Preencha os campos obrigatórios !!!
      <?php
        } else {
          header('Location:'.INDEX);
        }
      ?>
      
    </p>
  </article>
<?php
  /* Importa o footer.php */
  include(FOOTER_TEMPLATE);
?>
  