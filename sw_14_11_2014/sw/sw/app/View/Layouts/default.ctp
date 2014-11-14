<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('cake_dev', 'Módulo Ondas');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('Generar Pregunta'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.css');
		echo $this->Html->css('style.css');
		echo $this->Html->css('stylegp.css');		
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div>
		<div class="container row header">
			<div class="col-md-6">
				<?php
					echo '<img src="../img/logo.png" />';
				?>
    		</div>
    		<div class="col-md-6 right">
    			<h6>Bienvenido/a</h6>
				<h6>Nombre del Usuario</h6>
				<h6>Mi ultimo ingreso: dd/mm/aaaa</h6>
    			<ul class="menu right">
					<li>
						<a href="http://facebook.com/colciencias" target="blank">
							<img src="../img/Facebook.png" width='23' height='23' alt="icon facebook" title="Facebook"/>
						</a>
					</li>
				
					<li>
						<a href="http://twitter.com" target="blank">
							<img src="../img/Twitter-Bird.png" width='23' height='23' alt="icon twitter" title="Twitter"/>
						</a>
					</li>
				
					<li>
						<a href="http://youtube.com" target="blank">
							<img src="../img/Youtube.png" width='23' height='23' alt="icon youtube" title="Youtube"/>
						</a>
					</li>
					<li>
						<a href="http://correo.colciencias.gov.co" target="blank">
							<img src="../img/email.png" width='23' height='23' alt="icon rss" title="Rss"/>
						</a>
					</li>
					<li>
						<a href="#" target="blank">
							<img src="../img/Rss.png" width='23' height='23' alt="icon rss" title="Rss"/>
						</a>
					</li>
					<li>
						<a href="http://www.colciencias.gov.co/contact" target="blank">
							<img src="../img/contacto.png" width='22' height='22' alt="icon contacto" title="Contacto"/>
						</a>
					</li>
					<li>
						<a href="#" target="blank">
							<img src="../img/usa.png" width='21' height='21' alt="icon usa" title="Usa"/>
						</a>
					</li>
					<li>
						<a href="#" target="blank">
							<img src="../img/colombia.png" width='21' height='21' alt="icon colombia" title="Colombia"/>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-12 barra">
				<form class="navbar-form navbar-right" role="search">
  					<div class="form-group ">
   						<input type="text" class="form-control" placeholder="Busqueda Avanzada">
  					</div>
  					<button type="submit" class="btn btn-default"><img src="../img/buscar.png" widht='19' height='19' alt="button">
  					</button>
				</form>
			</div>
		</div>
		</div>
	</div>

	<div id="container">
		<!--<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>-->
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<!--<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>-->
</body>
</html>
