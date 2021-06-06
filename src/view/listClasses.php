<?php
  require_once '../controller/classesController.php';
  require_once '../lib/config.php';
  
  $classesController = new classesController();

  if (isset($_GET["searchInput"])){
    $searchInput = urlencode($_GET["searchInput"]);
  }
  if (isset($_GET["idRem"])){
    $idRem = urlencode($_GET["idRem"]);
    $classesController -> remove($idRem);
  }

  include(HEADER_VIEW_TEMPLATE);
?>
    <article class="form-search">
      <h1>Turmas</h1>
      <form action="listClasses.php" method="get">
        <input type="text" name="searchInput" />
        <button type="submit"> Pesquisar </button>
      </form>
      <?php
        $classesController -> search($searchInput);
      ?>
    </article>
<?php
  include(FOOTER_VIEW_TEMPLATE);
?>