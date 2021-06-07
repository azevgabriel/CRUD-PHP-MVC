<?php
    /* Importa o Controlador de Turmas e as CONFIGS */
    require_once '../controller/classesController.php';
    require_once '../lib/config.php';
    
    $classesController = new classesController(); 
   
    /* Condições caso receberem um Método HTTP */
    if (isset($_POST["year"])){
        $id = $_POST["id"];
        $year = $_POST["year"];
        $level = $_POST["level"];
        $series = $_POST["series"];
        $shift = $_POST["shift"];
        $classesController -> update($id,$year,$level,$series,$shift);
    }
    if (isset($_GET["idUpd"])){
        $idUpd = urlencode($_GET["idUpd"]);
        $resultClass = $classesController -> searchID($idUpd);
        $row = mysqli_fetch_assoc($resultClass);
    }

    /* Importa o navView.php */
    include(HEADER_VIEW_TEMPLATE);
?>
    <article class="form-update">
        <h2>Alteração de Turma</h2>
        <form action="updateClass.php" method="post">
            <label for="year">Ano</label>
            <input 
                type="text" 
                value="<?php echo $row["year"] ?>" 
                name="year" 
                id="year"
            />
            <label for="level">Nível</label>
            <input 
                type="text" 
                value="<?php echo $row["level"] ?>" 
                name="level" 
                id="level"
            >
            <label for="series">Período/Série</label>
            <input 
                type="text" 
                value="<?php echo $row["series"] ?>" 
                name="series" 
                id="series"
            />                                        
            <label for="shift">Turno</label>
            <input 
                type="text" 
                value="<?php echo $row["shift"] ?>" 
                name="shift" 
                id="shift"
            />   
            <input 
                type="hidden" 
                value="<?php echo $row["idClass"] ?>" 
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