<?php


include ('../../config.php');

$nombre_categoria = $_GET['nombre_categoria'];
$id_categoria = $_GET['id_categoria'];

        $sentencia = $pdo->prepare( "UPDATE tb_categorias
        SET nombre_categoria=:nombre_categoria,
            fyh_actualizacion=:fyh_actualizacion
        WHERE id_categoria=:id_categoria");
    
    $sentencia->bindParam('nombre_categoria',  $nombre_categoria);
    $sentencia->bindParam('fyh_actualizacion',  $fechaHora);
    $sentencia->bindParam('id_categoria',  $id_categoria);
    if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje'] = "Se actualizo de manera correcta";
        $_SESSION['icono'] = "success";
        //header('Location: '.$URL.'/roles/');
        ?>
<script>
    location.href = "<?php echo $URL;?>/categorias";
</script>
<?php
    }else {
        //echo  "Error las contraseñas no son iguales";
        session_start();
        $_SESSION['mensaje'] = "Error no se pudo registrar";
        $_SESSION['icono'] = "error";
       // header('Location: '.$URL.'/roles/update.php?id='.$id_rol);
       ?>
<script>
    location.href = "<?php echo $URL;?>/categorias";
</script>
<?php

    }