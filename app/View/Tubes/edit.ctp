<div class="tubes form">
<?php echo $this->Form->create('Tube'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tube'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('testable');
		echo $this->Form->input('Box');
		echo $this->Form->input('Tag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tube.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Tube.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tubes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mtbs'), array('controller' => 'mtbs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mtb'), array('controller' => 'mtbs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Boxes'), array('controller' => 'boxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Box'), array('controller' => 'boxes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
