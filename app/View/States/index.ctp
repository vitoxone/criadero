<?php echo $this->Html->css(array('bootstrap-editable.css', '/select2/select2.css'), 'stylesheet', array('inline' => false)); ?>
<?php echo $this->Html->script(array('bootstrap-editable.js', '/select2/select2.js'), array('inline' => false)); ?>

	<div class="alert-animated ">
           <h3> Estados Animales</h3>
          </div>
  <?php
$this->Html->addCrumb('Estados');

?>

<table class="table-striped table-bordered table-condensed table-hover" width= "100%">
	<tr>
		<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
		<th><?php echo $this->Paginator->sort('descripción'); ?></th>
		<th><?php echo $this->Paginator->sort('Estado'); ?></th>
		<th><?php echo $this->Paginator->sort('Fecha Creación'); ?></th>
		<th><?php echo $this->Paginator->sort('Última Modificación'); ?></th>
		<th class="actions">#</th>
	</tr>
	<?php foreach ($states as $state): ?>
	<tr>
		<td><span class="badge badge-info"><?php echo $state['State']['name']; ?></span></td>
		<td><span class="brand"><?php echo $state['State']['description']; ?></span></td>
		<td><?php echo $this->Html->link($this->Html->image('icon_' . $state['State']['state'] . '.png'), array('controller' => 'states', 'action' => 'swit', 'state', $state['State']['id']), array('class' => 'status', 'escape' => false)); ?></td>	
		<td><span class="name"><?php echo $state['State']['created']; ?></span></td>
		<td><span class="name"><?php echo $state['State']['modified']; ?></span></td>
		<td class="actions" >
			 <?php echo $this->Html->link(__('Ver'),'/states/view/'.$state['State']['id'] ,array('class' => 'btn btn-success')); ?> 
            <?php echo $this->Html->link(__('Editar'),'/states/edit/'.$state['State']['id'] ,array('class' => 'btn btn-success')); ?> 
				<?php echo $this->Form->postLink(__('Borrar') , array('action' => 'delete', $state['State']['id']), null, __('Are you sure you want to delete # %s?', $state['State']['id'])); ?>
				</td>
	</tr>
	<?php endforeach; ?>
</table>



<br />

<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>


