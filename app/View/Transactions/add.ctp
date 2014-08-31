<div class="transactions form">
<?php echo $this->Form->create('Transaction'); ?>
	<fieldset>
		<legend><?php echo __('Add Transaction'); ?></legend>
	<?php
		echo $this->Form->input('tube_id');
		echo $this->Form->input('box_id');
		echo $this->Form->input('manufacturer_id');
		echo $this->Form->input('newQty');
		echo $this->Form->input('usedQty');
		echo $this->Form->input('unknownQty');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Transactions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tubes'), array('controller' => 'tubes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tube'), array('controller' => 'tubes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Boxes'), array('controller' => 'boxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Box'), array('controller' => 'boxes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Manufacturers'), array('controller' => 'manufacturers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manufacturer'), array('controller' => 'manufacturers', 'action' => 'add')); ?> </li>
	</ul>
</div>
