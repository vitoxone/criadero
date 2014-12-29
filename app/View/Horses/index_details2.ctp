
  <head>
	 
    <meta charset="utf-8">
    <title>Adoptalo Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	

	
	<!-- Endless -->
	<link href="/criadero/css/endless.min.css" rel="stylesheet">

	
  </head>
   
   <body class="overflow-hidden">
	 
	<div id="theme-setting">
		<div class="title">
			<strong class="no-margin">Skin Color</strong>
		</div>
		<div class="theme-box">
			<a class="theme-color" style="background:#323447" id="default"></a>
			<a class="theme-color" style="background:#efefef" id="skin-1"></a>
			<a class="theme-color" style="background:#a93922" id="skin-2"></a>
			<a class="theme-color" style="background:#3e6b96" id="skin-3"></a>
			<a class="theme-color" style="background:#635247" id="skin-4"></a>
		</div>
	</div><!-- /theme-setting -->
		
		
			 <aside class="skin-4 fixed">
			</br>
			</br>
			</br> 						
			<div class="sidebar-inner">
				<div class="user-block clearfix">
					<img src="../img/logo1.png" alt="User Avatar">
				</br>
				</br>
				</br>
				</div><!-- /user-block -->

				<div class="brand">
				<span>Adoptalo</span>
			</div><!-- /brand -->
				<div class="main-menu">
					<ul>
						<li>
							<span class="text">
								
								<li><?php echo $this->Html->link(__('Nuevo Caballo'), array('action' => 'add')); ?></li>
								</span>
								<span class="menu-hover"></span>
							
						</li>
							<li>
							
								<span class="text">
									<li><?php echo $this->Html->link(__('Nueva Raza'), array('controller' => 'breeds', 'action' => 'add')); ?> </li>
								</span>
								<span class="menu-hover"></span>
							
						</li>
						<li>
							<span class="text">
									<li><?php echo $this->Html->link(__('Nuevo Tipo'), array('controller' => 'types', 'action' => 'add')); ?> </li>
								</span>
								<span class="menu-hover"></span>
							
						</li>
						<li>
							<span class="text">
									<li><?php echo $this->Html->link(__('Nuevo Color'), array('controller' => 'colors', 'action' => 'add')); ?> </li>
								</span>
							
						</li>
					</ul>
					
				</div><!-- /main-menu -->
			</div><!-- /sidebar-inner -->
		</aside> 
	
<br />
<br />
<br />
<div class="btn-group">
  <button type="button" class="btn btn-default">
  <?php echo $this->Html->link(__('Imágenes'), array('action' => 'index')); ?>
   </button>

   <button type="button" class="btn btn-selected">
   	Listado
   </button>
</div>	
	<div class="container">
	</br>
	</br>
	</br>
			<table class="table-striped table-bordered table-condensed table-hover">
	<tr>
		<th><?php echo $this->Paginator->sort('Imagen'); ?></th>
		<th><?php echo $this->Paginator->sort('N° Registro'); ?></th>
		<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
		<th><?php echo $this->Paginator->sort('Fecha Nacimiento'); ?></th>
		<th><?php echo $this->Paginator->sort('Género'); ?></th>
		<th><?php echo $this->Paginator->sort('Raza'); ?></th>
		<th><?php echo $this->Paginator->sort('Tipo'); ?></th>
		<th><?php echo $this->Paginator->sort('Color'); ?></th>
		<th><?php echo $this->Paginator->sort('Estado'); ?></th>
		<th><?php echo $this->Paginator->sort('Último Paseo'); ?></th>
		<th><?php echo $this->Paginator->sort('Pasear'); ?></th>
		<th class="actions">#</th>
	</tr>
	<?php foreach ($horses as $horse): ?>
	<tr>
		<td><?php echo $this->Html->Image('/images/small/' . $horse['Horse']['image'], array('width' => 100, 'height' => 100, 'alt' => $horse['Horse']['image'], 'class' => 'image')); ?></td>
		<td><span class="category"><?php echo $horse['Horse']['number']; ?></span></td>
		<td><span class="brand"><?php echo $horse['Horse']['name']; ?></span></td>
		<td><span class="name"><?php echo $horse['Horse']['birthdate']; ?></span></td>
		<td><span class="name"><?php echo $horse['Gender']['name']; ?></span></td>
		<td><span class="name"><?php echo $horse['Breed']['name']; ?></span></td>
		<td><span class="name"><?php echo $horse['Type']['name']; ?></span></td>
		<td><span class="name"><?php echo $horse['Color']['name']; ?></span></td>
		<td><span class="name"><?php echo $horse['State']['name']; ?></span></td>
		<td><span class="name"><?php echo $horse['Horse']['last_walk']; ?></span></td>

		<td><div class="btn-group">
  

   <?php 

         if($horse['Horse']['last_walk'] +2 < date('Y-m-d') ){	?>
         	<button class="btn btn-success ">
          		<?php echo $this->Html->link(__('_____'), array('action' => 'add')); 

      		}
      		else ?>
      		</button>
      		<button class="btn btn-danger">
      			 <?php echo $this->Html->link(__('_____'), array('action' => 'add')); ?>
   
   			</button>

</div></td>

		<td class="actions" >
			 <?php echo $this->Html->link(__('Ver'),'/horses/view/'.$horse['Horse']['id'] ,array('class' => 'btn btn-success')); ?> 
            <?php echo $this->Html->link(__('Editar'),'/horses/edit/'.$horse['Horse']['id'] ,array('class' => 'btn btn-success')); ?> 
				<?php echo $this->Form->postLink(__('Borrar') , array('action' => 'delete', $horse['Horse']['id']), null, __('Are you sure you want to delete # %s?', $horse['Horse']['id'])); ?>
				</td>
	</tr>
	<?php endforeach; ?>
</table>

<br />

<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>

		</div><!-- /main-container -->
	</div><!-- /wrapper -->

	
	
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
	
	<!-- Bootstrap -->
    <script src="/adoptalo4/js/bootstrap.min.js"></script>
 
	
	

	<!-- Endless -->
	<script src="/adoptalo4/js/endless.js"></script>
	
	
	
  </body> 
  

  


