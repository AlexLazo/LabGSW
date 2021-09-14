<!DOCTYPE html>
<html>
<head>
	<title>Mostrar datos</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>Id_cliente</td>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Eirección</td>
			<td>Teléfono</td>	
		</tr>

		<?php
        include "conex.php";
        include "cliente.php";
		$sql="SELECT * from clientes";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id_cliente'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellido'] ?></td>
			<td><?php echo $mostrar['direccion'] ?></td>
			<td><?php echo $mostrar['telefono'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>