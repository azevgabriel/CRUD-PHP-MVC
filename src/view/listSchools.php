<?php
  /* Importa o Controlador de Escolas e as CONFIGS */
  require_once '../controller/schoolsController.php';
  require_once '../lib/config.php';
  
  $schoolsController = new schoolsController();

  /* Condições caso receberem um Método HTTP */
  if (isset($_GET["searchInput"])){
    $searchInput = urlencode($_GET["searchInput"]);
  }
  if (isset($_GET["idRem"])){
    $idRem = urlencode($_GET["idRem"]);
    $schoolsController -> remove($idRem);
  }

  /* Importa o navView.php */
  include(HEADER_VIEW_TEMPLATE);
?>
  <article class="form-search">
    <h1>Escolas</h1>
    <form action="listSchools.php" method="get">
      <input type="text" name="searchInput" />
      <button type="submit">Pesquisar</button>
    </form>
    <?php
      $schoolsController -> search($searchInput);
    ?>
  </article>
<?php
  /* Importa o footer.php */
  include(FOOTER_VIEW_TEMPLATE);
?>