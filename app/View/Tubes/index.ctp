<div class="tubes index">
	<h2><?php echo __('Tubes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('testable'); ?></th>
			<th></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tubes as $tube): ?>
	<tr>
		<td><?php echo h($tube['Tube']['name']); ?>&nbsp;</td>
		<td><?php echo h($tube['Tube']['testable']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tube['Tube']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tube['Tube']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tube['Tube']['id']), array(), __('Are you sure you want to delete # %s?', $tube['Tube']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Tube'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Mtbs'), array('controller' => 'mtbs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mtb'), array('controller' => 'mtbs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Boxes'), array('controller' => 'boxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Box'), array('controller' => 'boxes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
