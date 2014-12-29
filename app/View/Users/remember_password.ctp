<?php echo $this->Session->flash() ?>
<div class="row">
	<div class="col-lg-12">
	<?php
	echo $this->Form->create
	(
		'User',
		array
		(
			'url' => array
			(
				'controller' => 'users',
				'action'	 => 'remember_password'
			),
			'class'			=> 'col-12',
			'inputDefaults' => array
			(
				'label' => false,
				'error' => false
			)
		)
	);
	?>
		<h2><?php echo __('Olvido su contraseña?') ?></h2>
		<hr>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email</label>
	    <?php echo $this->Form->input('email',array('placeholder' => __('E-mail'),'class' => 'form-control email-field')); ?>
	  </div>

	  <button type="submit" class="btn btn-primary btn-lg">Siguiente paso</button>

	</form>
	</div>
</div>
