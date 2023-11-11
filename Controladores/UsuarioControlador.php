<?php
require_once("Clases/Usuario.php");

class UsuarioControlador
{
    public function guardar(String $username, String $password, String $password2, String $nombres, String $apellidos)
    {
        $respuesta = "";
        if (trim($username) == "") {
            $respuesta .= "Complete el campo Usuario</br>";
        }

        if (trim($password) == "") {
            $respuesta .= "Complete el campo password</br>";
        }
        if (trim($password2) == "") {
            $respuesta .= "Complete el campo password2</br>";
        }

        if (trim($nombres) == "") {
            $respuesta .= "Complete el campo nombres</br>";
        }
        if (trim($apellidos) == "") {
            $respuesta .= "Complete el campo apellidos</br>";
        }

        if (trim($password) > 0 && trim($password2) < 8) {
            $respuesta .= "campo contraseña debe tener almenos 8 caracteres</br>";
        }
        if (trim($password2) > 0 && trim($password2) < 8) {
            $respuesta .= "campo verificar contraseña debe tener almenos 8 caracteres</br>";
        }

        if ($password != $password2) {
            $respuesta .= "Contraseñas no coinciden";
        }

        /* $patronContraseña = '#^[A-Z][a-<]+[.]$#';

        if (preg_match($patronContraseña, $password) != 1) {
            $respuesta .= "Contraseñas no cumple con las limitaciones";
        } */

        $usuarios = new Usuario();
        if ($usuarios->guardar($username, $password, $nombres, $apellidos) > 0) {
            $respuesta = "Usuario registrado";
        } else {
            $respuesta = "Error al registrar";
        }
        return $respuesta;
    }
}
