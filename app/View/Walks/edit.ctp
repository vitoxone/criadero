<div class="walks form">
<?php echo $this->Form->create('Walk'); ?>
	<fieldset>
		<legend><?php echo __('Edit Walk'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('date');
		echo $this->Form->input('horse_id');
		echo $this->Form->input('duration');
		echo $this->Form->input('details');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Walk.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Walk.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Walks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Horses'), array('controller' => 'horses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horse'), array('controller' => 'horses', 'action' => 'add')); ?> </li>
	</ul>
</div>
