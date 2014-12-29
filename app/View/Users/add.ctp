 <?php
$this->Html->addCrumb('Usuarios', array('controller' => 'users', 'action' => 'index'));
$this->Html->addCrumb('Nuevo Usuario');
?>

  <h2>Agregar Usuario</h2>


<div class="panel panel-body">
<div class="col-lg-9">
<?php echo $this->Form->create('User', array('class' => 'form-vertical', 'type'=>'file')); ?>
<br />
<div class="form-group">
                <label class="col-lg-3 control-label">Nombre</label>
      <div class="col-lg-3  input-group">
          <?php echo $this->Form->input('name', array('class' => 'form-control', 'label'=>'', 'type' => 'text', 'style'=>'width: 200px')); ?>
      </div>
</div>
<div class="form-group">
                <label class="col-lg-3 control-label">Rut</label>
                <div class="input-group">
                  <?php echo $this->Form->input('rut', array('class' => 'form-control', 'label'=>'', 'type' => 'text', 'style'=>'width: 200px')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->

<br />
<div class="form-group">
                <label class="col-lg-3 control-label">Username</label>
                <div class="input-group">
                  <?php echo $this->Form->input('username', array('class' => 'form-control', 'label'=>'', 'type' => 'text', 'style'=>'width: 200px')); ?>
                  
                </div><!-- /.col -->
              </div><!--
              /form-group -->

  <div class="form-group">
                <label class="col-lg-3 control-label">Password</label>
                <div class="input-group">
                  <?php echo $this->Form->input('password', array('class' => 'form-control', 'label'=>'', 'type' => 'password', 'style'=>'width: 200px')); ?>
                  
                </div><!-- /.col -->
              </div>

<br />
<div class="form-group">
                <label class="col-lg-3 control-label">Email</label>
                <div class="input-group">
                  <?php echo $this->Form->input('email', array('class' => 'form-control', 'label'=>'', 'style'=>'width: 200px')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->

<div class="form-group">
                <label class="col-lg-3 control-label">Rol</label>
                <div class="input-group">
                  <?php echo $this->Form->input('role_id', array('class' => 'form-control', 'label'=>'', 'style'=>'width: 200px')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->  

<div class="form-group">
                <label class="col-lg-3 control-label">Dirección</label>
                <div class="input-group">
                  <?php echo $this->Form->input('address', array('class' => 'form-control', 'label'=>'', 'style'=>'width: 400px')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->   


<div class="form-group">
                <label class="col-lg-3 control-label">Imagen</label>
                <div class="input-group">
                  <?php echo $this->Form->input('image', array('class' => 'form-control', 'label'=>'', 'style'=>'width: 200px', 'type'=>'file')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->  

<?php $options = array(
    array('name' => 'Inactivo', 'value' => '0')
 );
 ?>
<div class="form-group">
                <label class="col-lg-3 control-label">Estado</label>
                <div class="input-group">
                  <?php echo $this->Form->input('active', array(
                    'class' => 'form-control',
                    'label' => '',
                    'type' => 'select',
                    'options' => $options,
                    'empty' => array('name' => 'Activo', 'value' => '1'),
                )); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->                                 
 </div>
</div>             

<div class="panel panel-default panel-footer text-center" >
<?php echo $this->Form->button('Guardar', array('class' => 'btn btn-primary','label'=>'Guardar'));?>
<?php echo $this->Form->end(); ?>
</div>

