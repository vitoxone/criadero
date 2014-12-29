<?php echo $this->Html->css(array('bootstrap-editable.css', '/select2/select2.css'), 'stylesheet', array('inline' => false)); ?>
<?php echo $this->Html->script(array('bootstrap-editable.js', '/select2/select2.js'), array('inline' => false)); ?>

	<div class="alert-animated ">
           <h3> Paseos</h3>
          </div>
  <?php
$this->Html->addCrumb('Paseos');

?>

<table class="table-striped table-bordered table-condensed table-hover" width= "100%">
	<tr>
		<th><?php echo $this->Paginator->sort('Fecha'); ?></th>
		<th><?php echo $this->Paginator->sort('Caballo'); ?></th>
		<th><?php echo $this->Paginator->sort('Duración'); ?></th>
		<th><?php echo $this->Paginator->sort('Detalles'); ?></th>
		<th><?php echo $this->Paginator->sort('Fecha Creación'); ?></th>
		<th><?php echo $this->Paginator->sort('Última Modificación'); ?></th>
		<th class="actions">#</th>
	</tr>
	<?php foreach ($walks as $walk): ?>
	<tr>
		<td><span class="badge badge-success m-left-xs"><?php echo $walk['Walk']['date']; ?></span></td>
		<td><span class="brand"><?php echo $walk['Horse']['name']; ?></span></td>
		<td><span class="badge badge-info"><?php echo $walk['Walk']['duration']; ?></span></td>
		<td><span class="name"><?php echo $walk['Walk']['details']; ?></span></td>
		<td><span class="name"><?php echo $walk['Walk']['created']; ?></span></td>
		<td><span class="name"><?php echo $walk['Walk']['modified']; ?></span></td>
		<td class="actions" >
			 <?php echo $this->Html->link(__('Ver'),'/walks/view/'.$walk['Walk']['id'] ,array('class' => 'btn btn-success')); ?> 
            <?php echo $this->Html->link(__('Editar'),'/walks/edit/'.$walk['Walk']['id'] ,array('class' => 'btn btn-success')); ?> 
				<?php echo $this->Form->postLink(__('Borrar') , array('action' => 'delete', $walk['Walk']['id']), null, __('Are you sure you want to delete # %s?', $walk['Walk']['id'])); ?>
				</td>
	</tr>
	<?php endforeach; ?>
</table>



<br />

<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>


