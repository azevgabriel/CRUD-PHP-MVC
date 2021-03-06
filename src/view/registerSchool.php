<?php
  /* Importa o Controlador de Escolas e as CONFIGS */
  require_once '../controller/schoolsController.php';
  require_once '../lib/config.php';
  
  $schoolsController = new schoolsController(); 

  /* Condições caso receberem um Método HTTP */
  if (isset($_POST["nameSchool"])){
    $nameSchool = $_POST["nameSchool"];
    $address = $_POST["address"];
    $schoolsController -> create($nameSchool,$address);
  }

  /* Importa o navView.php */
  include(HEADER_VIEW_TEMPLATE);
?>
  <article class="form-update">
      <h2>Cadastro da Escola</h2>
      <form action="registerSchool.php" method="post">
          <div class="form-data">
            <label for="nameSchool">Nome da Escola (Obrigatório)</label>
            <input 
                type="text"             
                name="nameSchool" 
                id="nameSchool"
                placeholder=" Instituto Federal Sul de Minas ..."
            />
            <label for="address">Endereço (Obrigatório)</label>
            <input 
                type="text"            
                name="address" 
                id="address"
                placeholder=" Av. Dirce Pereira Rosa, 300 ..."
            >   
          </div>   
          <div class="form-submit">   
            <input type="submit" value="Cadastrar escola"/>   
          </div>                 
      </form>   
  </article>
<?php
  /* Importa o footer.php */
  include(FOOTER_VIEW_TEMPLATE);
?>
  