<?php

include ('../../config.php');


$id_proveedor = $_GET['id_proveedor'];


$sentencia = $pdo->prepare( "DELETE FROM tb_proveedores WHERE id_proveedor=:id_proveedor ");


$sentencia->bindParam('id_proveedor',  $id_proveedor);

if ($sentencia->execute()) {
    session_start();
    //echo "se registro correctamente";
    $_SESSION['mensaje'] = "Se Elimino de manera correcta";
    $_SESSION['icono'] = "success";
    //header('Location: '.$URL.'/categorias');
    ?>
    <script>
        location.href = "<?php echo $URL;?>/proveedores";
    </script>
    <?php
    }else {
    //echo  "Error las contraseñas no son iguales";
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo eliminar el proveedor";
    $_SESSION['icono'] = "error";
    //header('Location: '.$URL.'/categorias');
    ?>
    <script>
        location.href = "<?php echo $URL;?>/proveedores";
    </script>
    <?php
    }

