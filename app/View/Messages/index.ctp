<?php echo $this->Html->css(array('bootstrap-editable.css', '/select2/select2.css'), 'stylesheet', array('inline' => false)); ?>
<?php echo $this->Html->script(array('bootstrap-editable.js', '/select2/select2.js'), array('inline' => false)); ?>

<div class="alert-animated ">
           <h3> Mensajes Recibidos</h3>
          </div>
  <?php
$this->Html->addCrumb('Mensajes Recibidos');

?>
<div class="center-form-search">

<table class="table table-striped" width= "100%">
	<thead>
									<tr>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
									</tr>
								</thead>
	<?php foreach ($messages as $message): ?>
	<tbody>
	<tr>
		<td><?php if($message['Message']['view']==0){ ?>  <span class="badge badge-warning"> Nuevo</span><?php } ?></td>
		
		<td><?php echo $this->Html->link($message['Sender']['name'].'   -   '.$message['Message']['title'], array('controller' => 'messages', 'action' => 'view', $message['Message']['id'])); ?></td>
	
		<td><span class="name"><?php echo $message['Message']['created']; ?></span></td>
		<td class="actions" >
			 <?php echo $this->Html->link(__('Ver'),'/messages/view/'.$message['Message']['id']); ?> 
				<?php echo $this->Form->postLink(__('Borrar') , array('action' => 'delete', $message['Message']['id']), null, __('Are you sure you want to delete # %s?', $message['Message']['id'])); ?>
				</td>
	</tr>
	<?php endforeach; ?>
</tbody>
</table>



<br />
<ul class="pagination pagination-xs m-top-none pull-right">...</ul>
<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>

	</div><!-- /panel -->


