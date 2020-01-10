<?php
    if ($_GET['tabla'] == "producto") {
        include_once "conexion.php";
        if(empty($_POST["cod"]) || empty($_POST["nombre_corto"]) || empty($_POST["PVP"]) || empty($_POST["familia"])) { 
            echo "Faltan datos";
            exit();
        }
        $sentencia = $pdo->prepare("UPDATE producto SET nombre = ?, nombre_corto = ?, descripcion = ?, PVP = ?, familia = ? WHERE cod = ?;");
        $resultado = $sentencia->execute([$_POST["nombre"], $_POST["nombre_corto"], $_POST["descripcion"], $_POST["PVP"], $_POST["familia"], $_POST["cod"]]);
        if($resultado === TRUE) echo "Modificado correctamente.";
        else echo "El producto no ha podido ser modificado.";
        $pdo = null;
    }
    else if ($_GET['tabla'] == "familia") {
        include_once "conexion.php";
        if(empty($_POST["cod"]) || empty($_POST["nombre"])) { 
            echo "Faltan datos";
            exit();
        }
        $sentencia = $pdo->prepare("UPDATE familia SET nombre = ? WHERE cod = ?");
        $resultado = $sentencia->execute([$_POST["nombre"], $_POST["cod"]]);
        if($resultado === TRUE) echo "Modificado correctamente.";
        else echo "La familia no ha podido ser modificada.";
        $pdo = null;
    }
    else if ($_GET['tabla'] == "stock") {
        include_once "conexion.php";
        if(empty($_POST["producto"]) || empty($_POST["tienda"]) || empty($_POST["unidades"])) {
            echo "Faltan datos"; 
            exit();
        }
        $sentencia = $pdo->prepare("UPDATE stock SET unidades = ? WHERE producto = ? AND tienda = ?");
        $resultado = $sentencia->execute([$_POST["unidades"], $_POST["producto"], $_POST["tienda"]]);
        if($resultado === TRUE) echo "Modificado correctamente.";
        else echo "El stock no ha podido ser modificado.";
        $pdo = null;
    }
    else if ($_GET['tabla'] == "tienda") {
        include_once "conexion.php";
        if(empty($_POST["cod"]) || empty($_POST["nombre"])) { 
            echo "Faltan datos";
            exit();
        }
        $sentencia = $pdo->prepare("UPDATE tienda SET nombre = ?, tlf = ? WHERE cod = ?");
        $resultado = $sentencia->execute([$_POST["nombre"], $_POST["tlf"], $_POST["cod"]]);
        if($resultado === TRUE) echo "Modificado correctamente.";
        else echo "La tienda no ha podido ser modificada.";
        $pdo = null;
    }
    else {
        echo "Aún no ha elegido tabla.";
    }
?>