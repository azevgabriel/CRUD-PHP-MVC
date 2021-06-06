<?php
    /* Importa o Controlador de Alunos e as CONFIGS */
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
        $studentsController -> update($id,$name,$phone,$email,$birthday,$gender);
    }
    if (isset($_GET["idUpd"])){
        $idUpd = urlencode($_GET["idUpd"]);
        $resultStudent = $studentsController -> searchID($idUpd);
        $row = mysqli_fetch_assoc($resultStudent);
    }

    /* Importa o navView.php */
    include(HEADER_VIEW_TEMPLATE);
?>
    <article class="form-update">
        <h2>Alteração de Alunos</h2>
        <form action="updateStudent.php" method="post">
            <label for="name">Nome</label>
            <input 
                type="text"             
                name="name" 
                id="name"
                value="<?php echo utf8_encode($row["name"]) ?>" 
            />
            <label for="phone">Telefone</label>
            <input 
                type="text"            
                name="phone" 
                id="phone"
                value="<?php echo utf8_encode($row["phone"]) ?>" 
            >
            <label for="email">E-Mail</label>
            <input 
                type="text"               
                name="email"
                id="email"
                value="<?php echo utf8_encode($row["email"]) ?>" 
            />  
            <label for="birthday">Data de Nascimento</label>                                      
            <input 
                type="text"             
                name="birthday"
                id="birthday" 
                value="<?php echo utf8_encode($row["birthday"]) ?>" 
            />   
            <label for="gender">Gênero</label>                                      
            <input 
                type="text"             
                name="gender"
                id="gender" 
                value="<?php echo utf8_encode($row["gender"]) ?>" 
            />   
            <input 
                type="hidden" 
                value="<?php echo utf8_encode($row["idStudent"]) ?>" 
                name="id" 
                id="id"
            />                      
            <input type="submit" value="Confirmar alteração"/>                    
        </form>   
    </article>
<?php
    /* Importa o footer.php */
    include(FOOTER_VIEW_TEMPLATE);
?>