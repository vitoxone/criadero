  <head>
    <meta charset="utf-8">
    <title>Endless Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

        <!-- Bootstrap core CSS -->
    <link href="/clinica/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Font Awesome-->
	<link href="/clinica/css/font-awesome.min.css" rel="stylesheet">

	<link href="/clinica/css/morris.css" rel="stylesheet"/>	
	<!-- Datatable -->
	<link href="/clinica/css/jquery.dataTables_themeroller.css" rel="stylesheet">
	
	<!-- Endless -->
	<link href="/clinica/css/endless.min.css" rel="stylesheet">
	

  </head>

<?php
$this->Html->addCrumb($horse['Breed']['name'], array('controller' => 'breeds', 'action' => 'view', $horse['Breed']['id']));
$this->Html->addCrumb($horse['Type']['name'], array('controller' => 'types', 'action' => 'view', $horse['Type']['id']));
$this->Html->addCrumb($horse['Horse']['name']);
?>

			

		<td><?php echo $this->Html->link('Line', array('controller' => 'horses', 'action' => 'spline')); ?></td>
			<td><?php echo $this->Html->link('Line', array('plugin' => 'high_charts', 'controller' => 'multi_series_demo', 'action' => 'line')); ?></td>

<div id="panel">			


<div class="main-header clearfix">
	<div class="page-title">
		
	</div><!-- /page-title -->
				
	<ul class="page-stats">
		<li>
			<div class="value">
			   	<span>Ficha N°: </span>
			    	<h4><?php echo $horse['Horse']['id']; ?></h4>
			 </div>
						<span id="visits" class="sparkline"></span>
		</li>
		</ul><!-- /page-stats -->
</div><!-- /main-header -->

	<div class="panel panel-default fadeInDown animation-delay2" >
							<div class="panel-body p-top-sm">
									<h1 class="no-margin"><?php echo $horse['Horse']['name']; ?></h1>
							</div>
						</div><!-- /panel -->

						<h3 class="no-margin">Imágenes</h3>
					</br>
<div class="panel panel-body" >

	<table class="table-striped table-condensed" width= "100%">
	<tr><td> Lateral A </td><td> Frontal </td><td> Lateral B </td><td> Ovarios (últimos 10 Registros)   <?php echo $this->Html->link('Ver en grande', array('controller' => 'horses', 'action' => 'spline', $horse['Horse']['id'])); ?></td></tr>
		<tr>

			<td> <?php echo $this->Html->Image('/images/original/' . $horse['Horse']['image_izq'], array('alt' => $horse['Horse']['name'], 'class' => 'img-thumbnail img-responsive' ,'width'=>'250px', 'heigth'=> '250px')); ?> </td>

			<td> <?php echo $this->Html->Image('/images/original/' . $horse['Horse']['image_center'], array('alt' => $horse['Horse']['name'], 'class' => 'img-thumbnail img-responsive' ,'width'=>'250px', 'heigth'=> '100px')); ?> </td>

			<td> <?php echo $this->Html->Image('/images/original/' . $horse['Horse']['image_der'], array('alt' => $horse['Horse']['name'], 'class' => 'img-thumbnail img-responsive' ,'width'=>'250px', 'heigth'=> '250px')); ?> </td>
		
			<td>
					
					<div id="splinewrapper" style="display: block; float: left; width:90%; margin-bottom: 20px;"></div>
				    <div class="clear"></div>	
					
					<?php echo $this->HighCharts->render('Spline Chart'); ?>
			</td>

		</tr>


	</table>

					
						<h3 class="no-margin">Información</h3>
					</br>

	<div class="panel panel-body">
<div class="col-lg-6">
 <form id="formToggleLine" class="form-horizontal no-margin form-border"> 
<?php echo $this->Form->create('Horse', array('class' => 'form-vertical', 'type' => 'file')); ?>
<div class="form-group">
                <label class="col-lg-3 control-label">Nombre</label>
      <div class="col-lg-3  input-group">
          <?php echo $this->Form->input('name', array('class' => 'form-control', 'label'=>'', 'type' => 'text', 'style'=>'width: 200px', 'value'=>$horse['Horse']['name'], 'disabled' =>'true')); ?>
      </div>
