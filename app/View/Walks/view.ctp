<div class="walks view">
<h2><?php echo __('Walk'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($walk['Walk']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($walk['Walk']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Horse'); ?></dt>
		<dd>
			<?php echo $this->Html->link($walk['Horse']['name'], array('controller' => 'horses', 'action' => 'view', $walk['Horse']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Duration'); ?></dt>
		<dd>
			<?php echo h($walk['Walk']['duration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($walk['Walk']['details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($walk['Walk']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($walk['Walk']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Walk'), array('action' => 'edit', $walk['Walk']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Walk'), array('action' => 'delete', $walk['Walk']['id']), null, __('Are you sure you want to delete # %s?', $walk['Walk']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Walks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Walk'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horses'), array('controller' => 'horses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horse'), array('controller' => 'horses', 'action' => 'add')); ?> </li>
	</ul>
</div>
