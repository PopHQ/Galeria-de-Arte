<?php
    $server = "localhost";
    $user = "miguel";
    $pass = "nabo";
    $db = "mascotas";
try{
    $dbh = new PDO("mysql:host = $servername, db = mascotas", $user, $pass);

    $dbh-> setAttribute(PDO::ATTR_ERRORMODE, PDO::ERRORMODE_EXPECTION);

    if($conexion->connect_errno){
        die("Conexion fallida ".$conexion->connect_errno);
    }else{
        echo "conectado";
    }
}catch(PDOExpection $e){
    echo "Connection failed: " . $e->getMessage();
}
    

?> 