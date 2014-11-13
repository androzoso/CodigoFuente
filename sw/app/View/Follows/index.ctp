<div class="follows index">
	<h2><?php echo __('Follows'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('dificultades'); ?></th>
			<th><?php echo $this->Paginator->sort('fortalezas'); ?></th>
			<th><?php echo $this->Paginator->sort('formacion'); ?></th>
			<th><?php echo $this->Paginator->sort('importancia'); ?></th>
			<th><?php echo $this->Paginator->sort('viabilidad'); ?></th>
			<th><?php echo $this->Paginator->sort('preguntas'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('call_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($follows as $follow): ?>
	<tr>
		<td><?php echo h($follow['Follow']['id']); ?>&nbsp;</td>
		<td><?php echo h($follow['Follow']['dificultades']); ?>&nbsp;</td>
		<td><?php echo h($follow['Follow']['fortalezas']); ?>&nbsp;</td>
		<td><?php echo h($follow['Follow']['formacion']); ?>&nbsp;</td>
		<td><?php echo h($follow['Follow']['importancia']); ?>&nbsp;</td>
		<td><?php echo h($follow['Follow']['viabilidad']); ?>&nbsp;</td>
		<td><?php echo h($follow['Follow']['preguntas']); ?>&nbsp;</td>
		<td><?php echo h($follow['Follow']['fecha']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($follow['Call']['id'], array('controller' => 'calls', 'action' => 'view', $follow['Call']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $follow['Follow']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $follow['Follow']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $follow['Follow']['id']), array(), __('Are you sure you want to delete # %s?', $follow['Follow']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Follow'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Calls'), array('controller' => 'calls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Call'), array('controller' => 'calls', 'action' => 'add')); ?> </li>
	</ul>
</div>
