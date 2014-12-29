<div class="roles view">
	
<h2><?php echo __('Rol'); ?></h2>
 <hr align="left" noshade="noshade" size="4" width="75%" />
 <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($role['Role']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nombre'); ?></strong></td>
		<td>
			<?php echo h($role['Role']['nombre']); ?>
			&nbsp;
		</td>
	
	</table><!-- .table table-striped table-bordered -->
			
	
</div>
<div class="actions">
      
	<ul>
	     <!--<li><?php echo $this->Html->link(__('Edit Role'), array('action' => 'edit', $role['Role']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Role'), array('action' => 'delete', $role['Role']['id']), null, __('Are you sure you want to delete # %s?', $role['Role']['id'])); ?> </li> -->
		<li><?php echo $this->Html->link(__('Listar Roles'), array('action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Role'), array('action' => 'add')); ?> </li>-->
	</ul>
</div>
