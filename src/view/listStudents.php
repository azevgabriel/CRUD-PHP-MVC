<?php
  /* Importa o Controlador de Alunos e as CONFIGS */
  require_once '../controller/studentsController.php';
  require_once '../lib/config.php';
  
  $studentsController = new studentsController();

  /* Condições caso receberem um Método HTTP */
  if (isset($_GET["searchInput"])){
    $searchInput = urlencode($_GET["searchInput"]);
  }
  if (isset($_GET["idRem"])){
    $idRem = urlencode($_GET["idRem"]);
    $studentsController -> remove($idRem);
  }

  /* Importa o navView.php */
  include(HEADER_VIEW_TEMPLATE);
?>
  <article class="form-search">
    <h1>Alunos</h1>
    <form action="listStudents.php" method="get">
      <input type="text" name="searchInput" />
      <button type="submit">Pesquisar</button>
    </form>
    <?php
      $studentsController -> search($searchInput);
    ?>
  </article>
<?php
  /* Importa o footer.php */
  include(FOOTER_VIEW_TEMPLATE);
?>