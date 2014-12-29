<div class="horses form">
<?php echo $this->Form->create('Horse'); ?>
	<fieldset>
		<legend><?php echo __('Edit Horse'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('number');
		echo $this->Form->input('birthdate');
		echo $this->Form->input('gender_id');
		echo $this->Form->input('breed_id');
		echo $this->Form->input('type_id');
		echo $this->Form->input('color_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('description');
		echo $this->Form->input('image');
		echo $this->Form->input('lft');
		echo $this->Form->input('rght');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Horse.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Horse.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Horses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Genders'), array('controller' => 'genders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gender'), array('controller' => 'genders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Breeds'), array('controller' => 'breeds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Breed'), array('controller' => 'breeds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Colors'), array('controller' => 'colors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Color'), array('controller' => 'colors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
	</ul>
</div>
