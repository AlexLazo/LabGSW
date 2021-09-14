<!DOCTYPE html>
<html>
<head>
	<title>Registrar cliente</title>
</head>
<body>
    <h1>Cliente creado correctamente</h2>
<?php
include "index.php";
    require('conex.php');
    if (!empty($_POST)) {
        if ($_POST["nombre"] == null 
        || $_POST["apellido"] == null 
        || $_POST["direccion"] == null 
        || $_POST["telefono"] == null){ 
        echo "Has dejado campos vacíos. Vuelve <a href='registrar.php'>atrás y rellena el formulario.</a>"; 
    } else { 
        $nombre = mysql_real_escape_string$_POST["nombre"];
        $apellido = mysql_real_escape_string$_POST["apellido"];
        $direccion = mysql_real_escape_string$_POST["direccion"];
        $telefono = mysql_real_escape_string$_POST["telefono"]; 
    
        $result = "INSERT INTO clientes (id_cliente, nombre, apellido, direccion, telefono) VALUES ('', '$nombre', '$apellido', '$direccion', '$telefono')"; 
        $sql = mysql_query($result);
        echo "Gracias por ingresar usuarios.<br />"; 
        }
    ?>
</body>
</html>