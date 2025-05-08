<?php


include ('../../config.php');

$id_rol = $_POST['id_rol'];
$rol = $_POST['rol'];

        $sentencia = $pdo->prepare( "UPDATE tb_roles
        SET rol=:rol,
            fyh_actualizacion=:fyh_actualizacion
        WHERE id_rol=:id_rol");
    
    $sentencia->bindParam('rol',  $rol);
    $sentencia->bindParam('fyh_actualizacion',  $fechaHora);
    $sentencia->bindParam('id_rol',  $id_rol);
    if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje'] = "Se actualizo de manera correcta";
        $_SESSION['icono'] = "success";
        header('Location: '.$URL.'/roles/');
    }else {
        //echo  "Error las contraseñas no son iguales";
        session_start();
        $_SESSION['mensaje'] = "Error no se pudo registrar";
        $_SESSION['icono'] = "error";
        header('Location: '.$URL.'/roles/update.php?id='.$id_rol);
    }
    
    
        
   

   

