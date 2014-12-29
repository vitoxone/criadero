<?php
$this->Html->addCrumb('Razas', array('controller' => 'breeds', 'action' => 'index'));
$this->Html->addCrumb('Agregar Raza');
?>

	<h2>Agregar Raza</h2>
						<hr align="left" noshade="noshade" size="8" width="100%" />


<div class="panel panel-body">
<div class="col-lg-9">
<?php echo $this->Form->create('Breed', array('class' => 'form-vertical')); ?>
<br />


<div class="form-group">
                <label class="col-lg-3 control-label">Nombre</label>
                <div class="input-group">
                  <?php echo $this->Form->input('name', array('class' => 'form-control', 'label'=>'', 'type' => 'text')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->

<div class="form-group">
                <label class="col-lg-3 control-label">Descripción</label>
                <div class="input-group">
                  <?php echo $this->Form->input('description', array('class' => 'form-control', 'label'=>'', 'type' => 'textarea')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->



<?php $options = array(
    array('name' => 'Inactiva', 'value' => '0')
 );
 ?>
<div class="form-group">
                <label class="col-lg-3 control-label">Estado</label>
                <div class="input-group">
                  <?php echo $this->Form->input('state', array(
                    'class' => 'form-control',
                    'label' => '',
                    'type' => 'select',
                    'options' => $options,
                    'empty' => array('name' => 'Activa', 'value' => '1'),
                )); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->

<br />

<br />
</div>
</div>

<div class="panel panel-default panel-footer">
<?php echo $this->Form->button('Guardar', array('class' => 'btn btn-primary','label'=>'Guardar'));?>
<?php echo $this->Form->end(); ?>
</div>

