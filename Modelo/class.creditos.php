<?php

require_once("class.conexion.php");
class Usuario
{
    public function nCreditoEmitido($json, $n_credito, $tipo, $emitido_a, $correo, $monto, $tipo_doc, $documento, $descripcion, $estado)
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

    function mostrarCreditos($json, $tipo, $mes)
    {
        try{
            $modelo = new Conexion;
            $db = $modelo->get_conexion();
            if($db){
                $stmt = $db->prepare("SELECT * FROM creditos c WHERE c.tipo = ? AND MONTH(c.fecha) = ?");
                $stmt->bindParam(1, $tipo, PDO::PARAM_STR);
                $stmt->bindParam(2, $mes, PDO::PARAM_INT);
                $stmt->execute();
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if($data){
                    $json['data'] = $data;
                }else{
                    $json['status'] = false;
                    $json['msg'] = 'No existen creditos emitidos';
                }
            }else{
                $json['status'] = false;
                $json['msg'] = 'Error conexion con la db';
            }
            echo json_encode($json);
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function buscarUsuario($json, $val)
    {
        try {
            $modelo = new Conexion;
            $db = $modelo->get_conexion();
            if ($db) {
                $stmt = $db->prepare("CALL buscar_usuario(?)");
                $stmt->bindParam(1, $val, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->execute();
                $data = $stmt->fetchAll();
                if($data){
                    $json['status'] = true;
                    $json['data'] = $data;
                }else{
                    $json['status'] = false;
                    $json['msg'] = 'No se encontro usuarios';
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

    public function eliminarUsuario($json, $val)
    {
        try {
            $modelo = new Conexion;
            $db = $modelo->get_conexion();
            if ($db) {
                $stmt = $db->prepare("DELETE FROM usuarios WHERE id = ?");
                $stmt->bindParam(1, $val, PDO::PARAM_INT);
                $stmt->execute();
                $count = $stmt->rowCount();
                if($count > 0){
                    $json['status'] = true;
                    $json['data'] = 'Usuario eliminado con exito';
                }else{
                    $json['status'] = false;
                    $json['msg'] = 'Error al eliminar usuario';
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

    public function detallesUsuario($json, $id)
    {
        try{
            $modelo = new Conexion;
            $db = $modelo->get_conexion();
            if($db){
                $stmt = $db->prepare("SELECT u.nombre, u.apellido, u.correo, u.rol, u.username FROM usuarios u WHERE u.id = ?");
                $stmt->bindParam(1, $id, PDO::PARAM_INT);
                $stmt->execute();
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if($data){
                    $json['status'] = true;
                    $json['data'] = $data[0];
                }else{
                    $json['status'] = false;
                    $json['msg'] = 'No existen Usuarios en el sistema';
                }
            }else{
                $json['status'] = false;
                $json['msg'] = 'Error conexion con la db';
            }
            echo json_encode($json);
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function editar($json, $nombre, $apellido, $username, $id, $correo, $rol)
    {
        try {
            $modelo = new Conexion;
            $db = $modelo->get_conexion();
            if ($db) {
                $stmt = $db->prepare("CALL editar_usuario(?,?,?,?,?,?)");
                $stmt->bindParam(1, $id, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->bindParam(2, $nombre, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->bindParam(3, $apellido, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->bindParam(4, $username, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->bindParam(5, $correo, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->bindParam(6, $rol, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->execute();
                $count = $stmt->rowCount();
                if ($count) {
                    $json['status'] = true;
                    $json['msg'] = "Editado correctamente";
                } else {
                    $json['status'] = false;
                    $json['msg'] = 'No se edito el usuario';
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

}
