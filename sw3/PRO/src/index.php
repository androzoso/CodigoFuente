<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Módulo Ondas</title>
	<link rel="icon" href="img/pag/icon.png" type="image/x-icon">
	<link rel="stylesheet" href="cake.generic.css">
	<link rel="stylesheet" href="css/bootstrap.css">	
	<link rel="stylesheet" href="css/style.css">
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
							<a href="http://facebook.com" target="blank">
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

		<div class="row main">
			<div class="col-md-3">
				<div class="perfil">
					<h4 class="left">Perfil</h4>
					<a href="#"><img src="img/pag/configu.png" weight='30' height='30' class="right" alt="configuracion"></a>
				</div>
				<div class="detperfil">
					<img src="img/pag/user.png" weight='75' height='85' alt="usuario">
					<h5 class="name right">Nombre y Apellido</h5>
					<a href="#"><h6 class="left">Editar Hoja de Vida</h6></a>
					<a href="#"><h6 class="left">Cambiar mi contraseña</h6></a>
					<a href="#"><h6 class="left">Configurar avisos</h6></a>
				</div>
				<div class="accordion" id="leftMenu">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#">
                                  <i class="icon-home"></i> Comunidad Ondas
                            </a>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseTwo">
                                <i class="icon-th"></i> Organización
                            </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>This is one</li>
                                    <li>This is two</li>
                                    <li>This is Three</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseThree">
                                <i class="icon-th-list"></i>Comunicación
                            </a>
                        </div>
                        <div id="collapseThree" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>This is one</li>
                                    <li>This is two</li>
                                    <li>This is Three</li>
                                </ul>                 
                            </div>
                         </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseFour">
                                <i class="icon-list-alt"></i> Acompañamiento
                            </a>
                        </div>
                        <div id="collapseFour" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>This is one</li>
                                    <li>This is two</li>
                                    <li>This is Three</li>
                                </ul>                 
                            </div>
                         </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseFive">
                                <i class="icon-cog"></i> Sistematización
                            </a>
                        </div>
                        <div id="collapseFive" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>This is one</li>
                                    <li>This is two</li>
                                    <li>This is Three</li>
                                </ul>                 
                            </div>
                         </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseSix">
                                <i class="icon-file"></i> Evaluación
                            </a>
                        </div>
                        <div id="collapseSix" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>This is one</li>
                                    <li>This is two</li>
                                    <li>This is Three</li>
                                </ul>                 
                            </div>
                         </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseSix">
                                <i class="icon-file"></i> Formación
                            </a>
                        </div>
                        <div id="collapseSix" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>This is one</li>
                                    <li>This is two</li>
                                    <li>This is Three</li>
                                </ul>                 
                            </div>
                         </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseSix">
                                <i class="icon-file"></i> Innovación
                            </a>
                        </div>
                        <div id="collapseSix" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>This is one</li>
                                    <li>This is two</li>
                                    <li>This is Three</li>
                                </ul>                 
                            </div>
                         </div>
                    </div>
                </div>
                <div>
                	<img src="img/pag/neurona.png" width='243' class="imgend" alt="neurona">
                </div>
			</div>
			<div class="col-md-7">
				<div class="centroup">
					<a href="#"><h6 class="left"><u>Inicio </u> / </h6></a>
					<a href="#"><h6 class="left"><u>Mi Comunidad </u></h6></a>
				</div>
				<div class="centroa">
					<h4>Servicios de la Comunidad Ondas</h4>
				</div>
				<div class="centrob">
					<img src="img/pag/ondas.png" alt="ondas">
					<img src="img/pag/inv1.png" alt="inv">
				</div>
				<div class="nota">
					<h3>Noticias</h3>
					<img src="img/pag/investigador.png" alt="investigador">
					<h5><b>Convocatorias para niños investigadores</b></h5>
					<p>Se convocan a niños que les guste investigar, para hacer parte de la comunidad ondas, donde se podra interactuar con otros niños investigadores, científicos,etc. </p>
					<a href="#"><h6><u>Leer más...</u></h6></a>
				</div>
			</div>
			<div class="col-md-2">
				<div class="perfil"><h4>Recursos</h4></div>
				<div class="accordion" id="leftMenu">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#">
                                  <i class="icon-home"></i> Convocatorias
                            </a>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseTwo">
                                <i class="icon-th"></i> Proyectos
                            </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>This is one</li>
                                    <li>This is two</li>
                                    <li>This is Three</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseThree">
                                <i class="icon-th-list"></i> Bibliográficos
                            </a>
                        </div>
                        <div id="collapseThree" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>This is one</li>
                                    <li>This is two</li>
                                    <li>This is Three</li>
                                </ul>                 
                            </div>
                         </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseFour">
                                <i class="icon-list-alt"></i> Científicos
                            </a>
                        </div>
                        <div id="collapseFour" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>This is one</li>
                                    <li>This is two</li>
                                    <li>This is Three</li>
                                </ul>                 
                            </div>
                         </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseFive">
                                <i class="icon-cog"></i> Técnicos
                            </a>
                        </div>
                        <div id="collapseFive" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>This is one</li>
                                    <li>This is two</li>
                                    <li>This is Three</li>
                                </ul>                 
                            </div>
                         </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseSix">
                                <i class="icon-file"></i> Herramientas
                            </a>
                        </div>
                        <div id="collapseSix" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>This is one</li>
                                    <li>This is two</li>
                                    <li>This is Three</li>
                                </ul>                 
                            </div>
                         </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseSix">
                                <i class="icon-file"></i> Archivo
                            </a>
                        </div>
                        <div id="collapseSix" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>This is one</li>
                                    <li>This is two</li>
                                    <li>This is Three</li>
                                </ul>                 
                            </div>
                         </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseSix">
                                <i class="icon-file"></i> Recursos de Gestión
                            </a>
                        </div>
                        <div id="collapseSix" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>This is one</li>
                                    <li>This is two</li>
                                    <li>This is Three</li>
                                </ul>                 
                            </div>
                         </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseSix">
                                <i class="icon-file"></i> Recursos Básicos
                            </a>
                        </div>
                        <div id="collapseSix" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>This is one</li>
                                    <li>This is two</li>
                                    <li>This is Three</li>
                                </ul>                 
                            </div>
                         </div>
                    </div>
                </div>
                <div class="piemenu"></div>
			</div>
		</div>
		<div class="foot">
			<h5>Horario de atención al público: lunes a viernes: 8:00 am a 5:00 pm. Correo electrónico: contacto@colciencias.gov.co</h5>
		</div>
	</div>
	
</body>
</html>