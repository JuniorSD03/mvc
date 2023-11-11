<?php
 require_once("Layout/header.php");
?>

<h1>Nueva Lesson</h1>
<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input class="form-control" type="text" name="id_ts" placeholder="Ingrese id de TimeSlot"><br>
    <input class="form-control" type="text" name="id_student" placeholder="Ingrese id de Student"><br>
    <input class="btn btn-primary" type="submit" value="Generar Lesson"><br>
</form>
<?php
if(!empty($_POST)){
    $id_ts = $_POST['id_ts'];
    $id_student = $_POST['id_student'];
    include_once "Controladores/LessonControlador.php";
    $lc = new LessonControlador();
    echo $lc->guardar($id_ts, $id_student);
}
require_once("Layout/header.php");