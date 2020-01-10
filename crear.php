<?php
    if ($_GET['tabla'] == "producto") {
        include_once "conexion.php";
        if(empty($_POST["cod"]) || empty($_POST["nombre_corto"]) || empty($_POST["PVP"]) || empty($_POST["familia"])) { 
            echo "Faltan datos";
            exit();
        }
        $sentencia = $pdo->prepare("INSERT INTO producto(cod, nombre, nombre_corto, descripcion, PVP, familia) VALUES (?, ?, ?, ? ,? ,?);");
        $resultado = $sentencia->execute([$_POST["cod"], $_POST["nombre"], $_POST["nombre_corto"], $_POST["descripcion"], $_POST["PVP"], $_POST["familia"]]);
        if($resultado === TRUE) echo "Insertado correctamente.";
        else echo "El producto no ha podido ser insertado.";
        $pdo = null;
    }
    else if ($_GET['tabla'] == "familia") {
        include_once "conexion.php";
        if(empty($_POST["cod"]) || empty($_POST["nombre"])) {
            echo "Faltan datos";
            exit();
        }
        $sentencia = $pdo->prepare("INSERT INTO familia(cod, nombre) VALUES (?, ?);");
        $resultado = $sentencia->execute([$_POST["cod"], $_POST["nombre"]]);
        if($resultado === TRUE) echo "Insertado correctamente.";
        else echo "La familia no ha podido ser insertada.";
        $pdo = null;
    }
    else if ($_GET['tabla'] == "stock") {
        include_once "conexion.php";
        if(empty($_POST["producto"]) || empty($_POST["tienda"]) || empty($_POST["unidades"])) {
            echo "Faltan datos";
            exit();
        }
        $sentencia = $pdo->prepare("INSERT INTO stock(producto, tienda, unidades) VALUES (?, ?, ?);");
        $resultado = $sentencia->execute([$_POST["producto"], $_POST["tienda"], $_POST["unidades"]]);
        if($resultado === TRUE) echo "Insertado correctamente.";
        else echo "El stock no ha podido ser insertado.";
        $pdo = null;
    }
    else if ($_GET['tabla'] == "tienda") {
        include_once "conexion.php";
        if(empty($_POST["nombre"])) {
            echo "Faltan datos";
            exit();
        }
        $sentencia = $pdo->prepare("INSERT INTO tienda(nombre, tlf) VALUES (?, ?);");
        $resultado = $sentencia->execute([$_POST["nombre"], $_POST["tlf"]]);
        if($resultado === TRUE) echo "Insertado correctamente.";
        else echo "La tienda no ha podido ser insertada.";
        $pdo = null;
    }
    else {
        echo "Aún no ha elegido tabla.";
    }
?>