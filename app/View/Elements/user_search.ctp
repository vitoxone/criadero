<?php
$url = isset($url) ? $url : array('action' => 'index');
?>
<div class="row-fluid">
	<div class="span12">
		<div class="clearfix filter">
			<?php
			echo $this->Form->create('User', array(
				'class' => 'inline',
				'url' => $url,
			));

			$this->Form->inputDefaults(array(
				'label' => false,
				'class' => 'span11',
			));

			echo $this->Form->input('chooser', array(
				'type' => 'hidden',
				'value' => isset($this->request->query['chooser']),
			));

			echo $this->Form->input('filter', array(
				'title' => __d('croogo', 'Search'),
				'placeholder' => __d('croogo', 'Search...'),
				'div' => 'input text span3',
				'tooltip' => false,
			));

			if(!isset($this->request->query['chooser'])){

				echo $this->Form->input('role_id', array(
					'options' => $roles,
					'empty' => __d('croogo', 'Type'),
					'div' => 'input select span2',
				));

				echo $this->Form->input('active', array(
					'options' => array(
						'1' => __d('croogo', 'Activo'),
						'0' => __d('croogo', 'Inactivo'),
					),
					'empty' => __d('croogo', 'Status'),
					'div' => 'input select span2',
				));

			}

			echo $this->Form->submit(__d('croogo', 'Filter'), array('class' => 'btn',
				'div' => 'input submit span2'
			));
			echo $this->Form->end();
			?>
		</div>
	</div>
</div>