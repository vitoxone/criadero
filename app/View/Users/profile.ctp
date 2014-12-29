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
							<div class="col-3 text-center">
								<a href="#">
									<?php echo $this->Html->image('/images/users/'.AuthComponent::user('rut'), array('width' => 200, 'height' => 200, 'class' => 'image')); ?>
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
      <label class="col-lg-3 control-label">Rut</label>
      <div class="col-lg-3  input-group">
          <?php echo $this->Form->input('name', array('class' => 'form-control', 'label'=>'', 'type' => 'text', 'style'=>'width: 200px', 'value'=>$user['User']['rut'], 'disabled' =>'true')); ?>
      </div>
</div>
			<div class="form-group">
                <label class="col-lg-3 control-label">Nombre Usuario</label>
                <div class="col-lg-3  input-group">
                  <?php echo $this->Form->input('number', array('class' => 'form-control', 'label'=>'', 'type' => 'text', 'style'=>'width: 200px','value'=>$user['User']['username'], 'disabled' =>'true')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->


			<div class="form-group">
                <label class="col-lg-3 control-label">Dirección</label>
                <div class="col-lg-3  input-group">
                  <?php echo $this->Form->input('gender_id', array('class' => 'form-control', 'label'=>'', 'style'=>'width: 200px','value'=>$user['User']['address'], 'type' => 'text', 'disabled' =>'true')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->         

                                                  
            </form>
 </div>
 <!--//////////////////////////////////////////////////////////////////////////////////////////-->

 <div class="col-lg-6">
 </br>
 <form id="formToggleLine" class="form-horizontal no-margin form-border"> 

				<div class="form-group">
                <label class="col-lg-3 control-label">Fecha Creación</label>
                <div class="col-lg-3  input-group">
                  <?php echo $this->Form->input('number', array('class' => 'form-control', 'label'=>'', 'type' => 'text', 'style'=>'width: 200px','value'=>$user['User']['created'], 'disabled' =>'true')); ?>
                  
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