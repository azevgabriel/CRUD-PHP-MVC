<?php
  /* Importa o Controlador de Estudantes e as CONFIGS */
  require_once '../controller/studentsController.php';
  require_once '../lib/config.php';
  
  $studentsController = new studentsController(); 

  /* Condições caso receberem um Método HTTP */
  if (isset($_POST["name"])){
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $birthday = $_POST["birthday"];
    $gender = $_POST["gender"];
    $studentsController -> create($name,$phone,$email,$birthday,$gender);
  }

  /* Importa o navView.php */
  include(HEADER_VIEW_TEMPLATE);
?>
  <article class="form-update">
      <h2>Cadastro do Estudante</h2>
      <form action="registerStudent.php" method="post">
          <div class="form-data">
            <label for="name">Nome (Obrigatório)</label>
            <input 
                type="text"             
                name="name" 
                id="name"
                placeholder=" Ion Coimbra Santos"
            />
            <label for="phone">Telefone</label>
            <input 
                type="text"            
                name="phone" 
                id="phone"
                placeholder=" +55 (xx) xxxxx-xxxx"
            >
            <label for="email">E-Mail (Obrigatório)</label>
            <input 
                type="text"               
                name="email"
                id="email"
                placeholder=" exemplo@alunos.edu.com"
            />  
            <label for="birthday">Data de Nascimento</label>                                      
            <input 
                type="text"             
                name="birthday"
                id="birthday" 
                placeholder=" xx/xx/xxxx"
            />   
            <label for="gender">Gênero</label>                                      
            <input 
                type="text"             
                name="gender"
                id="gender" 
                placeholder=" Masculino"
            />  
          </div>  
          <div class="form-submit">                 
            <input type="submit" value="Cadastrar estudante"/> 
          </div>                   
      </form>   
  </article>
<?php
  /* Importa o footer.php */
  include(FOOTER_VIEW_TEMPLATE);
?>
  