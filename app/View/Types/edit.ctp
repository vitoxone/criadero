<div class="types form">
<?php echo $this->Form->create('Type'); ?>
	<fieldset>
		<legend><?php echo __('Edit Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('state');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Type.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Type.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Horses'), array('controller' => 'horses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horse'), array('controller' => 'horses', 'action' => 'add')); ?> </li>
	</ul>
</div>
