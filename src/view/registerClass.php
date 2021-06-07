<?php
  /* Importa o Controlador de Turmas e as CONFIGS */
  require_once '../controller/classesController.php';
  require_once '../lib/config.php';
  
  $classesController = new classesController(); 

  /* Condições caso receberem um Método HTTP */
  if (isset($_POST["year"])){
    $year = $_POST["year"];
    $level = $_POST["level"];
    $series = $_POST["series"];
    $shift = $_POST["shift"];
    $classesController -> create($year,$level,$series,$shift);
  }

  /* Importa o navView.php */
  include(HEADER_VIEW_TEMPLATE);
?>
  <article class="form-update">
      <h2>Criação de Turma</h2>
      <form action="registerClass.php" method="post">
          <div class="form-data">
            <label for="year">Ano (Obrigatório)</label>
            <input 
                type="text"             
                name="year" 
                id="year"
                placeholder=" 1998"
            />
            <label for="level">Nível (Obrigatório)</label>
            <input 
                type="text"            
                name="level" 
                id="level"
                placeholder=" Ensino Superior"
            >
            <label for="series">Período/Série (Obrigatório)</label>
            <input 
                type="text"               
                name="series"
                id="series"
                placeholder=" 7"
            />  
            <label for="shift">Turno</label>                                      
            <input 
                type="text"             
                name="shift"
                id="shift" 
                placeholder=" Integral"
            />      
          </div>  
          <div class="form-submit">            
            <input type="submit" value="Criar turma"/> 
          </div>                   
      </form>   
  </article>
<?php
  /* Importa o footer.php */
  include(FOOTER_VIEW_TEMPLATE);
?>
  