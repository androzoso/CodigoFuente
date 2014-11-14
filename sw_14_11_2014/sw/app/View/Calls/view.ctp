<div class="calls view">
<h2><?php echo __('Call'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($call['Call']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($call['Call']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Call'), array('action' => 'edit', $call['Call']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Call'), array('action' => 'delete', $call['Call']['id']), array(), __('Are you sure you want to delete # %s?', $call['Call']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Calls'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Call'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Follows'), array('controller' => 'follows', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Follow'), array('controller' => 'follows', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Follows'); ?></h3>
	<?php if (!empty($call['Follow'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Dificultades'); ?></th>
		<th><?php echo __('Fortalezas'); ?></th>
		<th><?php echo __('Formacion'); ?></th>
		<th><?php echo __('Importancia'); ?></th>
		<th><?php echo __('Viabilidad'); ?></th>
		<th><?php echo __('Preguntas'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Call Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($call['Follow'] as $follow): ?>
		<tr>
			<td><?php echo $follow['id']; ?></td>
			<td><?php echo $follow['dificultades']; ?></td>
			<td><?php echo $follow['fortalezas']; ?></td>
			<td><?php echo $follow['formacion']; ?></td>
			<td><?php echo $follow['importancia']; ?></td>
			<td><?php echo $follow['viabilidad']; ?></td>
			<td><?php echo $follow['preguntas']; ?></td>
			<td><?php echo $follow['fecha']; ?></td>
			<td><?php echo $follow['call_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'follows', 'action' => 'view', $follow['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'follows', 'action' => 'edit', $follow['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'follows', 'action' => 'delete', $follow['id']), array(), __('Are you sure you want to delete # %s?', $follow['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Follow'), array('controller' => 'follows', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
