<?php
require_once("../Modelo/class.usuarios.php");

if(!empty($_POST['action'])){
    $action = $_POST['action'];
}else{
    $action = $_GET['cerrar'];
}

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
    $contrasena = $_POST["contrasena"];
    $username = $_POST["username"];

    $contrasena_check = preg_match('~(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$~', $contrasena);
    $username_check = preg_match('~^([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$~', $username);

    if($contrasena_check && $username_check){
        $usuario->login($json, $username, $contrasena);
    }else{
        $json['status'] = false;
        $json['msg'] = 'Error al iniciar sesion ';
        echo json_encode($json);
    }
}

if($action == "yes"){
    session_start();
    if(!empty($_SESSION['id'])){
        $_SESSION['id'] = NULL;
        unset($_SESSION['id']);
        session_destroy();
        header("Location: ../login.php");
    }
}

if($action == "cantUsuarios"){
    $usuario->cantUsuarios($json);
}

if($action == "mostrar"){
    $num = $_POST['num'];
    if(is_numeric($num)){
        if($num > 0  && $num <= 100){
            $usuario->mostrarUsuarios($json, $num);
        }else{
            $json['status'] = false;
            $json['msg'] = 'Numero despropocional ';
            echo json_encode($json);
        }
    }else{
        $json['status'] = false;
        $json['msg'] = 'No se ingreso un tipo numero ';
        echo json_encode($json);
    }
}

?>