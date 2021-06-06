<?php
  require_once 'src/controller/classesController.php';
  require_once 'src/lib/config.php';

  $classesController = new classesController(); 

  if (isset($_GET["searchInput"])){
    $searchInput = urlencode($_GET["searchInput"]);
  }
  if (isset($_GET["idRem"])){
    $idRem = urlencode($_GET["idRem"]);
    $classesController -> remove($idRem);
  }

  include(HEADER_TEMPLATE);
?>
    <article>
      <h1>Turmas</h1>
      <br />
      <form action="listClasses.php" method="get" class="search">
        <input type="text" name="searchInput" />
        <button type="submit"> Pesquisar </button>
      </form>
      <br />
      <?php
        $classesController -> search($searchInput);
      ?>
    </article>
<?php
  include(FOOTER_TEMPLATE);
?>