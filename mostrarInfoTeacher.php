<?php
 require_once("Layout/header.php");
?>


<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input class="form-control" type="text" name="id" placeholder="Ingrese id Teacher"><br>
    <input class="btn btn-primary" type="submit" value="Buscar"><br>
</form>
<?php
if(!empty($_POST)){
    $id = $_POST['id'];
    include_once "Controladores/TeacherControlador.php";
    $tc = new TeacherControlador();    
    $resultado = $tc->getTeacherPorId($id);
    if($resultado!=null){ 
    ?>
        <table class="table">
            <tr>
                <th>Teacher</th>
                <th>Languaje</th>
                <th>Start At</th>
                <th>Type</th>
            </tr>
            <?php
                foreach($resultado as $item){
                    echo "<tr>
                            <td>".$item["name"]."</td>
                            <td>".$item["language"]."</td>
                            <td>".$item["starts_at"]."</td>
                            <td>".$item["type"]."</td>
                         </tr>";
                }
            ?>
        </table> 
    <?php
    }
    else{
        echo "<div class='alert alert-danger' role='alert'>No hay resultados para la ID </div>";
    }
}
    require_once("Layout/footer.php");