<!DOCTYPE html>
<html lang="es">
  <head>
  	<meta charset="utf-8">
    <title>Criadero de Caballos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

        <!-- Bootstrap core CSS -->
    <link href="/criadero1/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Font Awesome-->
	<link href="/criadero1/css/font-awesome.min.css" rel="stylesheet">

	<!-- Datatable -->
	<link href="/criadero1/css/jquery.dataTables_themeroller.css" rel="stylesheet">
	
	<!-- Endless -->
	<link href="/criadero1/css/endless.min.css" rel="stylesheet">
	

  </head>

  <body class="overflow-hidden">
  	<!-- Overlay Div -->
	 <div id="overlay">
		<div class="overlay-inner">
			<div id="followingBallsG">
				<div id="followingBallsG_1" class="followingBallsG">
				</div>
				<div id="followingBallsG_2" class="followingBallsG">
				</div>
				<div id="followingBallsG_3" class="followingBallsG">
				</div>
				<div id="followingBallsG_4" class="followingBallsG">
				</div>
			</div>
		</div>
	</div>
	<!--
	<a href="" id="theme-setting-icon"><i class="fa fa-cog fa-lg"></i></a>
	<div id="theme-setting">
		<div class="title">
			<strong class="no-margin">Suggest Color</strong>
		</div>
		<div class="theme-box">
			<a class="theme-color" style="background:#323447" id="default"></a>
			<a class="theme-color" style="background:#efefef" id="skin-1"></a>
			<a class="theme-color" style="background:#a93922" id="skin-2"></a>
			<a class="theme-color" style="background:#3e6b96" id="skin-3"></a>
			<a class="theme-color" style="background:#635247" id="skin-4"></a>
		</div>
	</div><!-- /theme-setting -->

	<div id="wrapper" class="preload">
		<header class="navbar navbar-fixed-top bg-white ">
			<div class="main-container">
				<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
				 <ul class="nav navbar-nav navbar-left">	
				 	<img src="/criadero1/img/logo3.png" alt="User Avatar">
				  </ul>
				 <ul class="nav navbar-nav navbar-right">
				  <li><?php echo $this->Html->link('Volver Inicio', array('controller'=>'pages', 'action'=>'home')); ?></li>	
						
					</ul>
				</nav>
			</div>
		</header>
		<aside class="asside">					
			<div class="sidebar-inner">
				</br></br></br></br></br></br></br>
				<div class="main-menu">
					<ul>
						
						<li>
							<a <?php echo $this->Html->link('Caballos', array('controller' => 'horses', 'action' => 'index', 'class'=>'text')); ?> 
								
								<span class="menu-hover"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a <?php echo $this->Html->link('Ver Galería', array('controller' => 'horses', 'action' => 'index', 'class'=>'text')); ?> </a>
									
								</li>
								<li>
									<a <?php echo $this->Html->link('Ver Listado', array('controller' => 'horses', 'action' => 'index_details', 'class'=>'text')); ?> </a>
									
								</li>
								<li>
									<a <?php echo $this->Html->link('Agregar Caballo', array('controller' => 'horses', 'action' => 'add', 'class'=>'text')); ?> </a>
									
								</li>
							</ul>
						</li>
						<li>
							<li>
							<a <?php echo $this->Html->link('Paseos', array('controller' => 'walks', 'action' => 'index', 'class'=>'text')); ?> 
								
								<span class="menu-hover"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a <?php echo $this->Html->link('Ver Últimos Paseos', array('controller' => 'walks', 'action' => 'index', 'class'=>'text')); ?> </a>
									
								</li>
								<li>
									<a <?php echo $this->Html->link('Agregar Paseo', array('controller' => 'walks', 'action' => 'add', 'class'=>'text')); ?> </a>
									
								</li>
							</ul>
						</li>
						<li>
							<li>
							<a <?php echo $this->Html->link('Razas', array('controller' => 'breeds', 'action' => 'index', 'class'=>'text')); ?> 
								
								<span class="menu-hover"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a <?php echo $this->Html->link('Ver Razas', array('controller' => 'breeds', 'action' => 'index', 'class'=>'text')); ?> </a>
									
								</li>
								<li>
									<a <?php echo $this->Html->link('Agregar Raza', array('controller' => 'breeds', 'action' => 'add', 'class'=>'text')); ?> </a>
									
								</li>
							</ul>
						</li>
						<li>
							<li>
							<a <?php echo $this->Html->link('Tipos', array('controller' => 'types', 'action' => 'index', 'class'=>'text')); ?> 
								
								<span class="menu-hover"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a <?php echo $this->Html->link('Ver Tipos', array('controller' => 'types', 'action' => 'index', 'class'=>'text')); ?> </a>
									
								</li>
								<li>
									<a <?php echo $this->Html->link('Agregar Tipo', array('controller' => 'types', 'action' => 'add', 'class'=>'text')); ?> </a>
									
								</li>
							</ul>
						</li>
						<li>
							<li>
							<a <?php echo $this->Html->link('Colores', array('controller' => 'colors', 'action' => 'index', 'class'=>'text')); ?> 
								
								<span class="menu-hover"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a <?php echo $this->Html->link('Ver Colores', array('controller' => 'colors', 'action' => 'index', 'class'=>'text')); ?> </a>
									
								</li>
								<li>
									<a <?php echo $this->Html->link('Agregar Color', array('controller' => 'colors', 'action' => 'add', 'class'=>'text')); ?> </a>
									
								</li>
							</ul>
						</li>
						<li>
							<li>
							<a <?php echo $this->Html->link('Usuarios', array('controller' => 'types', 'action' => 'index', 'class'=>'text')); ?> 
								
								<span class="menu-hover"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a <?php echo $this->Html->link('Listar Usuarios', array('controller' => 'users', 'action' => 'index', 'class'=>'text')); ?> </a>
									
								</li>
								<li>
									<a <?php echo $this->Html->link('Agregar Usuario', array('controller' => 'users', 'action' => 'add', 'class'=>'text')); ?> </a>
									
								</li>
							</ul>
						</li>
						
					</ul>
					
					
				</div><!-- /main-menu -->
			</div><!-- /sidebar-inner -->
		</aside>
	</br>
		<div  id="main-container">
		<div class="grey-container">
             <br/>
             <br/>
             <br />
			<ul class="breadcrumb breadcrumb-lg">
				<li><i class="fa fa-home"></i><?php echo $this->Html->link('Home', array('controller' => 'horses', 'action' => 'index')); ?> / <?php echo $this->Html->getCrumbs(' / '); ?></li>
			</ul>

			<?php echo $this->Session->flash(); ?>
			
			<?php echo $this->fetch('content'); ?>
			<br />
			<div id="msg"></div>
			<br />
		</div> <!-- /.grey-container shortcut-wrapper -->
	</div>



		<!-- Footer
		================================================== -->
	<footer align="center"  > ©Criadero© Todos los Derechos Reservados </footer>

	<a href="" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>
	
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
	<!-- Jquery -->
	<script src="/criadero1/js/jquery-1.10.2.min.js"></script>

	<!-- Bootstrap -->
    <script src="/criadero1/js/bootstrap.js"></script>

    <script src="/criadero1/js/bootstrap-tooltip.js"></script>
   
	<!-- Morris -->
	<script src='/criadero1/js/rapheal.min.js'></script>	
	<script src='/criadero1/js/morris.min.js'></script>	
	
	<!-- Colorbox -->
	<script src='/criadero1/js/jquery.colorbox.min.js'></script>	

	<!-- Sparkline -->
	<script src='/criadero1/js/jquery.sparkline.min.js'></script>

	<!-- Cookie -->
	<script src='/criadero1/js/jquery.cookie.min.js'></script>
	
	<!-- Endless -->
	<script src="/criadero1/js/endless/endless_dashboard.js"></script>
	<script src="/criadero1/js/endless/endless.js"></script>
	
  </body>
</html>