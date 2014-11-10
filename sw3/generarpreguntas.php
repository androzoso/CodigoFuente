
<?php
	///Coneccion a la base de datos MySql
		$con =mysql_connect('localhost','root','123456');
		mysql_select_db("sw",$con) or die("No se pudo conectar a la base de datos");

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Generar Pregunta</title>
	<link rel="icon" href="img/pag/icon.png" type="image/x-icon">
	<link rel="stylesheet" href="cake.generic.css">
	<link rel="stylesheet" href="css/bootstrap.css">	
	<link rel="stylesheet" href="css/stylegp.css">
</head>
<body>
	
	<div class="container">
		<div class="row header">
			<div class="col-md-6"><img src="img/pag/logo.png" alt="logo"></div>
			<div class="col-md-6">
				<div class="right">
					<h6>Bienvenido/a</h6>
					<h6>Nombre del Usuario</h6>
					<h6>Mi ultimo ingreso: dd/mm/aaaa</h6>
					<ul class="menu">
						<li>
							<a href="http://facebook.com/colciencias" target="blank">
								<img src="img/icon/Facebook.png" width='23' height='23' alt="icon facebook" title="Facebook"/>
							</a>
						</li>
					
						<li>
							<a href="http://twitter.com" target="blank">
								<img src="img/icon/Twitter-Bird.png" width='23' height='23' alt="icon twitter" title="Twitter"/>
							</a>
						</li>
					
						<li>
							<a href="http://youtube.com" target="blank">
								<img src="img/icon/Youtube.png" width='23' height='23' alt="icon youtube" title="Youtube"/>
							</a>
						</li>
						<li>
							<a href="http://correo.colciencias.gov.co" target="blank">
								<img src="img/icon/email.png" width='23' height='23' alt="icon rss" title="Rss"/>
							</a>
						</li>
						<li>
							<a href="#" target="blank">
								<img src="img/icon/Rss.png" width='23' height='23' alt="icon rss" title="Rss"/>
							</a>
						</li>
						<li>
							<a href="http://www.colciencias.gov.co/contact" target="blank">
								<img src="img/icon/contacto.png" width='22' height='22' alt="icon contacto" title="Contacto"/>
							</a>
						</li>
						<li>
							<a href="#" target="blank">
								<img src="img/icon/usa.png" width='21' height='21' alt="icon usa" title="Usa"/>
							</a>
						</li>
						<li>
							<a href="#" target="blank">
								<img src="img/icon/colombia.png" width='21' height='21' alt="icon colombia" title="Colombia"/>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-12 barra">
				<form class="navbar-form navbar-right" role="search">
  					<div class="form-group ">
   						<input type="text" class="form-control" placeholder="Busqueda Avanzada">
  					</div>
  					<button type="submit" class="btn btn-default"><img src="img/pag/buscar.png" widht='19' height='19' alt="button">
  					</button>
				</form>
			</div>
		</div>
		<div class="col-md-12 main">
			<div class="centroa">
				<h4>Generar Pregunta</h4>
			</div>
			<div class="centrob">
				<form name="Pregunta" class="form-horizontal" role="form" method="POST" >
					<div class="form-group">
						<label class="col-sm-2 col-sm-offset-1 control-label">Categoria</label>
						<select class="col-sm-8" name="categoria">
							<option value="area">Áreas de Conocimiento</option>
							<option value="matematicas">Ciencias Fisica y Matemáticas</option>
							<option value="biologia">Ciencias Biológicas y Cincias Agrícolas</option>
							<option value="quimica">Ciencias Químicas</option>
							<option value="salud">Ciencias Médicas de la Salud</option>
							<option value="ambiente">Ciencias de la Tierra y Medioambiente</option>
							<option value="espacio">Ciencias del Espacio</option>
							<option value="sociales">Ciencias Sociales</option>
							<option value="humanidades">Humanidades</option>
							<option value="tecnologica">Ingeniería Tecnológica</option>
						</select>
					</div>
					<div class="form-group">
				    	<label for="inputNombre3" class="col-sm-2 col-sm-offset-1 control-label">Nombre Completo</label>
				    	<div class="col-sm-8">
				      		<input type="nombre" class="form-control" id="inputNombre3" placeholder="Nombre Completo" name="nombre">
				    	</div>
					</div>
					<div class="form-group">
				    	<label for="inputEdad3" class="col-sm-2 col-sm-offset-1 control-label">Edad</label>
				    	<div class="col-sm-8">
				      		<input type="edad" class="form-control" id="inputEdad3" placeholder="Edad" name="edad">
				    	</div>
					</div>
					<div class="form-group">
				    	<label for="inputEmail3" class="col-sm-2 col-sm-offset-1 control-label">Correo Electronico</label>
				    	<div class="col-sm-8">
				      		<input type="email" class="form-control" id="inputEmail3" placeholder="Correo Electronico" name="correo">
				    	</div>
					</div>
					<div class="form-group">
				    	<label for="inputPregunta3" class="col-sm-2 col-sm-offset-1 control-label">Pregunta</label>
				    	<div class="col-sm-8">
				      		 <input type="pregunta" class="form-control" id="inputPregunta3" placeholder="Pregunta" name="pregunta">
				    	</div>
					</div>
					<div class="form-group">
				    	<div class="col-sm-offset-3 col-sm-8">
				      		<button type="submit" class="btn btn-default">Generar Pregunta</button>
				      			<?php 
				      				
				      				$res=mysql_query("insert into pregunta values ('".$_POST["categoria"]."','".$_POST["nombre"]."','".$_POST["edad"]."','".$_POST["correo"]."','".$_POST["pregunta"]."')");
									mysql_close($con);
									
					      		?>
				    	</div>
				  	</div>
				</form>

			</div>
			<div class="col-md-12">
						<div class="foot">
							<h5>Horario de atención al público: lunes a viernes: 8:00 am a 5:00 pm. Correo electrónico: contacto@colciencias.gov.co</h5>
						</div>
					</div>
		</div>
	</div>	
</body>
</html>