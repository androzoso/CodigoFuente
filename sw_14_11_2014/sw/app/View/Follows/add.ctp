<div class="follows form">
<?php echo $this->Form->create('Follow'); ?>
	<fieldset>
		<legend><?php echo __('Add Follow'); ?></legend>
	<?php
		echo $this->Form->input('dificultades');
		echo $this->Form->input('fortalezas');
		echo $this->Form->input('formacion');
		echo $this->Form->input('importancia');
		echo $this->Form->input('viabilidad');
		echo $this->Form->input('preguntas');
		echo $this->Form->input('fecha');
		echo $this->Form->input('call_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Follows'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Calls'), array('controller' => 'calls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Call'), array('controller' => 'calls', 'action' => 'add')); ?> </li>
	</ul>
</div>
