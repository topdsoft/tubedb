<div class="transactions index">
	<h2><?php echo __('Transactions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('tube_id'); ?></th>
			<th><?php echo $this->Paginator->sort('box_id'); ?></th>
			<th><?php echo $this->Paginator->sort('manufacturer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('newQty'); ?></th>
			<th><?php echo $this->Paginator->sort('usedQty'); ?></th>
			<th><?php echo $this->Paginator->sort('unknownQty'); ?></th>
			<th><?php echo $this->Paginator->sort('notes'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($transactions as $transaction): ?>
	<tr>
		<td><?php echo h($transaction['Transaction']['id']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['created']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($transaction['Tube']['name'], array('controller' => 'tubes', 'action' => 'view', $transaction['Tube']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($transaction['Box']['name'], array('controller' => 'boxes', 'action' => 'view', $transaction['Box']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($transaction['Manufacturer']['name'], array('controller' => 'manufacturers', 'action' => 'view', $transaction['Manufacturer']['id'])); ?>
		</td>
		<td><?php echo h($transaction['Transaction']['newQty']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['usedQty']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['unknownQty']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['notes']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $transaction['Transaction']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $transaction['Transaction']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $transaction['Transaction']['id']), array(), __('Are you sure you want to delete # %s?', $transaction['Transaction']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Transaction'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tubes'), array('controller' => 'tubes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tube'), array('controller' => 'tubes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Boxes'), array('controller' => 'boxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Box'), array('controller' => 'boxes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Manufacturers'), array('controller' => 'manufacturers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manufacturer'), array('controller' => 'manufacturers', 'action' => 'add')); ?> </li>
	</ul>
</div>
