<div class="users form">

	<fieldset>
		<legend><?php echo __('Admin Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('rut');
		echo $this->Form->input('username');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('gender_id');
		echo $this->Form->input('careers_id');
		echo $this->Form->input('role_id');
		echo $this->Form->input('year');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Genders'), array('controller' => 'genders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gender'), array('controller' => 'genders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Careers'), array('controller' => 'careers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Career'), array('controller' => 'careers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>

			<ul class="tab-bar grey-tab">
					<li>
					<div>
						<?php echo $this->Html->link(__('Mi Perfil'),'/users/profile/'.$user['User']['id'] ,array('class' => 'tab block text-center fa fa-edit fa-2x')); ?> 
					</div>

					
				</li>
				<li>
					<div>
						<?php echo $this->Html->link(__('Editar'),'/users/edit/'.$user['User']['id'] ,array('class' => 'tab block text-center fa fa-edit fa-2x')); ?> 
					</div>

					
				</li>
				<li>
					<a href="#message" data-toggle="tab">
						<span class="block text-center">
							<i class="fa fa-envelope fa-2x"></i> 
						</span>	
						Mensajes
					</a>
				</li>
			</ul>
			
			<div class="padding-md">
				<div class="row">
					<div class="col-md-3 col-sm-3">
						<div class="row">
							<div class="col-4 text-center">
								<a href="#">
									<?php echo $this->Html->image('/images/users/'.AuthComponent::user('rut'), array('width' => 200, 'height' => 200, 'class' => 'image')); ?>

									<?php echo $this->Form->input('image', array('class' => 'form-control', 'label'=>'Cambiar', 'type'=>'file')); ?>
								</a>
								 
                  
                  
							
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.col -->

					<div class="col-md-9 col-sm-9">
						<div class="tab-content">
							<div class="tab-pane fade in active" id="overview">
								<div class="row">
									<div class="col-md-9">
							
								<h2><strong><?php echo h($user['User']['name']); ?></strong></h2>
								<h4><strong><?php echo h($user['User']['email']); ?></strong></h4>
								<div class="seperator"></div>
								<a class="btn btn-success btn-lg m-bottom-sm"><?php echo h($user['Role']['name']); ?></a>
							</div><!-- /.col -->
										</div><!-- /panel -->
											
										<div class="panel panel-default fadeInDown animation-delay3">



<!--////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="col-lg-6">
</br>
<?php echo $this->Form->create('User', array('class' => 'form-vertical', 'type' => 'file')); ?>	
 <form id="formToggleLine" class="form-horizontal no-margin form-border"> 

			<div class="form-group">
			      <label class="col-lg-3 control-label">Nombre</label>
			      <div class="col-lg-3  input-group">
			          <?php echo $this->Form->input('name', array('class' => 'form-control', 'label'=>'', 'type' => 'text', 'style'=>'width: 200px')); ?>
			      </div>
			</div>
		
				<div class="form-group">
                <label class="col-lg-3 control-label">Rol</label>
                <div class="col-lg-3  input-group">
                  <?php echo $this->Form->input('role_id', array('class' => 'form-control', 'label'=>'', 'style'=>'width: 200px')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->

			<div class="form-group">
                <label class="col-lg-3 control-label">Email</label>
                <div class="col-lg-3  input-group">
                  <?php echo $this->Form->input('email', array('class' => 'form-control', 'label'=>'', 'style'=>'width: 200px')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->         

                                                  
            </form>
 </div>
 <!--//////////////////////////////////////////////////////////////////////////////////////////-->

 <div class="col-lg-6">
 </br>
 <form id="formToggleLine" class="form-horizontal no-margin form-border"> 

				<div class="form-group">
                <label class="col-lg-3 control-label">Rut</label>
                <div class="col-lg-3  input-group">
                  <?php echo $this->Form->input('rut', array('class' => 'form-control', 'label'=>'', 'type' => 'text', 'style'=>'width: 200px')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->
			<div class="form-group">
                <label class="col-lg-3 control-label">Última Actualización</label>
                <div class="col-lg-3  input-group">
                  <?php echo $this->Form->input('number', array('class' => 'form-control', 'label'=>'', 'type' => 'text', 'style'=>'width: 200px','value'=>$user['User']['modified'], 'disabled' =>'true')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->
                                                         
            </form>
 </div>
 <!--//////////////////////////////////////////////////////////////////////////////////////////-->
										</div><!-- /panel -->
								</div><!-- /.row -->
							</div><!-- /tab1 -->
							</div>
	
						</div><!-- /tab-content -->
					</div><!-- /.col -->
