<?php
  require_once 'src/controller/classesController.php';
  require_once 'src/lib/config.php';
  
  $classesController = new classesController(); 

  if (isset($_POST["year"])){
    $year = $_POST["year"];
    $level = utf8_decode($_POST["level"]);
    $series = $_POST["series"];
    $shift = utf8_decode($_POST["shift"]);
    $classesController -> create($year,$level,$series,$shift);
  }

  include(HEADER_TEMPLATE);
?>
  <article class="form-update">
      <h2>Criação de Turma</h2>
      <form action="registerClass.php" method="post">
          <input 
              type="text"             
              name="year" 
              placeholder="Ex.: 1998"
          />
          <input 
              type="text"            
              name="level" 
              placeholder="Ex.: Ensino Superior"
          >
          <input 
              type="text"               
              name="series" 
              placeholder="Ex.: 7"
          />                                        
          <input 
              type="text"             
              name="shift" 
              placeholder="Ex.: Diurno"
          />                    
          <input type="submit" value="Criar turma"/>                    
      </form>   
  </article>
<?php
  include(FOOTER_TEMPLATE);
?>
  