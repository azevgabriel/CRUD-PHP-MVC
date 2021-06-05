<?php
  require_once 'src/controller/classesController.php'; // Carrega o arquivo classesController.php
  require_once 'config.php';
  include(HEADER_TEMPLATE);
?>
    <article>
      <?php 
        $classesController = new classesController(); // classesController
        $classesController -> index(); // Chama o método index() do controlador
      ?>
    </article>
<?php
  include(FOOTER_TEMPLATE);
?>