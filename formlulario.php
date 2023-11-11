<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <input type="text" name="username" placeholder="Ingrese nombre de usuario" require><br>
    <input type="password" name="password" placeholder="Ingrese contraseña"><br>
    <input type="password" name="password2" placeholder="Verifique contraseña"><br>
    <input type="text" name="nombres" placeholder="Ingrese sus nombres"><br>
    <input type="text" name="apellidos" placeholder="Igrese sus apellidos"><br>
    <input type="submit" value="Guardar">
</form>

<?php
if (!empty($_POST)) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];

    require_once("Controladores/UsuarioControlador.php");
    $uc = new UsuarioControlador();
    echo $uc->guardar($username, $password, $password2, $nombres, $apellidos);
}
?>