<?php echo $this->Html->css(array('bootstrap-editable.css', '/select2/select2.css'), 'stylesheet', array('inline' => false)); ?>
<?php echo $this->Html->script(array('bootstrap-editable.js', '/select2/select2.js'), array('inline' => false)); ?>

<div class="alert-animated ">
           <h3> Razas</h3>
          </div>
  <?php
$this->Html->addCrumb('Paseos');

?>

<table class="table-striped table-bordered table-condensed table-hover" width= "100%">
	<tr>
		<th><?php echo $this->Paginator->sort('Nombre Raza'); ?></th>
		<th><?php echo $this->Paginator->sort('Descripción'); ?></th>
		<th><?php echo $this->Paginator->sort('Estado'); ?></th>
		<th><?php echo $this->Paginator->sort('Fecha Creación'); ?></th>
		<th><?php echo $this->Paginator->sort('Última Modificación'); ?></th>
		<th class="actions">#</th>
	</tr>
	<?php foreach ($breeds as $breed): ?>
	<tr>
		<td><span class="badge badge-info"><?php echo $this->Html->link(__($breed['Breed']['name']),'/breeds/view/'.$breed['Breed']['id'], array('rel'=>'tooltip', 'data-placement'=>'top', 'title'=>'Ver en detalle y animales pertenecientes a esta raza', 'escape'=>false) ); ?> </span></td>

		<td><span class="brand"><?php echo $breed['Breed']['description']; ?></span></td>
	<!--	<?php if($breed['Breed']['state']){ ?>
				<td><span class="badge badge-success m-left-bg"><?php echo('Activa'); ?></span></td>
			<?php }else{ ?>
		<td><span class="badge badge-danger"><?php echo('Inactiva'); ?></span></td>
			<?php } ?>-->

		<td><?php echo $this->Html->link($this->Html->image('icon_' . $breed['Breed']['state'] . '.png'), array('controller' => 'breeds', 'action' => 'swit', 'state', $breed['Breed']['id']), array('class' => 'status', 'escape' => false)); ?></td>	

		<td><span class="name"><?php echo $breed['Breed']['created']; ?></span></td>
		<td><span class="name"><?php echo $breed['Breed']['modified']; ?></span></td>
		<td class="actions" >
			 <?php echo $this->Html->link(__('Ver'),'/breeds/view/'.$breed['Breed']['id'] ,array('class' => 'btn btn-success')); ?> 
            <?php echo $this->Html->link(__('Editar'),'/breeds/edit/'.$breed['Breed']['id'] ,array('class' => 'btn btn-success')); ?> 
				<?php echo $this->Form->postLink(__('Borrar') , array('action' => 'delete', $breed['Breed']['id']), null, __('Are you sure you want to delete # %s?', $breed['Breed']['id'])); ?>
				</td>
	</tr>
	<?php endforeach; ?>
</table>



<br />
<ul class="pagination pagination-xs m-top-none pull-right">...</ul>
<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>


