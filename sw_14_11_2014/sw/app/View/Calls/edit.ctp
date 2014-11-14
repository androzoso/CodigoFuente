<div class="calls form">
<?php echo $this->Form->create('Call'); ?>
	<fieldset>
		<legend><?php echo __('Edit Call'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Call.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Call.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Calls'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Follows'), array('controller' => 'follows', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Follow'), array('controller' => 'follows', 'action' => 'add')); ?> </li>
	</ul>
</div>
