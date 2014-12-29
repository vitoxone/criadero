<?php
$this->Html->addCrumb('Estados', array('controller' => 'states', 'action' => 'index'));
$this->Html->addCrumb('Agregar Raza');
?>
	<h2>Nuevo Mensaje</h2>
						<hr align="left" noshade="noshade" size="8" width="100%" />


<div class="panel panel-body">
<div class="col-lg-9">
<?php echo $this->Form->create('Message', array('class' => 'form-vertical')); ?>
<br />


<div class="form-group">
                <label class="col-lg-3 control-label">Destinatario</label>
                <div class="col-lg-9 input-group">
                  <?php echo $this->Form->input('receiver_id', array('class' => 'form-control', 'label'=>'')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->

<div class="form-group">
                <label class="col-lg-3 control-label">Título</label>
                <div class="col-lg-9 input-group">
                  <?php echo $this->Form->input('title', array('class' => 'form-control', 'label'=>'', 'type' => 'text')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->


<div class="form-group">
                <label class="col-lg-3 control-label">Mensaje</label>
                <div class="col-lg-9 input-group">
                  <?php echo $this->Form->input('text', array('class' => 'form-control', 'label'=>'', 'type' => 'textarea')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->

<br />

<br />
</div>
</div>

<div class="panel panel-default panel-footer text-center" >
<?php echo $this->Form->button('Guardar', array('class' => 'btn btn-primary','label'=>'Enviar'));?>
<?php echo $this->Form->end(); ?>
</div>

