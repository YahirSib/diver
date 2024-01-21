<?php
require_once("../Modelo/class.usuarios.php");
$action = $_POST['action'];
$json = array();
$usuario = new Usuario;
//llamados a la db
if($action == "agregar"){
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $contrasena = $_POST["contrasena"];
    $username = $_POST["username"];
    $correo = $_POST["correo"];
    $rol = $_POST["rol"];

    if($rol == "Administrador" || $rol == "Consultor" || $rol == "Secretario"){
        $rol_check = true;
    }else{
        $rol_check = false;
    }

    $nombre_check = preg_match('~^[a-zA-zÁáÉéÍíÓóÚú\s]{3,}$~', $nombre);
    $apellido_check = preg_match('~^[a-zA-zÁáÉéÍíÓóÚú\s]{3,}$~', $apellido);
    $contrasena_check = preg_match('~(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$~', $contrasena);
    $username_check = preg_match('~^([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$~', $username);
    $correo_check = preg_match("~^[^@]+@[^@]+\.[a-zA-Z]{2,}$~", $correo);

    if($nombre_check && $apellido_check && $contrasena_check && $username_check && $correo_check && $rol_check){
        $encriptada = password_hash($contrasena, PASSWORD_BCRYPT);
        $usuario->registrarse($json, $nombre, $apellido, $encriptada, $username, $correo, $rol);
    }else{
        $json['status'] = false;
        $json['msg'] = ' Error al ingresar usuario ';
        echo json_encode($json);
    }

}

if($action == "login"){
    $contra = $_POST["contra"];
    $usuario = $_POST["usuario"];

    $contra_check = preg_match('~(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$~', $contra);
    $usuario_check = preg_match('~^([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$~', $usuario);

    if($contrasena_check && $username_check){
        $encriptada = password_hash($contrasena, PASSWORD_BCRYPT);
        $usuario->registrarse($json, $nombre, $apellido, $encriptada, $username, $correo, $rol);
    }else{
        $json['status'] = false;
        $json['msg'] = ' Error al ingresar usuario ';
        echo json_encode($json);
    }
}

?>