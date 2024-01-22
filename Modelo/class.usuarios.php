<?php

require_once("class.conexion.php");
class Usuario
{
    public function registrarse($json, $nombre, $apellido, $contrasena, $username, $correo, $rol)
    {
        try {
            $modelo = new Conexion;
            $db = $modelo->get_conexion();
            if ($db) {
                $stmt = $db->prepare("CALL agregar_usuario(?,?,?,?,?,?)");
                $stmt->bindParam(1, $nombre, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->bindParam(2, $apellido, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->bindParam(3, $contrasena, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->bindParam(4, $username, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->bindParam(5, $correo, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->bindParam(6, $rol, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->execute();
                $count = $stmt->rowCount();
                $data = $stmt->fetchAll();
                if(empty($data)){
                    if ($count) {
                        $json['status'] = true;
                        $json['msg'] = "Agregado correctamente";
                    } else {
                        $json['status'] = false;
                        $json['msg'] = 'No se agrego el usuario';
                    }
                }else{
                    $json['status'] = false;
                    $json['msg'] = 'Username ya existente, Cambiarlo';
                }
            } else {
                $json['status'] = false;
                $json['msg'] = 'Error db ';
            }
            echo json_encode($json);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function login($json, $username, $contrasena)
    {
        try {
            $modelo = new Conexion;
            $db = $modelo->get_conexion();
            if ($db) {
                $stmt = $db->prepare("CALL login (?)");
                $stmt->bindParam(1, $username, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->execute();
                $count = $stmt->rowCount();
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if ($count > 0) {
                    $encriptada = $data[0]["contrasena"];
                    if (password_verify($contrasena, $encriptada)) {
                        $json['status'] = true;
                        $json['data'] = $data;
                        session_start();
                        $_SESSION['id'] = $data[0]["id"];
                    } else {
                        $json['status'] = false;
                        $json['msg'] = 'Error en ingreso de sesión, por favor revise sus credenciales';
                    }
                } else {
                    $json['status'] = false;
                    $json['msg'] = 'Error en ingreso de sesión, por favor revise sus credenciales';
                }
            } else {
                $json['status'] = false;
                $json['msg'] = 'No hay conexión ';
            }
            echo json_encode($json);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
