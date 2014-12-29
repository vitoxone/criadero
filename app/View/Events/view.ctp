<div class="events view">
<h2><?php echo __('Event'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($event['Event']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($event['Event']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eventype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($event['Eventype']['name'], array('controller' => 'eventypes', 'action' => 'view', $event['Eventype']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Horse'); ?></dt>
		<dd>
			<?php echo $this->Html->link($event['Horse']['name'], array('controller' => 'horses', 'action' => 'view', $event['Horse']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detail'); ?></dt>
		<dd>
			<?php echo h($event['Event']['detail']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event'), array('action' => 'edit', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Event'), array('action' => 'delete', $event['Event']['id']), null, __('Are you sure you want to delete # %s?', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventypes'), array('controller' => 'eventypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eventype'), array('controller' => 'eventypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horses'), array('controller' => 'horses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horse'), array('controller' => 'horses', 'action' => 'add')); ?> </li>
	</ul>
</div>
