<div class="messages view">
<h2><?php echo __('Message'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($message['Message']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sender'); ?></dt>
		<dd>
			<?php echo $this->Html->link($message['Sender']['name'], array('controller' => 'users', 'action' => 'view', $message['Sender']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Receiver'); ?></dt>
		<dd>
			<?php echo $this->Html->link($message['Receiver']['name'], array('controller' => 'users', 'action' => 'view', $message['Receiver']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($message['Message']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($message['Message']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('View'); ?></dt>
		<dd>
			<?php echo h($message['Message']['view']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($message['Message']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Message'), array('action' => 'edit', $message['Message']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Message'), array('action' => 'delete', $message['Message']['id']), null, __('Are you sure you want to delete # %s?', $message['Message']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Messages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sender'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
