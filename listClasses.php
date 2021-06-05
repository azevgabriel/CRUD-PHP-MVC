<?php
  require_once 'src/controller/classesController.php'; // Carrega o arquivo classesController.php
  require_once 'src/lib/config.php';

  if (isset($_GET["searchInput"])){
    $searchInput = urlencode($_GET["searchInput"]);
  }

  include(HEADER_TEMPLATE);
?>
    <article class="article-list">
      <h1>Turmas</h1>
      <br />
      <form action="listClasses.php" method="get" class="search">
        <input type="text" name="searchInput" />
        <button type="submit"> Pesquisar </button>
      </form>
      <br />
      <?php 
        $classesController = new classesController(); // classesController
        $classesController -> Search($searchInput); // Chama o método index() do controlador
      ?>
    </article>
<?php
  include(FOOTER_TEMPLATE);
?>