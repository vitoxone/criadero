<div class="types view">
<h2><?php echo __('Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($type['Type']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($type['Type']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Type'), array('action' => 'edit', $type['Type']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Type'), array('action' => 'delete', $type['Type']['id']), null, __('Are you sure you want to delete # %s?', $type['Type']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horses'), array('controller' => 'horses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horse'), array('controller' => 'horses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Horses'); ?></h3>
	<?php if (!empty($type['Horse'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th><?php echo __('Birthdate'); ?></th>
		<th><?php echo __('Gender Id'); ?></th>
		<th><?php echo __('Breed Id'); ?></th>
		<th><?php echo __('Type Id'); ?></th>
		<th><?php echo __('Color Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($type['Horse'] as $horse): ?>
		<tr>
			<td><?php echo $horse['id']; ?></td>
			<td><?php echo $horse['name']; ?></td>
			<td><?php echo $horse['number']; ?></td>
			<td><?php echo $horse['birthdate']; ?></td>
			<td><?php echo $horse['gender_id']; ?></td>
			<td><?php echo $horse['breed_id']; ?></td>
			<td><?php echo $horse['type_id']; ?></td>
			<td><?php echo $horse['color_id']; ?></td>
			<td><?php echo $horse['state_id']; ?></td>
			<td><?php echo $horse['description']; ?></td>
			<td><?php echo $horse['image']; ?></td>
			<td><?php echo $horse['lft']; ?></td>
			<td><?php echo $horse['rght']; ?></td>
			<td><?php echo $horse['created']; ?></td>
			<td><?php echo $horse['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'horses', 'action' => 'view', $horse['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'horses', 'action' => 'edit', $horse['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'horses', 'action' => 'delete', $horse['id']), null, __('Are you sure you want to delete # %s?', $horse['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Horse'), array('controller' => 'horses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
