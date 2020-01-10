<?php
    if ($_GET['tabla'] == "producto") {
        include_once "conexion.php";
        if(!isset($_POST["cod"])) exit();
        $sentencia = $pdo->prepare("DELETE FROM producto WHERE cod = ?;");
        $resultado = $sentencia->execute([$_POST["cod"]]);
        if($resultado === TRUE) echo "Eliminado correctamente.";
        else echo "El producto no ha podido ser eliminado.";
        $pdo = null;
    }
    else if ($_GET['tabla'] == "familia") {
        include_once "conexion.php";
        if(!isset($_POST["cod"])) exit();
        $sentencia = $pdo->prepare("DELETE FROM familia WHERE cod = ?;");
        $resultado = $sentencia->execute([$_POST["cod"]]);
        if($resultado === TRUE) echo "Eliminado correctamente.";
        else echo "La familia no ha podido ser eliminada.";
        $pdo = null;
    }
    else if ($_GET['tabla'] == "stock") {
        include_once "conexion.php";
        if(!isset($_POST["producto"])) exit();
        $sentencia = $pdo->prepare("DELETE FROM stock WHERE producto = ? AND tienda = ?;");
        $resultado = $sentencia->execute([$_POST["producto"], $_POST["tienda"]]);
        if($resultado === TRUE) echo "Eliminado correctamente.";
        else echo "El stock no ha podido ser eliminado.";
        $pdo = null;
    }
    else if ($_GET['tabla'] == "tienda") {
        include_once "conexion.php";
        if(!isset($_POST["cod"])) exit();
        $sentencia = $pdo->prepare("DELETE FROM tienda WHERE cod = ?;");
        $resultado = $sentencia->execute([$_POST["cod"]]);
        if($resultado === TRUE) echo "Eliminado correctamente.";
        else echo "La tienda no ha podido ser eliminada.";
        $pdo = null;
    }
    else {
        echo "Aún no ha elegido tabla.";
    }
?>