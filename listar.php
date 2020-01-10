<?php

    if ($_GET['tabla'] == "producto") {
        include_once "conexion.php";
        $sentencia = $pdo->query("SELECT * FROM producto;");
        $productos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($productos);
        $pdo = null;
    }
    else if ($_GET['tabla'] == "familia") {
        include_once "conexion.php";
        $sentencia = $pdo->query("SELECT * FROM familia;");
        $familias = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($familias);
        $pdo = null;
    }
    else if ($_GET['tabla'] == "stock") {
        include_once "conexion.php";
        $sentencia = $pdo->query("SELECT * FROM stock;");
        $stocks = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($stocks);
        $pdo = null;
    }
    else if ($_GET['tabla'] == "tienda") {
        include_once "conexion.php";
        $sentencia = $pdo->query("SELECT * FROM tienda;");
        $tiendas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($tiendas);
        $pdo = null;
    }
    else {
        echo "Aún no ha elegido tabla.";
    }
    
?>