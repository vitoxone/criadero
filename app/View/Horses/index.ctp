<?php echo $this->Html->css(array('bootstrap-editable.css', '/select2/select2.css'), 'stylesheet', array('inline' => false)); ?>
<?php echo $this->Html->script(array('bootstrap-editable.js', '/select2/select2.js'), array('inline' => false)); ?>

<div class="alert-animated ">
           <h3> Caballos del Sistema</h3>
          </div>

  <?php
$this->Html->addCrumb('Caballos');

?>

<div class="btn-group">
  <button type="button" class="btn btn-selected">
   Imágenes
   </button>

   <button type="button" class="btn btn-default">
   	<?php echo $this->Html->link(__('Listado'), array('action' => 'index_details')); ?>
   </button>
</div>


<br />
	<div class="container">
<br />
<br />

	<?php echo $this->element('horses'); ?>

<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>

		</div><!-- /main-container -->
	</div><!-- /wrapper -->


  

  



