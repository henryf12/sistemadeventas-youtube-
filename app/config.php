<?php
define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','sistemaventa');
 
$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');


try{
    $pdo = new PDO($servidor, username: USUARIO, password: PASSWORD);
    //echo "La conexion a la base de datos fue Exitoso";
}catch (PDOException $ex){
    //print_r($ex);
    echo "Error al conectar a la base de datos";
}

$URL = "http://localhost/SistemaVentas";

date_default_timezone_set("America/Caracas");
$fechaHora = date('Y-m-d h:i:s');

