<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>La Reserva</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="/clinica/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Font Awesome -->
	<link href="/clinica/css/font-awesome.min.css" rel="stylesheet">

	<!-- Endless -->
	<link href="/clinica/css/endless.min.css" rel="stylesheet">
	<link href="/clinica/css/endless-skin.css" rel="stylesheet">

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<?php echo $this->Html->script(array('admin.js')); ?>

<?php echo $this->App->js(); ?>
<?php echo $this->Html->script('validation', FALSE); ?>

<?php echo $this->fetch('css'); ?>
<?php echo $this->fetch('script'); ?>

	
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

	<a href="" id="theme-setting-icon"><i class="fa fa-cog fa-lg"></i></a>
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
	
	<div id="wrapper" class="preload">
		<div id="top-nav" class="skin-2 fixed">
			<button type="button" class="navbar-toggle pull-left" id="sidebarToggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<ul class="nav-notification clearfix">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-envelope fa-lg"></i>
						<span class="notification-label bounceIn animation-delay4">7</span>
					</a>
					<ul class="dropdown-menu message dropdown-1">
						<li><a>You have 4 new unread messages</a></li>					  
						<li>
							<a class="clearfix" href="#">
								<?php echo $this->Html->image('/images/users/'.AuthComponent::user('rut'), array('width' => 100, 'height' => 100, 'class' => 'image')); ?>
								<div class="detail">
									<strong><?php echo AuthComponent::user('name') ?></strong>
									<p class="no-margin">
										Lorem ipsum dolor sit amet...
									</p>
									<small class="text-muted"><i class="fa fa-check text-success"></i> 27m ago</small>
								</div>
							</a>	
						</li>
						<li>
							<a class="clearfix" href="#">
									<?php echo $this->Html->image('/images/users/'.AuthComponent::user('rut'), array('width' => 100, 'height' => 100, 'class' => 'image')); ?>
								<div class="detail">
									<strong>Jane Doe</strong>
									<p class="no-margin">
										Lorem ipsum dolor sit amet...
									</p>
									<small class="text-muted"><i class="fa fa-check text-success"></i> 5hr ago</small>
								</div>
							</a>	
						</li>
						<li>
							<a class="clearfix" href="#">
								<img src="img/user.jpg" alt="User Avatar">
								<div class="detail">
									<strong>Bill Doe</strong>
									<p class="no-margin">
										Lorem ipsum dolor sit amet...
									</p>
									<small class="text-muted"><i class="fa fa-reply"></i> Yesterday</small>
								</div>
							</a>	
						</li>
						<li>
							<a class="clearfix" href="#">
								<img src="img/user2.jpg" alt="User Avatar">
								<div class="detail">
									<strong>Baby Doe</strong>
									<p class="no-margin">
										Lorem ipsum dolor sit amet...
									</p>
									<small class="text-muted"><i class="fa fa-reply"></i> 9 Feb 2013</small>
								</div>
							</a>	
						</li>
						<li><a href="#">View all messages</a></li>					  
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-tasks fa-lg"></i>
						<span class="notification-label bounceIn animation-delay5">4</span>
					</a>
					<ul class="dropdown-menu task dropdown-2">
						<li><a href="#">You have 4 tasks to complete</a></li>					  
						<li>
							<a href="#">
								<div class="clearfix">
									<span class="pull-left">Bug Fixes</span>
									<small class="pull-right text-muted">78%</small>
								</div>
								<div class="progress">
									<div class="progress-bar" style="width:78%"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="clearfix">
									<span class="pull-left">Software Updating</span>
									<small class="pull-right text-muted">54%</small>
								</div>
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-success" style="width:54%"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="clearfix">
									<span class="pull-left">Database Migration</span>
									<small class="pull-right text-muted">23%</small>
								</div>
								<div class="progress">
									<div class="progress-bar progress-bar-warning" style="width:23%"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="clearfix">
									<span class="pull-left">Unit Testing</span>
									<small class="pull-right text-muted">92%</small>
								</div>
								<div class="progress progress-striped active">
									<div class="progress-bar progress-bar-danger " style="width:92%"></div>
								</div>
							</a>
						</li>
						<li><a href="#">View all tasks</a></li>					  
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-bell fa-lg"></i>
						<span class="notification-label bounceIn animation-delay6">5</span>
					</a>
					<ul class="dropdown-menu notification dropdown-3">
						<li><a href="#">You have 5 new notifications</a></li>					  
						<li>
							<a href="#">
								<span class="notification-icon bg-warning">
									<i class="fa fa-warning"></i>
								</span>
								<span class="m-left-xs">Server #2 not responding.</span>
								<span class="time text-muted">Just now</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="notification-icon bg-success">
									<i class="fa fa-plus"></i>
								</span>
								<span class="m-left-xs">New user registration.</span>
								<span class="time text-muted">2m ago</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="notification-icon bg-danger">
									<i class="fa fa-bolt"></i>
								</span>
								<span class="m-left-xs">Application error.</span>
								<span class="time text-muted">5m ago</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="notification-icon bg-success">
									<i class="fa fa-usd"></i>
								</span>
								<span class="m-left-xs">2 items sold.</span>
								<span class="time text-muted">1hr ago</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="notification-icon bg-success">
									<i class="fa fa-plus"></i>
								</span>
								<span class="m-left-xs">New user registration.</span>
								<span class="time text-muted">1hr ago</span>
							</a>
						</li>
						<li><a href="#">View all notifications</a></li>					  
					</ul>
				</li>
				<li class="profile dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<strong><?php echo AuthComponent::user('name') ?></strong>
						<span><i class="fa fa-chevron-down"></i></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a class="clearfix" href="#">
									<?php echo $this->Html->image('/images/users/'.AuthComponent::user('rut'), array('width' => 100, 'height' => 100, 'class' => 'image')); ?>
								<div class="detail">
									<strong><?php echo AuthComponent::user('name') ?></strong>
									<p class="grey"><?php echo AuthComponent::user('username') ?></p> 
								</div>
							</a>
						</li>
						<li><a tabindex="-1" href="profile.html" class="main-link"><i class="fa fa-edit fa-lg"></i> Edit profile</a></li>
						<li><a tabindex="-1" href="gallery.html" class="main-link"><i class="fa fa-picture-o fa-lg"></i> Photo Gallery</a></li>
						<li><a tabindex="-1" href="#" class="theme-setting"><i class="fa fa-cog fa-lg"></i> Setting</a></li>
						<li class="divider"></li>
						<li><a tabindex="-1" href="http://localhost/clinica/users/logout" class="main-link"><i class="fa fa-lock fa-lg"></i> Salir</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /top-nav-->
		
		<aside class="skin-2 fixed">
			<div class="brand">
				<span>La</span>
				<span class="text-toggle"> Reserva</span>
			</div><!-- /brand -->					
			<div class="sidebar-inner">
				<div class="size-toggle">
					<a class="btn btn-sm" id="sizeToggle">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a >
					<a class="btn btn-sm pull-right" href="http://localhost/clinica/users/logout">
						<i class="fa fa-power-off"></i>
					</a>
				</div><!-- /size-toggle -->	

				<div class="user-block clearfix">
					<?php echo $this->Html->image('/images/users/'.AuthComponent::user('rut'), array('width' => 100, 'height' => 100, 'class' => 'image')); ?>
					<div class="detail">
						<strong><?php echo AuthComponent::user('name') ?></strong><span class="badge badge-danger bounceIn animation-delay4 m-left-xs"><label for="SomeTextField" id="unread"></label></span>
						<ul class="list-inline">
							<li>
									<a <?php echo $this->Html->link('Perfil', array('controller' => 'users', 'action' => 'profile', 'class'=>'text')); ?> </a>
									
								</li>
							<li>
									<a <?php echo $this->Html->link('Mensajes', array('controller' => 'messages', 'action' => 'index',AuthComponent::user('id'), 'class'=>'text')); ?> </a>
									
								</li>
						</ul>
					</div>
				</div><!-- /user-block -->

				<div class="search-block">
					<div class="input-group">
						<input type="text" class="form-control input-sm" placeholder="search here...">
						<span class="input-group-btn">
							<button class="btn btn-default btn-sm" type="button"><i class="fa fa-search"></i></button>
						</span>
					</div><!-- /input-group -->
				</div><!-- /search-block -->
				<div class="main-menu">
					<ul>
						<li>
							<a href="http://localhost/clinica/horses/index_details">
								<span class="menu-icon">
									<i class="fa   fa-camera fa-lg"></i> 
								</span>
								<span class="text">
									<a<?php echo $this->Html->link('Caballos', array('controller' => 'horses', 'action' => 'index', 'class'=>'text')); ?></a>
								</span>
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
							<a href="http://localhost/clinica/breeds/index">
								<span class="menu-icon">
									<i class="fa fa-barcode fa-lg"></i> 
								</span>
								<span class="text">
									<a<?php echo $this->Html->link('Razas', array('controller' => 'breeds', 'action' => 'index', 'class'=>'text')); ?></a>
								</span>
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
							<a href="http://localhost/clinica/types/index">
								<span class="menu-icon">
									<i class="fa fa-sort fa-lg"></i> 
								</span>
								<span class="text">
									<a<?php echo $this->Html->link('Tipos', array('controller' => 'types', 'action' => 'index', 'class'=>'text')); ?></a>
								</span>
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
							<a href="http://localhost/clinica/colors/index">
								<span class="menu-icon">
									<i class="fa fa-adjust fa-lg"></i> 
								</span>
								<span class="text">
									<a<?php echo $this->Html->link('Colores', array('controller' => 'colors', 'action' => 'index', 'class'=>'text')); ?></a>
								</span>
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
							<a href="http://localhost/clinica/states/index">
								<span class="menu-icon">
									<i class="fa    fa-thumbs-up fa-lg"></i> 
								</span>
								<span class="text">
									<a<?php echo $this->Html->link('Estados', array('controller' => 'states', 'action' => 'index', 'class'=>'text')); ?></a>
								</span>
								<span class="menu-hover"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a <?php echo $this->Html->link('Ver Estados', array('controller' => 'states', 'action' => 'index', 'class'=>'text')); ?> </a>
									
								</li>
								<li>
									<a <?php echo $this->Html->link('Agregar Estado', array('controller' => 'states', 'action' => 'add', 'class'=>'text')); ?> </a>
									
								</li>
							</ul>
						</li>
						<li>
							<a href="http://localhost/clinica/roles/index">
								<span class="menu-icon">
									<i class="fa fa-group fa-lg"></i> 
								</span>
								<span class="text">
									<a<?php echo $this->Html->link('Roles', array('controller' => 'roles', 'action' => 'index', 'class'=>'text')); ?></a>
								</span>
								<span class="menu-hover"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a <?php echo $this->Html->link('Ver Roles', array('controller' => 'roles', 'action' => 'index', 'class'=>'text')); ?> </a>
									
								</li>
								<li>
									<a <?php echo $this->Html->link('Agregar Rol', array('controller' => 'roles', 'action' => 'add', 'class'=>'text')); ?> </a>
									
								</li>
							</ul>
						</li>
						<li>
							<a href="http://localhost/clinica/users/index">
								<span class="menu-icon">
									<i class="fa fa-group fa-lg"></i> 
								</span>
								<span class="text">
									<a<?php echo $this->Html->link('Usuarios', array('controller' => 'users', 'action' => 'index', 'class'=>'text')); ?></a>
								</span>
								<span class="menu-hover"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a <?php echo $this->Html->link('Ver Usuarios', array('controller' => 'users', 'action' => 'index', 'class'=>'text')); ?> </a>
									
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

		<div id="main-container">
			<div id="breadcrumb">
				<ul class="breadcrumb">
					 <li><i class="fa fa-home"></i><a href="index.html"> Home</a></li>
					 <?php echo $this->Session->flash(); ?>
					 <?php echo $this->fetch('content'); ?>
					<?php echo $this->element('sql_dump'); ?>
				</ul>
			</div><!-- breadcrumb -->
		</div><!-- /main-container -->
	</div><!-- /wrapper -->

	<a href="" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>
	
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
	<!-- Bootstrap -->
    <script src="/clinica/js/bootstrap.min.js"></script>
   
	<!-- Cookie -->
	<script src='/clinica/js/jquery.cookie.min.js'></script>

	<!-- Endless -->
	<script src="/clinica/js/endless/endless.js"></script>
	
  </body>
</html>