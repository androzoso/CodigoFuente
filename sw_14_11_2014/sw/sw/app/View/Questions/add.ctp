<div class="questions form">
<?php echo $this->Form->create('Question'); ?>
	<fieldset>
		<legend>
			<div class="col-md-10 centroaa">
			<?php echo __('Generar Pregunta'); ?>
			</div>
		</legend>
	<div class="col-md-10 centrobb" >
	<?php
		echo $this->Form->input('categoria');
		echo $this->Form->input('nombre');
		echo $this->Form->input('edad');
		echo $this->Form->input('correo');
		echo $this->Form->input('pregunta');
		echo $this->Form->input('respuesta');
		echo $this->Form->input('area_id');
	?>
	</div>
	</fieldset>
<?php echo $this->Form->end(__('Preguntar')); ?>
</div>
<div class="actions col-md-3">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Questions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
	</ul>
</div>
