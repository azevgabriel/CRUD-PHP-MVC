<?php
  require_once 'src/controller/classesController.php'; // Carrega o arquivo classesController.php
  require_once 'src/lib/config.php';
  include(HEADER_TEMPLATE);
?>
    <article class="article-list">
      <h1>Turmas</h1>
      <br />
      <form>
        <input type="text" />
        <select name="cars" id="cars">
          <option value="year">Ano</option>
          <option value="level">Nível</option>
          <option value="series">Período/Série</option>
          <option value="shift">Turno</option>
        </select>
        <button type="submit"> Pesquisar </button>
      </form>
      <br />
      <?php 
        $classesController = new classesController(); // classesController
        $classesController -> index(); // Chama o método index() do controlador
      ?>
    </article>
<?php
  include(FOOTER_TEMPLATE);
?>