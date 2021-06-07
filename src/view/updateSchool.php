<?php
    /* Importa o Controlador de Turmas e as CONFIGS */
    require_once '../controller/schoolsController.php';
    require_once '../lib/config.php';
    
    $schoolsController = new schoolsController(); 
   
    /* Condições caso receberem um Método HTTP */
    if (isset($_POST["nameSchool"])){
        $id = $_POST["id"];
        $nameSchool = $_POST["nameSchool"];
        $address = $_POST["address"];
        $schoolsController -> update($id,$nameSchool,$address);
    }
    if (isset($_GET["idUpd"])){
        $idUpd = urlencode($_GET["idUpd"]);
        $resultSchool = $schoolsController -> searchID($idUpd);
        $row = mysqli_fetch_assoc($resultSchool);
    }

    /* Importa o navView.php */
    include(HEADER_VIEW_TEMPLATE);
?>
    <article class="form-update">
        <h2>Alteração de Escolas</h2>
        <form action="updateSchool.php" method="post">
            <div class="form-data">
                <label for="nameSchool">Nome da Escola (Obrigatório)</label>
                <input 
                    type="text"             
                    name="nameSchool" 
                    id="nameSchool"
                    value="<?php echo $row["nameSchool"]?>" 
                />
                <label for="address">Endereço (Obrigatório)</label>
                <input 
                    type="text"            
                    name="address" 
                    id="address"
                    value="<?php echo $row["address"] ?>" 
                >  
                <input 
                    type="hidden" 
                    value="<?php echo $row["idSchool"] ?>" 
                    name="id" 
                    id="id"
                />       
            </div>
            <div class="form-submit">                
                <input type="submit" value="Confirmar alteração"/>      
            </div>              
        </form>   
    </article>
<?php
    /* Importa o footer.php */
    include(FOOTER_VIEW_TEMPLATE);
?>