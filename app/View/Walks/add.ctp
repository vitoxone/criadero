
  <script>
  $(function() {
   // jQuery.noConflict();
   //$( '#datepicker' ).datepicker();
    // jQuery('#init-date').datepicker();
    $( '#init-date' ).datepicker( "option", "dateFormat", "yy-mm-dd" );
  // $( "#datepicker" ).datepicker( "option", "showAnim", "slide" );
  });
  </script>



<?php
$this->Html->addCrumb('Paseos', array('controller' => 'walks', 'action' => 'index'));
$this->Html->addCrumb('Agregar Paseo');
?>

	<h2>Agregar Paseo</h2>
						<hr align="left" noshade="noshade" size="8" width="100%" />


<div class="panel panel-body">
<div class="col-lg-9">
<?php echo $this->Form->create('Walk', array('class' => 'form-vertical')); ?>
<br />
<div class="form-group">
                <label class="col-lg-3 control-label">Fecha Paseo</label>
      <div class="col-lg-3  input-group">
          <?php echo $this->Form->input('date', array( 'label' => '', 
                'dateFormat' => 'DMY', 
                'minYear' => date('Y') - 70,
                'maxYear' => date('Y') )); ?>
       <!--   <span class="input-group-addon"><i class="fa fa-calendar"></i></span>-->
      </div>
</div>
<div class="form-group">
                <label class="col-lg-3 control-label">Caballo</label>
                <div class="input-group">
                  <?php echo $this->Form->input('horse_id', array('class' => 'form-control', 'label'=>'', 'type' => 'select')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->

<br />


<?php $options = array(
    array('name' => '< 30 min', 'value' => '< 30 min'),
    array('name' => '30 min > 1 hora', 'value' => '30 min > 1 hora'),
    array('name' => '1 hora > 2 hora', 'value' => '1 hora > 2 hora'),
    array('name' => '> 2 hrs', 'value' => '> 2 hrs'),
 );
 ?>
<div class="form-group">
                <label class="col-lg-3 control-label">Tiempo Duración</label>
                <div class="input-group">
                  <?php echo $this->Form->input('duration', array(
                    'class' => 'form-control',
                    'label' => '',
                    'type' => 'select',
                    'options' => $options,
                    'empty' => ''
                )); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->

<br />

<br />
<div class="form-group">
                <label class="col-lg-3 control-label">Detalles del Paseo</label>
                <div class="col-lg-8">
                  <?php echo $this->Form->input('details', array('class' => 'form-control', 'label'=>'')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->

</div>
</div>

<div class="panel panel-default panel-footer">
<?php echo $this->Form->button('Guardar', array('class' => 'btn btn-primary','label'=>'Guardar'));?>
<?php echo $this->Form->end(); ?>
</div>

