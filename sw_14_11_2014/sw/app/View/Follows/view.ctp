<div class="follows view">
<h2><?php echo __('Follow'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($follow['Follow']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dificultades'); ?></dt>
		<dd>
			<?php echo h($follow['Follow']['dificultades']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fortalezas'); ?></dt>
		<dd>
			<?php echo h($follow['Follow']['fortalezas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Formacion'); ?></dt>
		<dd>
			<?php echo h($follow['Follow']['formacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Importancia'); ?></dt>
		<dd>
			<?php echo h($follow['Follow']['importancia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Viabilidad'); ?></dt>
		<dd>
			<?php echo h($follow['Follow']['viabilidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Preguntas'); ?></dt>
		<dd>
			<?php echo h($follow['Follow']['preguntas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($follow['Follow']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Call'); ?></dt>
		<dd>
			<?php echo $this->Html->link($follow['Call']['id'], array('controller' => 'calls', 'action' => 'view', $follow['Call']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Follow'), array('action' => 'edit', $follow['Follow']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Follow'), array('action' => 'delete', $follow['Follow']['id']), array(), __('Are you sure you want to delete # %s?', $follow['Follow']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Follows'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Follow'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calls'), array('controller' => 'calls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Call'), array('controller' => 'calls', 'action' => 'add')); ?> </li>
	</ul>
</div>
