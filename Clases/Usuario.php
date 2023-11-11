<?php
require_once "Conn.php";
class Usuario
{
    public $username;
    public $password;
    public $nombres;
    public $apellidos;

    public function guardar(String $username, String $password, String $nombres, String $apellidos)
    {
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql2 = "INSERT INTO usuario(username, password, nombres, apellidos) 
        VALUES ($username, $password, $nombres, $apellidos)";
        $resultado = $conexion->exec($sql2);
        $conn->cerrar();

        return $resultado;
    }
}
