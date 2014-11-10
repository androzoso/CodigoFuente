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
	<title>Diligenciar Datos</title>
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
				<h4>Diligenciar Datos</h4>
			</div>
			<div class="col-md-5 centrod">
				<form name="datos1" class="form-horizontal" role="form" method="POST">
					<div class="form-group">
						<label class="col-sm-3 control-label">Usuario</label>
						<select class="col-sm-8">
							<option value="niño">Niño</option>
							<option value="maestro">Maestro</option>
							<option value="cientifico">Científico</option>
						</select>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Tipo de Documento</label>
						<select class="col-sm-8">
							<option value="tarjeta">Tarjeta de Identidad</option>
							<option value="cedula">Cedula</option>
							<option value="pasaporte">Pasaporte</option>
						</select>
					</div>
					<div class="form-group">
				    	<label for="inputDoc3" class="col-sm-3 control-label">Número del Documento</label>
				    	<div class="col-sm-8">
				      		<input type="doc" class="form-control" id="inputDoc3" placeholder="Número del Documento" name="numero">
				    	</div>
					</div>
					<div class="form-group">
				    	<div class="col-sm-offset-2">
				      		<button type="submit" class="btn btn-default">Verificar Datos</button>
				      		<?php 
				      				$query=mysql_query("select * from niño");
				      				$aquery=mysql_fetch_array($query);
				      				
										?> <br> <?php
				      					echo $aquery['documento'];
				      				
				      				mysql_close($con);
					      	?>
				    	</div>
				  	</div>
				</form>
			</div>
			<div class="col-md-5 centrod">
				<form name="datos2" class="form-horizontal" role="form" method="POST">
					<div class="form-group">
				    	<label for="inputUsuario3" class="col-sm-3 control-label">Usuario</label>
				    	<div class="col-sm-8">
				      		<input type="usuario" class="form-control" id="inputUsuario3" placeholder="Usuario">
				    	</div>
					</div>
					<div class="form-group">
				    	<label for="inputContraseña3" class="col-sm-3 control-label">Contraseña</label>
				    	<div class="col-sm-8">
				      		<input type="contraseña" class="form-control" id="inputContraseña3" placeholder="Contraseña">
				    	</div>
					</div>
					<div class="form-group">
				    	<label for="inputConContraseña3" class="col-sm-3 control-label">Confirmar Contraseña</label>
				    	<div class="col-sm-8">
				      		<input type="concontraseña" class="form-control" id="inputConContraseña3" placeholder="Confirmar Contraseña">
				    	</div>
					</div>
					<div class="form-group">
				    	<div class="col-sm-offset-2">
				      		<button type="submit" class="btn btn-default">Guardar</button>
				      	</div>
				  	</div>
				</form>
			</div>
			<div class="col-md-12 centroe">
				<form name= "datos3"class="form-horizontal" role="form" method="POST">
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Tipo de Documento</label>
						<select class="col-sm-8">
							<option value="tarjeta">Tarjeta de Identidad</option>
							<option value="cedula">Cedula</option>
							<option value="pasaporte">Pasaporte</option>
						</select>
					</div>
					<div class="form-group">
				    	<label for="inputDoc3" class="col-sm-2 col-sm-offset-1 control-label">Número del Documento</label>
				    	<div class="col-sm-8">
				      		<input type="doc" class="form-control" id="inputDoc3" placeholder="Número del Documento">
				    	</div>
					</div>
					<div class="form-group">
				    	<label for="inputNombres3" class="col-sm-2 col-sm-offset-1 control-label">Nombres</label>
				    	<div class="col-sm-8">
				      		<input type="nombres" class="form-control" id="inputNombres3" placeholder="Nombres">
				    	</div>
					</div>
					<div class="form-group">
				    	<label for="inputApellido3" class="col-sm-2 col-sm-offset-1 control-label">Apellidos</label>
				    	<div class="col-sm-8">
				      		<input type="apellido" class="form-control" id="inputApellido3" placeholder="Apellidos">
				    	</div>
					</div>
					<div class="form-group">
				    	<label for="inputEmail3" class="col-sm-2 col-sm-offset-1 control-label">Correo Electronico</label>
				    	<div class="col-sm-8">
				      		<input type="email" class="form-control" id="inputEmail3" placeholder="Correo Electronico">
				    	</div>
					</div>
					<div class="form-group">
				    	<label for="inputfn3" class="col-sm-2 col-sm-offset-1 control-label">Fecha Nacimiento</label>
				    	<div class="col-sm-8">
				      		<input type="fn" class="form-control" id="inputFN3" placeholder="Fecha Nacimiento">
				    	</div>
					</div>
					<div class="form-group">
				    	<label for="inputpdc3" class="col-sm-2 col-sm-offset-1 control-label">País, Departamento y Ciudad</label>
				    	<div class="col-sm-8">
				      		<input type="pdc" class="form-control" id="inputPDC3" placeholder="País, Departamento y Ciudad">
				    	</div>
					</div>
					<div class="form-group">
				    	<label for="inputie3" class="col-sm-2 col-sm-offset-1 control-label">Institución Educativa</label>
				    	<div class="col-sm-8">
				      		<input type="ie" class="form-control" id="inputIE3" placeholder="Institución Educativa">
				    	</div>
					</div>
					<div class="form-group">
				    	<div class="col-sm-offset-3 col-sm-8">
				      		<button type="submit" class="btn btn-default">Hacer Registro</button>
				    	</div>
				  	</div>
				</form>
			</div>
		</div>
		<div class="col-md-12">
			<div class="foot">
				<h5>Horario de atención al público: lunes a viernes: 8:00 am a 5:00 pm. Correo electrónico: contacto@colciencias.gov.co</h5>
			</div>
		</div>
	</div>	
</body>
</html>