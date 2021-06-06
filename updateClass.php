<?php
    require_once 'src/controller/classesController.php';
    require_once 'src/lib/config.php';
    
    $classesController = new classesController(); 
   
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

    include(HEADER_TEMPLATE);
?>
    <article class="form-update">
        <h2>Alteração de Turma</h2>
        <form action="updateClass.php" method="post">
            <label for="year">Ano</label>
            <input 
                type="text" 
                value="<?php echo utf8_encode($row["year"]) ?>" 
                name="year" 
                id="year"
            />
            <label for="level">Nível</label>
            <input 
                type="text" 
                value="<?php echo utf8_encode($row["level"]) ?>" 
                name="level" 
                id="level"
            >
            <label for="series">Período/Série</label>
            <input 
                type="text" 
                value="<?php echo utf8_encode($row["series"]) ?>" 
                name="series" 
                id="series"
            />                                        
            <label for="shift">Turno</label>
            <input 
                type="text" 
                value="<?php echo utf8_encode($row["shift"]) ?>" 
                name="shift" 
                id="shift"
            />   
            <input 
                type="hidden" 
                value="<?php echo utf8_encode($row["idClass"]) ?>" 
                name="id" 
                id="id"
            />                      
            <input type="submit" value="Confirmar alteração"/>                    
        </form>   
    </article>
<?php
    include(FOOTER_TEMPLATE);
?>