</div>
			<div class="form-group">
                <label class="col-lg-3 control-label">Propietario</label>
                <div class="col-lg-3  input-group">
                  <strong class="form-control"><?php echo $this->Html->link(__($horse['User']['name']),'/users/view/'.$horse['User']['id'] ); ?> 
                  	</strong>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->
			<div class="form-group">
                <label class="col-lg-3 control-label">N° Inscripción</label>
                <div class="col-lg-3  input-group">
                  <?php echo $this->Form->input('number', array('class' => 'form-control', 'label'=>'', 'type' => 'text', 'style'=>'width: 200px','value'=>$horse['Horse']['number'], 'disabled' =>'true')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->


			<div class="form-group">
                <label class="col-lg-3 control-label">Género</label>
                <div class="col-lg-3  input-group">
                  <?php echo $this->Form->input('gender_id', array('class' => 'form-control', 'label'=>'', 'style'=>'width: 200px','value'=>$horse['Gender']['name'], 'type' => 'text', 'disabled' =>'true')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->

              <div class="form-group">
                <label class="col-lg-3 control-label">Color</label>
			      <div class="col-lg-3  input-group">
			          <?php echo $this->Form->input('name', array('class' => 'form-control', 'label'=>'', 'type' => 'text', 'style'=>'width: 200px', 'value'=>$horse['Color']['name'], 'disabled' =>'true')); ?>
			      </div>
			</div>          

                                                  
            </form>
 </div>
 <div class="col-lg-6">
 <form id="formToggleLine" class="form-horizontal no-margin form-border"> 
<?php echo $this->Form->create('Horse', array('class' => 'form-vertical', 'type' => 'file')); ?>

			<div class="form-group">
                <label class="col-lg-3 control-label">Edad</label>
      <div class="col-lg-3  input-group">
          <?php echo $this->Form->input('name', array('class' => 'form-control', 'label'=>'', 'type' => 'text', 'style'=>'width: 200px', 'value'=>$years, 'disabled' =>'true')); ?>
      </div>
</div>

			<div class="form-group">
                <label class="col-lg-3 control-label">Raza</label>
      <div class="col-lg-3  input-group">
          <?php echo $this->Form->input('name', array('class' => 'form-control', 'label'=>'', 'type' => 'text', 'style'=>'width: 200px', 'value'=>$horse['Breed']['name'], 'disabled' =>'true')); ?>
      </div>
</div>

       <div class="form-group">
                <label class="col-lg-3 control-label">Tipo</label>
      <div class="col-lg-3  input-group">
          <?php echo $this->Form->input('name', array('class' => 'form-control', 'label'=>'', 'type' => 'text', 'style'=>'width: 200px', 'value'=>$horse['Type']['name'], 'disabled' =>'true')); ?>
      </div>
</div>
<div class="form-group">
                <label class="col-lg-3 control-label">Estado</label>
      <div class="col-lg-3  input-group">
          <?php echo $this->Form->input('name', array('class' => 'form-control', 'label'=>'', 'type' => 'text', 'style'=>'width: 200px', 'value'=>$horse['State']['name'], 'disabled' =>'true')); ?>
      </div>
</div>        

            </form>
             </br></br></br>
 </div>
  
 

  <form>

 	<div class="form-group">
                <label class="col-lg-3">Descripción</label>
                <div class="col-lg-6">
                  <?php echo $this->Form->input('description', array('class' => 'form-control', 'label'=>'', 'disabled' =>'true', 'value'=>$horse['Horse']['description'])); ?>

                </div><!-- /.col -->
              </div><!-- /form-group -->

              </form>
</div>

<h3><?php echo __('Historial de Procedimientos'); ?></h3>

</br>
</br>

<?php echo $this->Html->link('Nuevo procedimiento', array('controller' => 'events', 'action' => 'add', $horse['Horse']['id']), array('class' => 'btn btn-success')); ?>


<div class="panel panel-body">
	
	<?php if (!empty($horse['Event'])): ?>
	<table class="table-striped table-bordered table-condensed table-hover" style="width: 90%">
	<tr>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Ovario Derecho'); ?></th>
		<th><?php echo __('Ovario Izquierdo'); ?></th>
		<th><?php echo __('Detalles'); ?></th>
	</tr>

	<?php 
	$reverse  = array_reverse($horse['Event']);


	foreach ($reverse as $event): ?>
		<tr>

		<td><span class="badge badge-success m-left-xs"><?php echo $event['date']; ?></span></td>
		<td><span class="badge badge-info"><?php echo $event['der']; ?></span></td>
		<td><span class="badge badge-info"><?php echo $event['izq']; ?></span></td>
		<td><span class="name"><?php echo $event['details']; ?></span></td>			
			
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

<a class="btn btn-success hidden-print" onclick="PrintElem('#panel')"><i class="fa fa-print"></i> Imprimir</a>

</div>

</div>

	</div>
</div> <!--panel-body -->	

</div>


<script>
	$(function()	{
		$('#invoicePrint').click(function()	{
			window.print();
			});
		});



function PrintElem(elem)
{
      Popup($('<div/>').append($(elem).clone()).html());
}

function Popup(data) 
{
    var mywindow = window.open('', 'my div', 'height=400,width=600');
    mywindow.document.write('<html><head><title>my div</title>');
     mywindow.document.write('<link rel="stylesheet" href="http://www.dynamicdrive.com/ddincludes/mainstyle.css" type="text/css" />');
    mywindow.document.write('</head><body >');
    mywindow.document.write(data);
    mywindow.document.write('</body></html>');

    mywindow.print();
  //  mywindow.close();

    return true;
}
	</script>

	

	
