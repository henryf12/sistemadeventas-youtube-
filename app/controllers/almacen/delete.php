<?php

include ('../../config.php');


$id_producto = $_POST['id_producto'];


$sentencia = $pdo->prepare( "DELETE FROM tb_almacen WHERE id_producto=:id_producto ");


$sentencia->bindParam('id_producto',  $id_producto);
if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Se elimino de manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/almacen/');
}else {
    //echo  "Error las contraseñas no son iguales";
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo eliminar";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/almacen/delete.php?id='.$id_producto);
}


