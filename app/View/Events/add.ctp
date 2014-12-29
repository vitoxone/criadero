 <?php
$this->Html->addCrumb('Usuarios', array('controller' => 'users', 'action' => 'index'));
$this->Html->addCrumb('Nuevo Usuario');
?>

  <h2>Evento</h2>


<div class="panel panel-body">
<div class="col-lg-9">
<?php echo $this->Form->create('Event', array('class' => 'form-vertical')); ?>
<br />
<div class="form-group">
                <label class="col-lg-3 control-label">Fecha</label>
                <div class="col-lg-3  input-group">
                  <?php echo $this->Form->input('date', array( 'label' => '', 
                'dateFormat' => 'DMY', 
                'minYear' => date('Y') - 70,
                'maxYear' => date('Y') )); ?>

          <!-- <span class="input-group-addon"><i class="fa fa-calendar"></i></span>-->
      </div>
              </div><!-- /form-group -->
<div class="form-group">
                <label class="col-lg-3 control-label">Ovario Derecho</label>
                <div class="input-group">
                  <?php echo $this->Form->input('der', array('class' => 'form-control', 'label'=>'', 'style'=>'width: 200px')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->

<br />
<div class="form-group">
                <label class="col-lg-3 control-label">Ovario Izquierdo</label>
                <div class="input-group">
                  <?php echo $this->Form->input('izq', array('class' => 'form-control', 'label'=>'', 'style'=>'width: 200px')); ?>
                  
                </div><!-- /.col -->
              </div><!--
              /form-group -->
<div class="form-group">
                <label class="col-lg-3 control-label">Descripción</label>
                <div class="input-group">
                  <?php echo $this->Form->input('details', array('class' => 'form-control', 'label'=>'', 'style'=>'width: 400px')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->   

<div class="panel panel-default panel-footer text-center" >
<?php echo $this->Form->button('Guardar', array('class' => 'btn btn-primary','label'=>'Guardar'));?>
<?php echo $this->Form->end(); ?>
</div>

