<?php
 require_once("Layout/header.php");
?>

<h1>Eliminar Time Slot</h1>
<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input class="form-control" type="text" name="id" placeholder="Ingrese id de TimeSlot"><br>
    <input class="btn btn-danger" type="submit" value="Eliminar"><br>
</form>
<?php
if(!empty($_POST)){
    $id = $_POST['id'];
    include_once "Controladores/TimeSlotControlador.php";
    $tsc = new TimeSlotControlador();    
    echo $tsc->eliminarConPOO($id);
    require_once("Layout/header.php");
}