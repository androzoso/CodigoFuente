<div class="questions form">
<?php echo $this->Form->create('Question'); ?>
	<fieldset>
		<legend><?php echo __('Generar Preguntas'); ?></legend>
	<?php

		echo $this->Form->label('Categoria '); ?>
		</br>
	<?php
		echo $this->Form->select('area_id',array('1'=>'Ciencias Fisica y Matemáticas',
													'2'=>'Ciencias Biológicas y Cincias Agrícolas','3'=>'Ciencias Químicas',
													'4'=>'Ciencias Médicas de la Salud','5'=>'Ciencias de la Tierra y Medioambiente',
													'6'=>'Ciencias del Espacio','7'=>'Ciencias Sociales',
													'8'=>'Humanidades','9'=>'Ingeniería Tecnológica'));
		
		echo $this->Form->input('nombre');
		echo $this->Form->input('edad');
		echo $this->Form->input('correo', array('type' => 'email'));
		echo $this->Form->input('pregunta');
		echo $this->Form->hidden('respuesta');
		//echo $this->Form->hidden('area_id',array('' =>  ););



	?>
	</fieldset>
<?php echo $this->Form->end(__('Generar Pregunta')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Questions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
	</ul>
</div>
