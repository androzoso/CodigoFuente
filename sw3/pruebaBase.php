<html>
	<head>
		<title>
			Conectar a una BD Mysql
		</title>
	</head>
	<body>
		<?php
		///Coneccion a la base de datos MySql
			$con =mysql_connect('localhost','root','123456');
			mysql_select_db("sw",$con) or die("No se pudo conectar a la base de datos");
		?>
		
		<table border ="1">
			<tr>
				<td colspan="5">MySQL y PHP</td>
			</tr>
			<tr>
				<td>Categoria</td>
				<td>Nombre</td>
				<td>Edad</td>
				<td>Correo</td>
				<td>Pregunta</td>
			</tr>
			<?php
			$result=mysql_query(" select * from pregunta ");
			while ($row=mysql_fetch_array($result)) { ?>
				<tr>
					<td><?php echo $row["categoria"]; ?></td>
					<td><?php echo $row["nombre"]; ?></td>
					<td><?php echo $row["edad"]; ?></td>
					<td><?php echo $row["correo"]; ?></td>
					<td><?php echo $row["pregunta"]; ?></td>


				</tr>


			<?php
			}
			?>
		</table>

	</body>
</html>