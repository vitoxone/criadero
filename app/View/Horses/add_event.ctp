
  			<div class="fa fa-print">
    			<div class="modal-content">
      				<div class="modal-header">
						<h4>Modal with form</h4>
      				</div>
				    <div class="modal-body">
						<?php echo $this->Form->create('Event'); ?>
							<fieldset>
								<legend><?php echo __('Add Event'); ?></legend>
							<?php
								echo $this->Form->input('date');
								echo $this->Form->input('eventype_id');
								echo $this->Form->input('horse_id');
								echo $this->Form->input('detail');
							?>
							</fieldset>
						<?php echo $this->Form->end(__('Submit')); ?>
					</div>
				</div>
			</div>

