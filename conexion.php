<?php
    $contraseña = "";
    $usuario = "root";
    $nombre = "dwes";
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=' . $nombre, $usuario, $contraseña);
        $pdo->exec("set names utf8");
    }catch(Exception $e){
        echo "Ocurrió algo con la base de datos: " . $e->getMessage();
    }
?>