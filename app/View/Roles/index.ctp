<div class="roles index">
	<h2><?php echo __('Roles'); ?></h2>
<table class="table-striped table-bordered table-condensed table-hover" width= "100%">
	<tr>
		<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
		<th><?php echo $this->Paginator->sort('Estado'); ?></th>
		<th class="actions">#</th>
	</tr>
	<?php foreach ($roles as $role): ?>
	<tr>
		<td><span class="category"><?php echo $role['Role']['name']; ?></span></td>
			<td><?php echo $this->Html->link($this->Html->image('icon_' . $role['Role']['active'] . '.png'), array('controller' => 'roles', 'action' => 'swit', 'active', $role['Role']['id']), array('class' => 'status', 'escape' => false)); ?></td>
		<td class="actions" >
			 <?php echo $this->Html->link(__('Ver'),'/roles/view/'.$role['Role']['id'] ,array('class' => 'btn btn-success')); ?> 
            <?php echo $this->Html->link(__('Editar'),'/roles/edit/'.$role['Role']['id'] ,array('class' => 'btn btn-success')); ?> 
				<?php echo $this->Form->postLink(__('Borrar') , array('action' => 'delete', $role['Role']['id']), null, __('Are you sure you want to delete # %s?', $role['Role']['id'])); ?>
				</td>
	</tr>
	<?php endforeach; ?>
</table>

<?php echo $this->element('pagination'); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New role'), array('action' => 'add')); ?></li>
	</ul>
</div>
